<?php

namespace App\Services;

use Session;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Exception\RequestException;
use App\Entity\ResponseDTO;

class ApiCallback{
    public static function request($method, $url, $params = [], $headers = [], $multipart = false, $useAccessToken = true, $isFile = false){
        $client = new Client(['base-uri' => env('API_BASE_URL')]);
        $method = strtoupper($method);

        $option = [];
        $option["headers"] = $headers;
        $option["timeout"] = env('API_REQUEST_TIMEOUT');

        if($useAccessToken){
            if(!empty(Session::get('access-token')))
                $option["headers"]["Authorization"] = "Bearer ".Session::get("access_token");
            else
                ApiCallback::removeAccessToken();
        }

        if(!empty($params)){
            switch($method){
                case "GET":
                    $option["headers"] += [
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json'
                    ];

                    $option["query"] = $params;
                    break;

                default:
                    if($multipart){
                        $multipart_params = [];
                        foreach ($params as $key => $param) {
                            if (!empty($param)) {
                                if (is_object($param)) {
                                    $multipart_params[] = [
                                        'filename' => $param->getClientOriginalName(),
                                        'name'     => $key,
                                        'contents' => file_get_contents( $param->getPathName() ),
                                    ];
                                }else{
                                    $multipart_params[] = [
                                        "name" => $key,
                                        "contents" => $param
                                    ];
                                }
                            }
                        }

                        $option["multipart"] = $multipart_params;
                    }else{
                        $option["headers"] += [
                            'Content-Type' => 'application/json',
                            'Accept' => 'application/json'
                        ];

                        $option["json"] = $params;
                    }


                    break;
            }
        }

        try{
            if($isFile){
                $option["stream"] = true;
                $response = $client->request(strtoupper($method), $url, $option);
                if($response->getBody() === NULL) abort($response->statusCode, $response->reasonPhrase.". Please contact System Admin");

                return \Response::make($response->getBody()->getContents(), 200, $response->getHeaders());
            }else{
                $response = $client->request(strtoupper($method), $url, $option);
                if($response->getBody() === NULL) abort($response->statusCode, $response->reasonPhrase.". Please contact System Admin");

                $jsonObj = json_decode((string) $response->getBody());

                dd($jsonObj);

                return new ResponseDTO($jsonObj->status ?? false,$jsonObj->code ?? null,$jsonObj->message ?? null , $jsonObj->data ?? null);
            }
        }catch(RequestException $e){
            $response = $e->getResponse();
            if($response->getBody() === NULL) abort($response->statusCode, $response->reasonPhrase.". Please contact System Admin");

            $jsonObj = json_decode((string) $response->getBody());

            if(!$useAccessToken){
                if($response->getStatusCode() == 401 || $response->getStatusCode() == 403)
                    ApiCallback::removeAccessToken();
            }else{
                switch($response->getStatusCode()){
                    case 401:
                        ApiCallback::removeAccessToken('Error 401: Request to API "'.env('API_BASE_URL').$url.'" is unauthorized. Please Contact System Admin.');
                        break;

                    case 403:
                        // if user is unauthorized (403) move to dashboard or login if not logged in
                        Redirect::to('/dashboard')->send();
                        break;
                }
            }

            return new ResponseDTO($jsonObj->status ?? false,$jsonObj->code ?? null,$jsonObj->message ?? null , $jsonObj->data ?? null);
        }
    }

    public static function requestWithoutAccessToken($method, $url,$params = [],$headers = [],$multipart = false){
        return ApiCallback::request($method, $url, $params, $headers, $multipart, false);
    }

    public static function removeAccessToken($errMsg = null){
        // remove access token from session
        // flush, save then regenerate to clean old session data
        Session::flush();
        Session::save();
        Session::regenerate(true);

        if(isset($errMsg)){
            Session::flash('error', $errMsg);
        }

        Redirect::to('/')->send();
    }
}
