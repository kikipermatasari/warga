<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;
use GuzzleHttp\Exception\RequestException;

class APIController extends Controller
{

	public function api($nik){

        $client = new \GuzzleHttp\Client();

        $url   = "http://172.16.160.43:8080/dukcapil/get_json/13-74/kecamatan_1374/call_nik_kecamatan";
        $data   = [
                    "nik" =>$nik,
                    "user_id"      => "366201907152reza_chandra_saputra",
                    "password"   => "K3c4m4t@n",
                    "ip_user" => "10.13.74.200",
                  ];

        $requestAPI = $client->post( $url, [
                'headers' => ['Content-Type' => 'application/json'],
                'body' => json_encode($data)
            ]);
        $response = $requestAPI->getBody()->getContents();
        $obj = json_decode($response, TRUE);

          return response()->json($obj);
    }
   
}
