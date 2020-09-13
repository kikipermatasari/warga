<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kepala_keluarga;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;
use GuzzleHttp\Exception\RequestException;


class KeluargaController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }

 public function keluarga(){
    $warga = DB::table('warga')->orderBy('id','DESC')->get();
    return view('admin.keluarga', ['warga' => $warga]);

}

}
