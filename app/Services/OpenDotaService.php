<?php

namespace App\Services;

class OpenDotaService{
    public function getOpen(){
        return ApiCallback::requestWithoutAccessToken("GET", env('API_BASE_URL')."/heroes");
    }
}
