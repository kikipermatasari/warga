<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kepala_keluarga;
use Illuminate\Support\Facades\Auth;
use PDF;

class KepalakeluargaController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function kepala()
        {
        $kel = "";
        if (Auth::User()->level == 'Admin Kelurahan Kampung Manggis') {
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Balai-Balai'){
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Pasar Baru') {
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Pasar Usang') {
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Silaing Atas') {
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Silaing Bawah') {
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Tanah Hitam') {
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Bukit Surungan') {
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->orderBy('id','DESC')->get();
        } else {  
            $kepala_keluarga = DB::table('kartu_keluarga')->orderBy('id','DESC')->get();
        } 

        return view ('admin/kepala_keluarga',['kepala_keluarga'=>$kepala_keluarga,'kel'=>$kel]);
        }

    public function kepala_kel($kel)
        {
        if ($kel == 'kampung manggis') {
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->orderBy('id','DESC')->get();
        } else if ($kel == 'balai-balai'){
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->orderBy('id','DESC')->get();
        } else if ($kel == 'pasar baru') {
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->orderBy('id','DESC')->get();
        } else if ($kel == 'pasar usang') {
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->orderBy('id','DESC')->get();
        } else if ($kel == 'silaing atas') {
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->orderBy('id','DESC')->get();
        } else if ($kel == 'silaing bawah') {
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->orderBy('id','DESC')->get();
        } else if ($kel == 'tanah hitam'){
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->orderBy('id','DESC')->get();
        } else if ($kel == 'bukit surungan'){
            $kepala_keluarga = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->orderBy('id','DESC')->get();
        } 
        return view ('admin/kepala_keluarga',['kepala_keluarga'=>$kepala_keluarga,'kel'=>$kel]);
        }

    public function anggota($no_kk){
       if (Auth::User()->level == 'Admin Kelurahan Kampung Manggis') {
            $anggota = DB::table('anggota')->where('id_nomorkk',$no_kk)->where('kelurahan','Kampung Manggis')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Balai-Balai') {
            $anggota = DB::table('anggota')->where('id_nomorkk',$no_kk)->where('kelurahan','Balai-Balai')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Pasar Baru') {
            $anggota = DB::table('anggota')->where('id_nomorkk',$no_kk)->where('kelurahan','Pasar Baru')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Pasar Usang') {
            $anggota = DB::table('anggota')->where('id_nomorkk',$no_kk)->where('kelurahan','Pasar Usang')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Silaing Atas') {
            $anggota = DB::table('anggota')->where('id_nomorkk',$no_kk)->where('kelurahan','Silaing Atas')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Silaing Bawah') {
            $anggota = DB::table('anggota')->where('id_nomorkk',$no_kk)->where('kelurahan','Silaing Bawah')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Tanah Hitam') {
            $anggota = DB::table('anggota')->where('id_nomorkk',$no_kk)->where('kelurahan','Tanah Hitam')->orderBy('id','DESC')->get();
        } else if (Auth::User()->level == 'Admin Kelurahan Bukit Surungan') {
            $anggota = DB::table('anggota')->where('id_nomorkk',$no_kk)->where('kelurahan','Bukit Surungan')->orderBy('id','DESC')->get();
        } else { 
            $anggota = DB::table('anggota')->where('id_nomorkk',$no_kk)->orderBy('id','DESC')->get();
        }
        return view ('admin/anggota',['anggota'=>$anggota]);
        }


    public function tambah(){
        $kepala_keluarga = DB::table('kartu_keluarga')->orderBy('id','DESC')->get();
        return view ('admin/addkepala_keluarga',['kepala_keluarga'=>$kepala_keluarga]);
    }

   public function tambah_anggota($id){
      $kepala_keluarga = DB::table('kartu_keluarga')->find($id);
      return view ('admin/addanggota',['kepala_keluarga'=>$kepala_keluarga]);
   }

   public function createkepala(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        if(Auth::User()->level == 'Admin Camat' || Auth::User()->level == 'SuperAdmin'){
            $dokumen = $request->file('foto_profile');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/warga", $name);
            DB::table('kartu_keluarga')->insert([
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kode_pos' => $request->kode_pos,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'jns_kelamin' => $request->jns_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,                
                'gaji' => $request->gaji,                
                'foto_profile'=>$name,                 
                'kwn' =>$request->kwn,
                'created_at' => date('Y-m-d H:i:s')
              ]);
        } else if (Auth::User()->level == 'Admin Kelurahan Kampung Manggis') {
             $dokumen = $request->file('foto_profile');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/warga", $name);
            DB::table('kartu_keluarga')->insert([
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kode_pos' => $request->kode_pos,
                'kelurahan' => 'Kampung Manggis',
                'kecamatan' => "Padang Panjang Barat",
                'jns_kelamin' => $request->jns_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,                
                'gaji' => $request->gaji,                
                'foto_profile'=>$name,                 
                'kwn' =>$request->kwn,
                'created_at' => date('Y-m-d H:i:s')
              ]);
        }
        else if (Auth::User()->level == 'Admin Kelurahan Tanah Hitam') {
             $dokumen = $request->file('foto_profile');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/warga", $name);
            DB::table('kartu_keluarga')->insert([
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kode_pos' => $request->kode_pos,
                'kelurahan' => 'Tanah Hitam',
                'kecamatan' => "Padang Panjang Barat",
                'jns_kelamin' => $request->jns_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,                
                'gaji' => $request->gaji,                
                'foto_profile'=>$name,                 
                'kwn' =>$request->kwn,
                'created_at' => date('Y-m-d H:i:s')
              ]);
        }
        else if (Auth::User()->level == 'Admin Kelurahan Pasar Baru') {
            $dokumen = $request->file('foto_profile');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/warga", $name);
            DB::table('kartu_keluarga')->insert([
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kode_pos' => $request->kode_pos,
                'kelurahan' => 'Pasar Baru',
                'kecamatan' => "Padang Panjang Barat",
                'jns_kelamin' => $request->jns_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,                
                'gaji' => $request->gaji,                
                'foto_profile'=>$name,                 
                'kwn' =>$request->kwn,
                'created_at' => date('Y-m-d H:i:s')
              ]);
        }
        else if (Auth::User()->level == 'Admin Kelurahan Pasar Usang') {
             $dokumen = $request->file('foto_profile');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/warga", $name);
            DB::table('kartu_keluarga')->insert([
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kode_pos' => $request->kode_pos,
                'kelurahan' => 'Pasar Usang',
                'kecamatan' => "Padang Panjang Barat",
                'jns_kelamin' => $request->jns_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,                
                'gaji' => $request->gaji,                
                'foto_profile'=>$name,                 
                'kwn' =>$request->kwn,
                'created_at' => date('Y-m-d H:i:s')
              ]);
        }
        else if (Auth::User()->level == 'Admin Kelurahan Silaing Atas') {
            $dokumen = $request->file('foto_profile');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/warga", $name);
            DB::table('kartu_keluarga')->insert([
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kode_pos' => $request->kode_pos,
                'kelurahan' => 'Silaing Atas',
                'kecamatan' => "Padang Panjang Barat",
                'jns_kelamin' => $request->jns_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,                
                'gaji' => $request->gaji,                
                'foto_profile'=>$name,                 
                'kwn' =>$request->kwn,
                'created_at' => date('Y-m-d H:i:s')
              ]);
        }
        else if (Auth::User()->level == 'Admin Kelurahan Silaing Bawah') {
            $dokumen = $request->file('foto_profile');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/warga", $name);
            DB::table('kartu_keluarga')->insert([
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kode_pos' => $request->kode_pos,
                'kelurahan' => 'Silaing Bawah',
                'kecamatan' => "Padang Panjang Barat",
                'jns_kelamin' => $request->jns_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,                
                'gaji' => $request->gaji,                
                'foto_profile'=>$name,                 
                'kwn' =>$request->kwn,
                'created_at' => date('Y-m-d H:i:s')
              ]);
        }
        else if (Auth::User()->level == 'Admin Kelurahan Balai-Balai') {
             $dokumen = $request->file('foto_profile');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/warga", $name);
            DB::table('kartu_keluarga')->insert([
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kode_pos' => $request->kode_pos,
                'kelurahan' => 'Balai-Balai',
                'kecamatan' => "Padang Panjang Barat",
                'jns_kelamin' => $request->jns_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,                
                'gaji' => $request->gaji,                
                'foto_profile'=>$name,                 
                'kwn' =>$request->kwn,
                'created_at' => date('Y-m-d H:i:s')
              ]);
        }
        else if (Auth::User()->level == 'Admin Kelurahan Bukit Surungan') {
            $dokumen = $request->file('foto_profile');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/warga", $name);
            DB::table('kartu_keluarga')->insert([
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kode_pos' => $request->kode_pos,
                'kelurahan' => 'Bukit Surungan',
                'kecamatan' => "Padang Panjang Barat",
                'jns_kelamin' => $request->jns_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,                
                'gaji' => $request->gaji,                
                'foto_profile'=>$name,                 
                'kwn' =>$request->kwn,
                'created_at' => date('Y-m-d H:i:s')
              ]);
        }
            return redirect('/kartu-keluarga');
   }

   public function createanggota(Request $request){
            date_default_timezone_set('Asia/Jakarta');
            $dokumen = $request->file('foto_profile');
            $name = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/warga", $name);
            DB::table('anggota')->insert([
                'id_nomorkk'=>$request->id_nomorkk,
                'nama_kk'=>$request->nama_kk,
                'nik' => $request->nik,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kodepos' => $request->kodepos,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => "Padang Panjang Barat",
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama_anggota' => $request->agama_anggota,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,
                'gaji' => $request->gaji,
                'foto_profile'=>$name,                 
                'kwn' =>$request->kwn
              ]);

            return redirect('/kartu-keluarga');
   }



    public function edit($id){

      $kepala_keluarga= DB::table('kartu_keluarga')->find($id);
     return view('admin/editkepala_keluarga',['kepala_keluarga'=>$kepala_keluarga]);
    }

    public function updatekepala(Request $request, $id) {
          date_default_timezone_set('Asia/Jakarta');
          $kepala_keluarga= DB::table('kartu_keluarga')->find($id);        
            if ($request->hasFile('foto_profile') ) {
            unlink(public_path() . '/public/warga/' . $kepala_keluarga->foto_profile);
            $dokumen = $request->file('foto_profile');
            $name    = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/warga", $name);
       $update = DB::table('kartu_keluarga')->where('id',$id)->update([
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kode_pos' => $request->kode_pos,
                'kelurahan' => $request->kelurahan,
                'jns_kelamin' => $request->jns_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,                
                'gaji' => $request->gaji,                
                'foto_profile' => $name,                
                'kwn' =>$request->kwn,
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => null
              ]);
    } else {
        $update =  DB::table('kartu_keluarga')->where('id',$id)->update([
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kode_pos' => $request->kode_pos,
                'kelurahan' => $request->kelurahan,
                'jns_kelamin' => $request->jns_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama' => $request->agama,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,
                'gaji' => $request->gaji,                                               
                'kwn' =>$request->kwn,
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => null
            ]);

         }
        return redirect()->back();
     }

    public function editanggota($id){
      $anggota= DB::table('anggota')->find($id);
      $kepala_keluarga = DB::table('kartu_keluarga')->where('no_kk',$anggota->id_nomorkk)->first();
     return view('admin/editanggota',['anggota'=>$anggota,'kepala_keluarga'=>$kepala_keluarga]);
    }

  public function updateanggota(Request $request, $id) {
         date_default_timezone_set('Asia/Jakarta');
         $anggota= DB::table('anggota')->find($id);        
            if ($request->hasFile('foto_profile') ) {
            unlink(public_path() . '/public/warga/' . $anggota->foto_profile);
            $dokumen = $request->file('foto_profile');
            $name    = uniqid()."_".$dokumen->getClientOriginalName();
            $dokumen->move(public_path() . "/public/warga", $name);
       $update = DB::table('anggota')->where('id',$id)->update([
                'id_nomorkk'=>$request->id_nomorkk,
                'nama_kk'=>$request->nama_kk,
                'nik' => $request->nik,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kodepos' => $request->kodepos,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama_anggota' => $request->agama_anggota,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,
                'gaji' => $request->gaji,
                'foto_profile' => $name,                
                'kwn' =>$request->kwn,
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => null
              ]);
            } else {
        $update = DB::table('anggota')->where('id',$id)->update([
                'id_nomorkk'=>$request->id_nomorkk,
                'nama_kk'=>$request->nama_kk,
                'nik' => $request->nik,
                'alamat' => $request->alamat,
                'rtrw' => $request->rtrw,
                'kodepos' => $request->kodepos,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'agama_anggota' => $request->agama_anggota,
                'pendidikan' => $request->pendidikan,
                'jenis_pekerjaan' => $request->jenis_pekerjaan,
                'gol_darah' => $request->gol_darah,
                'status_kawin' => $request->status_kawin,
                'tgl_kawin' => $request->tgl_kawin,
                'status_hub_keluarga' => $request->status_hub_keluarga,
                'detail_pekerjaan' => $request->detail_pekerjaan,
                'detail_hub_keluarga' => $request->detail_hub_keluarga,
                'domisili' => $request->domisili,
                'alamat_domisili' => $request->alamat_domisili,
                'kota' => "Padang Panjang",
                'provinsi' => "Sumatera Barat", 
                'nama' => $request->nama,
                'no_pasport' => $request->no_pasport,
                'no_kitap' => $request->no_kitap,
                'nama_ibu' => $request->nama_ibu,
                'nama_ayah' => $request->nama_ayah,
                'gaji' => $request->gaji,
                'kwn' =>$request->kwn,
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => null
              ]);
      
            }

        return redirect()->back();
     }

      public function rumah($id){
     $kepala_keluarga= DB::table('kartu_keluarga')->find($id);
     return view('admin/rumah',['kepala_keluarga'=>$kepala_keluarga]);
    }

    public function updaterumah(Request $request, $id) {
            $kepala_keluarga= DB::table('kartu_keluarga')->find($id);        
            if ($request->hasFile('foto_rumah') ) {
            if($kepala_keluarga->foto_rumah != ""){
                unlink(public_path() . '/public/warga/' . $kepala_keluarga->foto_rumah);
                $dokumen = $request->file('foto_rumah');
                $name    = uniqid()."_".$dokumen->getClientOriginalName();
                $dokumen->move(public_path() . "/public/warga", $name);
                $update = DB::table('kartu_keluarga')->where('id',$id)->update([
                'foto_rumah' => $name                
                ]);
            } else {
                $dokumen = $request->file('foto_rumah');
                $name    = uniqid()."_".$dokumen->getClientOriginalName();
                $dokumen->move(public_path() . "/public/warga", $name);
                $update = DB::table('kartu_keluarga')->where('id',$id)->update([
                'foto_rumah' => $name                
                ]);                
            }

   }
        return redirect()->back();
     }
     
  

     public function detailkepala($id){

      $kepala_keluarga= DB::table('kartu_keluarga')->find($id);
     return view('admin/detailkepala',['kepala_keluarga'=>$kepala_keluarga]);
    }

   public function detailanggota($id){

      $anggota= DB::table('anggota')->find($id);
     return view('admin/detailanggota',['anggota'=>$anggota]);
    }  

   public function delete($id)
    {
      DB::table('kartu_keluarga')->where('no_kk',$id)->delete();
      DB::table('anggota')->where('id_nomorkk',$id)->delete();
      return redirect()->back();
    }

    public function delete_anggota($id)
    {
      DB::table('anggota')->where('id',$id)->delete();
      return redirect()->back();
    }


     public function cetak_kepala ($id){
        $kepala_keluarga= DB::table('kartu_keluarga')->find($id);

        $pdf = PDF::loadview('admin/cetakkepala',['kepala_keluarga'=>$kepala_keluarga]);

        return $pdf->stream("studentidcard.pdf", array("Attachment"=>0));
    }

    public function cetak_anggota ($id){
        $anggota= DB::table('anggota')->find($id);
        $pdf = PDF::loadview('admin/cetakanggota',['anggota'=>$anggota]);
        return $pdf->stream();
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

          return view('admin/addkepala_keluarga',['hasil'=>$hasil]);
    }

    public function cek_anggota(Request $request){

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
        
        return view('admin/addanggota_keluarga',['hasil'=>$hasil]);
    }

}
