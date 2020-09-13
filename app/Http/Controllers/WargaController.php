<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class WargaController extends Controller
{

 public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function warga(){
        $warga = DB::table('warga')->orderBy('id','DESC')->get();
        return view('admin.warga', ['warga' => $warga]);
}

public function create(Request $request){
            DB::table('warga')->insert([
                'dasawisma' => $request->dasawisma,
                'nama_kk' => $request->nama_kk,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'umur' => $request->umur,
                'akseptor_kb' => $request->akseptor_kb,
                'jenis_akseptor' => $request->jenis_akseptor,
                'noreg' =>uniqid(),
                'jabatan' =>$request->jabatan,
                'aktif_posyandu' =>$request->aktif_posyandu,
                'program_bina' =>$request->program_bina,
                'tabungan' =>$request->tabungan,
                'kelompok_belajar' =>$request->kelompok_belajar,
                'jenis_belajar' =>$request->jenis_belajar,
                'paud' =>$request->paud,
                'koperasi' =>$request->koperasi,
                'jenis_koperasi' =>$request->jenis_koperasi,
                'volume' =>$request->volume,
                'kali' =>$request->kali,
                'penghayatan' => $request->penghayatan,
                'kerja_bakti' => $request->kerja_bakti,
                'rukun_kematian' => $request->rukun_kematian,
                'keagamaan' => $request->keagamaan,
                'jumpitan' => $request->jumpitan,
                'arisan' => $request->arisan,
                'dll' => $request->dll,
                'ket_penghayatan' => $request->ket_penghayatan,
                'ket_kerja_bakti' => $request->ket_kerja_bakti,
                'ket_rukun_kematian' => $request->ket_rukun_kematian,
                'ket_keagamaan' => $request->ket_keagamaan,
                'ket_jumpitan' => $request->ket_jumpitan,
                'ket_arisan' => $request->ket_arisan,
                'ket_dll' => $request->ket_dll 
              ]);
            return redirect('/data-warga');

   }

public function tambah(){
 return view ('/admin.cekwarga');
}

 public function cek(Request $request){

        $client = new \GuzzleHttp\Client();

        $url   = "http://172.16.160.43:8080/dukcapil/get_json/13-74/kecamatan_1374/call_nik_kecamatan";
        $data   = [
                    "nik" =>$request->nik,
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

        $hasil = array_slice($obj["content"],0,3);
        
        return view('admin/addwarga',['hasil'=>$hasil]);
    }

    public function edit($id){

      $warga= DB::table('warga')->find($id);
     return view('admin/editwarga',['warga'=>$warga]);
    }

    public function update(Request $request, $id) {
          $id = $request->id;
        DB::table('warga')->where('id',$id)->update([
                'dasawisma' => $request->dasawisma,
                'nama_kk' => $request->nama_kk,
                'umur' => $request->umur,
                'akseptor_kb' => $request->akseptor_kb,
                'jenis_akseptor' => $request->jenis_akseptor,
                'noreg' =>uniqid(),
                'jabatan' =>$request->jabatan,
                'aktif_posyandu' =>$request->aktif_posyandu,
                'program_bina' =>$request->program_bina,
                'tabungan' =>$request->tabungan,
                'kelompok_belajar' =>$request->kelompok_belajar,
                'jenis_belajar' =>$request->jenis_belajar,
                'paud' =>$request->paud,
                'koperasi' =>$request->koperasi,
                'jenis_koperasi' =>$request->jenis_koperasi,
                'volume' =>$request->volume,
                'kali' =>$request->kali,
                'penghayatan' => $request->penghayatan,
                'kerja_bakti' => $request->kerja_bakti,
                'rukun_kematian' => $request->rukun_kematian,
                'keagamaan' => $request->keagamaan,
                'jumpitan' => $request->jumpitan,
                'arisan' => $request->arisan,
                'dll' => $request->dll,
                'ket_penghayatan' => $request->ket_penghayatan,
                'ket_kerja_bakti' => $request->ket_kerja_bakti,
                'ket_rukun_kematian' => $request->ket_rukun_kematian,
                'ket_keagamaan' => $request->ket_keagamaan,
                'ket_jumpitan' => $request->ket_jumpitan,
                'ket_arisan' => $request->ket_arisan,
                'ket_dll' => $request->ket_dll 
              ]);
      
        return redirect('data-warga');
     }

     public function detail($id){
      $warga=DB::table('warga')->find($id);
      
      $client = new \GuzzleHttp\Client();

        $url   = "http://172.16.160.43:8080/dukcapil/get_json/13-74/kecamatan_1374/call_nik_kecamatan";
        $data   = [
                    "nik" =>$warga->nik,
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

        $hasil = array_slice($obj["content"],0,3);

    return view('admin/detailwarga',['warga'=>$warga,'hasil'=>$hasil]);
    }

    public function delete($id){
    
      DB::table('warga')->where('id',$id)->delete();
      return redirect()->back();
    }
    

}
