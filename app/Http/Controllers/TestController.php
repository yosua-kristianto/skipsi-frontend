<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\OpenDotaService;

class TestController extends Controller
{
    public function get(){
        $data = new OpenDotaService();

        echo json_encode($data->getOpen());
        die();
    }
}
