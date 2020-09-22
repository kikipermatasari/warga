<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::User()->level == "Admin Camat"){

            $penduduk = DB::table('kartu_keluarga')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->get();
            $anggota = DB::table('anggota')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->get();

            $a=0;
            $b=0;
            $c=0;
            $d=0;
            $e=0;
            $f=0;
            $g=0;
            $h=0;
            $i=0;
            $j=0;
            $k=0;
            $l=0;
            $m=0;
            $n=0;
            $o=0;
            $p=0;

            foreach($penduduk as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            foreach($anggota as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            $hasil = "[".$a.",".$b.",".$c.",".$d.",".$e.",".$f.",".$g.",".$h.",".$i.",".$j.",".$k.",".$l.",".$m.",".$n.",".$o.",".$p."]";

            $jml_penduduk = DB::table('kartu_keluarga')->count();
            $jml_penduduk1 = DB::table('anggota')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->count();

            //Data Penghasilan

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','0-1 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','0-1 Juta')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','1 Juta- 2 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','1 Juta- 2 Juta')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','2 Juta - 3 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','2 Juta - 3 Juta')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','3 Juta - 4 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','3 Juta - 4 Juta')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','4 Juta - 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','4 Juta - 5 Juta')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','> 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','> 5 Juta')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            //Data Kelurahan
              
            $jml_manggis_kk = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->count();
            $jml_manggis_anggota = DB::table('anggota')->where('kelurahan','Kampung Manggis')->count();
            $total_manggis = $jml_manggis_kk + $jml_manggis_anggota;

            $jml_balai_kk = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->count();
            $jml_balai_anggota = DB::table('anggota')->where('kelurahan','Balai-Balai')->count();
            $total_balai = $jml_balai_kk + $jml_balai_anggota;

            $jml_pabar_kk = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->count();
            $jml_pabar_anggota = DB::table('anggota')->where('kelurahan','Pasar Baru')->count();
            $total_pabar = $jml_pabar_kk + $jml_pabar_anggota;

            $jml_paus_kk = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->count();
            $jml_paus_anggota = DB::table('anggota')->where('kelurahan','Pasar Usang')->count();
            $total_paus = $jml_paus_kk + $jml_paus_anggota;

            $jml_silba_kk = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->count();
            $jml_silba_anggota = DB::table('anggota')->where('kelurahan','Silaing Bawah')->count();
            $total_silba = $jml_silba_kk + $jml_silba_anggota;

            $jml_silat_kk = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->count();
            $jml_silat_anggota = DB::table('anggota')->where('kelurahan','Silaing Atas')->count();
            $total_silat = $jml_silat_kk + $jml_silat_anggota;

            $jml_tanah_kk = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->count();
            $jml_tanah_anggota = DB::table('anggota')->where('kelurahan','Tanah Hitam')->count();
            $total_tanah = $jml_tanah_kk + $jml_tanah_anggota;

            $jml_bukit_kk = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->count();
            $jml_bukit_anggota = DB::table('anggota')->where('kelurahan','Bukit Surungan')->count();
            $total_bukit = $jml_bukit_kk + $jml_bukit_anggota;
            
            //Domisili

            $jml_domisili = DB::table('kartu_keluarga')->where('domisili','Ya')->count();
            $jml_domisili1 = DB::table('anggota')->where('domisili','Ya')->count();

            $domisili_ya = $jml_domisili + $jml_domisili1;

            $jml_domisili = DB::table('kartu_keluarga')->where('domisili','Tidak')->count();
            $jml_domisili1 = DB::table('anggota')->where('domisili','Tidak')->count();

            $domisili_tidak = $jml_domisili + $jml_domisili1;

            $domisili = "[".$domisili_ya.",".$domisili_tidak."]";

            //Log

            $now = date('Y-m');

            $log_penduduk_created = DB::table('kartu_keluarga')->where('created_at', 'like', $now.'%')->get();
            $log_anggota_created = DB::table('anggota')->where('created_at', 'like', $now.'%')->get();

            $log_penduduk_updated = DB::table('kartu_keluarga')->where('updated_at', 'like', $now.'%')->get();
            $log_anggota_updated = DB::table('anggota')->where('updated_at', 'like', $now.'%')->get();

            return view('/admin/home',['log_penduduk_created'=>$log_penduduk_created,'log_anggota_created'=>$log_anggota_created,'log_penduduk_updated'=>$log_penduduk_updated,'log_anggota_updated'=>$log_anggota_updated,'domisili'=>$domisili,'hasil'=>$hasil,'jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'total_manggis'=>$total_manggis,'total_bukit'=>$total_bukit,'total_tanah'=>$total_tanah,'total_silat'=>$total_silat,'total_silba'=>$total_silba,'total_paus'=>$total_paus,'total_pabar'=>$total_pabar,'total_balai'=>$total_balai,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
        
        } else if(Auth::User()->level == "SuperAdmin"){
        
            $penduduk = DB::table('kartu_keluarga')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->get();
            $anggota = DB::table('anggota')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->get();

            $a=0;
            $b=0;
            $c=0;
            $d=0;
            $e=0;
            $f=0;
            $g=0;
            $h=0;
            $i=0;
            $j=0;
            $k=0;
            $l=0;
            $m=0;
            $n=0;
            $o=0;
            $p=0;

            foreach($penduduk as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            foreach($anggota as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            $hasil = "[".$a.",".$b.",".$c.",".$d.",".$e.",".$f.",".$g.",".$h.",".$i.",".$j.",".$k.",".$l.",".$m.",".$n.",".$o.",".$p."]";

            $jml_penduduk = DB::table('kartu_keluarga')->count();
            $jml_penduduk1 = DB::table('anggota')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->count();
              
            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','0-1 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','0-1 Juta')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','1 Juta- 2 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','1 Juta- 2 Juta')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','2 Juta - 3 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','2 Juta - 3 Juta')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','3 Juta - 4 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','3 Juta - 4 Juta')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','4 Juta - 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','4 Juta - 5 Juta')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','> 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','> 5 Juta')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            //Data Kelurahan

            $jml_manggis_kk = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->count();
            $jml_manggis_anggota = DB::table('anggota')->where('kelurahan','Kampung Manggis')->count();
            $total_manggis = $jml_manggis_kk + $jml_manggis_anggota;

            $jml_balai_kk = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->count();
            $jml_balai_anggota = DB::table('anggota')->where('kelurahan','Balai-Balai')->count();
            $total_balai = $jml_balai_kk + $jml_balai_anggota;

            $jml_pabar_kk = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->count();
            $jml_pabar_anggota = DB::table('anggota')->where('kelurahan','Pasar Baru')->count();
            $total_pabar = $jml_pabar_kk + $jml_pabar_anggota;

            $jml_paus_kk = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->count();
            $jml_paus_anggota = DB::table('anggota')->where('kelurahan','Pasar Usang')->count();
            $total_paus = $jml_paus_kk + $jml_paus_anggota;

            $jml_silba_kk = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->count();
            $jml_silba_anggota = DB::table('anggota')->where('kelurahan','Silaing Bawah')->count();
            $total_silba = $jml_silba_kk + $jml_silba_anggota;

            $jml_silat_kk = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->count();
            $jml_silat_anggota = DB::table('anggota')->where('kelurahan','Silaing Atas')->count();
            $total_silat = $jml_silat_kk + $jml_silat_anggota;

            $jml_tanah_kk = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->count();
            $jml_tanah_anggota = DB::table('anggota')->where('kelurahan','Tanah Hitam')->count();
            $total_tanah = $jml_tanah_kk + $jml_tanah_anggota;

            $jml_bukit_kk = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->count();
            $jml_bukit_anggota = DB::table('anggota')->where('kelurahan','Bukit Surungan')->count();
            $total_bukit = $jml_bukit_kk + $jml_bukit_anggota;
            
            //Domisili

            $jml_domisili = DB::table('kartu_keluarga')->where('domisili','Ya')->count();
            $jml_domisili1 = DB::table('anggota')->where('domisili','Ya')->count();

            $domisili_ya = $jml_domisili + $jml_domisili1;

            $jml_domisili = DB::table('kartu_keluarga')->where('domisili','Tidak')->count();
            $jml_domisili1 = DB::table('anggota')->where('domisili','Tidak')->count();

            $domisili_tidak = $jml_domisili + $jml_domisili1;

            $domisili = "[".$domisili_ya.",".$domisili_tidak."]";

            //Log

            $now = date('m-Y');

            $log_penduduk_created = DB::table('kartu_keluarga')->where('created_at', 'like', '%$now%')->get();
            $log_anggota_created = DB::table('anggota')->where('created_at', 'like', '%$now%')->get();

            $log_penduduk_updated = DB::table('kartu_keluarga')->where('updated_at', 'like', '%$now%')->get();
            $log_anggota_updated = DB::table('anggota')->where('updated_at', 'like', '%$now%')->get();

            return view('/admin/home',['log_penduduk_created'=>$log_penduduk_created,'log_anggota_created'=>$log_anggota_created,'log_penduduk_updated'=>$log_penduduk_updated,'log_anggota_updated'=>$log_anggota_updated,'domisili'=>$domisili,'hasil'=>$hasil,'jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'total_manggis'=>$total_manggis,'total_bukit'=>$total_bukit,'total_tanah'=>$total_tanah,'total_silat'=>$total_silat,'total_silba'=>$total_silba,'total_paus'=>$total_paus,'total_pabar'=>$total_pabar,'total_balai'=>$total_balai,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
        
        } else if(Auth::User()->level == "Admin Kelurahan Balai-Balai"){
        
            $penduduk = DB::table('kartu_keluarga')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Balai-Balai')->get();
            $anggota = DB::table('anggota')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Balai-Balai')->get();

            $a=0;
            $b=0;
            $c=0;
            $d=0;
            $e=0;
            $f=0;
            $g=0;
            $h=0;
            $i=0;
            $j=0;
            $k=0;
            $l=0;
            $m=0;
            $n=0;
            $o=0;
            $p=0;

            foreach($penduduk as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            foreach($anggota as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            $hasil = "[".$a.",".$b.",".$c.",".$d.",".$e.",".$f.",".$g.",".$h.",".$i.",".$j.",".$k.",".$l.",".$m.",".$n.",".$o.",".$p."]";

            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Balai-Balai')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Balai-Balai')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Balai-Balai')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Balai-Balai')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('gaji','0-1 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('gaji','0-1 Juta')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('gaji','1 Juta- 2 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('gaji','1 Juta- 2 Juta')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('gaji','2 Juta - 3 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('gaji','2 Juta - 3 Juta')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('gaji','3 Juta - 4 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('gaji','3 Juta - 4 Juta')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('gaji','4 Juta - 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('gaji','4 Juta - 5 Juta')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('gaji','> 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('gaji','> 5 Juta')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            //Domisili

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('domisili','Ya')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('domisili','Ya')->count();

            $domisili_ya = $jml_domisili + $jml_domisili1;

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('domisili','Tidak')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('domisili','Tidak')->count();

            $domisili_tidak = $jml_domisili + $jml_domisili1;

            $domisili = "[".$domisili_ya.",".$domisili_tidak."]";

            return view('/admin/home',['domisili'=>$domisili,'hasil'=>$hasil,'jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
        
        } else if(Auth::User()->level == "Admin Kelurahan Bukit Surungan"){
        
            $penduduk = DB::table('kartu_keluarga')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Bukit Surungan')->get();
            $anggota = DB::table('anggota')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Bukit Surungan')->get();

            $a=0;
            $b=0;
            $c=0;
            $d=0;
            $e=0;
            $f=0;
            $g=0;
            $h=0;
            $i=0;
            $j=0;
            $k=0;
            $l=0;
            $m=0;
            $n=0;
            $o=0;
            $p=0;

            foreach($penduduk as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            foreach($anggota as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            $hasil = "[".$a.",".$b.",".$c.",".$d.",".$e.",".$f.",".$g.",".$h.",".$i.",".$j.",".$k.",".$l.",".$m.",".$n.",".$o.",".$p."]";

            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Bukit Surungan')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Bukit Surungan')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Bukit Surungan')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Bukit Surungan')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('gaji','0-1 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('gaji','0-1 Juta')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('gaji','1 Juta- 2 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('gaji','1 Juta- 2 Juta')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('gaji','2 Juta - 3 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('gaji','2 Juta - 3 Juta')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('gaji','3 Juta - 4 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('gaji','3 Juta - 4 Juta')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('gaji','4 Juta - 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('gaji','4 Juta - 5 Juta')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('gaji','> 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('gaji','> 5 Juta')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            //Domisili

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('domisili','Ya')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('domisili','Ya')->count();

            $domisili_ya = $jml_domisili + $jml_domisili1;

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('domisili','Tidak')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('domisili','Tidak')->count();

            $domisili_tidak = $jml_domisili + $jml_domisili1;

            $domisili = "[".$domisili_ya.",".$domisili_tidak."]";

            return view('/admin/home',['domisili'=>$domisili,'hasil'=>$hasil,'jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
        
        } else if(Auth::User()->level == "Admin Kelurahan Kampung Manggis"){
        
            $penduduk = DB::table('kartu_keluarga')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Kampung Manggis')->get();
            $anggota = DB::table('anggota')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Kampung Manggis')->get();

            $a=0;
            $b=0;
            $c=0;
            $d=0;
            $e=0;
            $f=0;
            $g=0;
            $h=0;
            $i=0;
            $j=0;
            $k=0;
            $l=0;
            $m=0;
            $n=0;
            $o=0;
            $p=0;

            foreach($penduduk as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            foreach($anggota as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            $hasil = "[".$a.",".$b.",".$c.",".$d.",".$e.",".$f.",".$g.",".$h.",".$i.",".$j.",".$k.",".$l.",".$m.",".$n.",".$o.",".$p."]";

            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Kampung Manggis')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Kampung Manggis')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Kampung Manggis')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Kampung Manggis')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('gaji','0-1 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('gaji','0-1 Juta')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('gaji','1 Juta- 2 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('gaji','1 Juta- 2 Juta')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('gaji','2 Juta - 3 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('gaji','2 Juta - 3 Juta')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('gaji','3 Juta - 4 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('gaji','3 Juta - 4 Juta')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('gaji','4 Juta - 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('gaji','4 Juta - 5 Juta')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('gaji','> 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('gaji','> 5 Juta')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            //Domisili

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('domisili','Ya')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('domisili','Ya')->count();

            $domisili_ya = $jml_domisili + $jml_domisili1;

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('domisili','Tidak')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('domisili','Tidak')->count();

            $domisili_tidak = $jml_domisili + $jml_domisili1;

            $domisili = "[".$domisili_ya.",".$domisili_tidak."]";

            return view('/admin/home',['domisili'=>$domisili,'hasil'=>$hasil,'jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
        
        } else if(Auth::User()->level == "Admin Kelurahan Pasar Baru"){
        
            $penduduk = DB::table('kartu_keluarga')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Pasar Baru')->get();
            $anggota = DB::table('anggota')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Pasar Baru')->get();

            $a=0;
            $b=0;
            $c=0;
            $d=0;
            $e=0;
            $f=0;
            $g=0;
            $h=0;
            $i=0;
            $j=0;
            $k=0;
            $l=0;
            $m=0;
            $n=0;
            $o=0;
            $p=0;

            foreach($penduduk as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            foreach($anggota as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            $hasil = "[".$a.",".$b.",".$c.",".$d.",".$e.",".$f.",".$g.",".$h.",".$i.",".$j.",".$k.",".$l.",".$m.",".$n.",".$o.",".$p."]";

            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Pasar Baru')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Pasar Baru')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Pasar Baru')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Pasar Baru')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('gaji','0-1 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('gaji','0-1 Juta')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('gaji','1 Juta- 2 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('gaji','1 Juta- 2 Juta')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('gaji','2 Juta - 3 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('gaji','2 Juta - 3 Juta')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('gaji','3 Juta - 4 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('gaji','3 Juta - 4 Juta')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('gaji','4 Juta - 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('gaji','4 Juta - 5 Juta')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('gaji','> 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('gaji','> 5 Juta')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            //Domisili

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('domisili','Ya')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('domisili','Ya')->count();

            $domisili_ya = $jml_domisili + $jml_domisili1;

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('domisili','Tidak')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('domisili','Tidak')->count();

            $domisili_tidak = $jml_domisili + $jml_domisili1;

            $domisili = "[".$domisili_ya.",".$domisili_tidak."]";

            return view('/admin/home',['domisili'=>$domisili,'hasil'=>$hasil,'jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);

        } else if(Auth::User()->level == "Admin Kelurahan Pasar Usang"){
        
            $penduduk = DB::table('kartu_keluarga')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Pasar Usang')->get();
            $anggota = DB::table('anggota')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Pasar Usang')->get();

            $a=0;
            $b=0;
            $c=0;
            $d=0;
            $e=0;
            $f=0;
            $g=0;
            $h=0;
            $i=0;
            $j=0;
            $k=0;
            $l=0;
            $m=0;
            $n=0;
            $o=0;
            $p=0;

            foreach($penduduk as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            foreach($anggota as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            $hasil = "[".$a.",".$b.",".$c.",".$d.",".$e.",".$f.",".$g.",".$h.",".$i.",".$j.",".$k.",".$l.",".$m.",".$n.",".$o.",".$p."]";

            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Pasar Usang')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Pasar Usang')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Pasar Usang')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Pasar Usang')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('gaji','0-1 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('gaji','0-1 Juta')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('gaji','1 Juta- 2 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('gaji','1 Juta- 2 Juta')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('gaji','2 Juta - 3 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('gaji','2 Juta - 3 Juta')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('gaji','3 Juta - 4 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('gaji','3 Juta - 4 Juta')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('gaji','4 Juta - 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('gaji','4 Juta - 5 Juta')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('gaji','> 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('gaji','> 5 Juta')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            //Domisili

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('domisili','Ya')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('domisili','Ya')->count();

            $domisili_ya = $jml_domisili + $jml_domisili1;

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('domisili','Tidak')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('domisili','Tidak')->count();

            $domisili_tidak = $jml_domisili + $jml_domisili1;

            $domisili = "[".$domisili_ya.",".$domisili_tidak."]";

            return view('/admin/home',['domisili'=>$domisili,'hasil'=>$hasil,'jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);

        } else if(Auth::User()->level == "Admin Kelurahan Silaing Atas"){
        
            $penduduk = DB::table('kartu_keluarga')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Silaing Atas')->get();
            $anggota = DB::table('anggota')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Silaing Atas')->get();

            $a=0;
            $b=0;
            $c=0;
            $d=0;
            $e=0;
            $f=0;
            $g=0;
            $h=0;
            $i=0;
            $j=0;
            $k=0;
            $l=0;
            $m=0;
            $n=0;
            $o=0;
            $p=0;

            foreach($penduduk as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            foreach($anggota as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            $hasil = "[".$a.",".$b.",".$c.",".$d.",".$e.",".$f.",".$g.",".$h.",".$i.",".$j.",".$k.",".$l.",".$m.",".$n.",".$o.",".$p."]";

            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Silaing Atas')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Silaing Atas')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Silaing Atas')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Silaing Atas')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('gaji','0-1 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('gaji','0-1 Juta')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('gaji','1 Juta- 2 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('gaji','1 Juta- 2 Juta')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('gaji','2 Juta - 3 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('gaji','2 Juta - 3 Juta')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('gaji','3 Juta - 4 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('gaji','3 Juta - 4 Juta')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('gaji','4 Juta - 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('gaji','4 Juta - 5 Juta')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('gaji','> 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('gaji','> 5 Juta')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            //Domisili

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('domisili','Ya')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('domisili','Ya')->count();

            $domisili_ya = $jml_domisili + $jml_domisili1;

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('domisili','Tidak')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('domisili','Tidak')->count();

            $domisili_tidak = $jml_domisili + $jml_domisili1;

            $domisili = "[".$domisili_ya.",".$domisili_tidak."]";

            return view('/admin/home',['domisili'=>$domisili,'hasil'=>$hasil,'jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
            
        } else if(Auth::User()->level == "Admin Kelurahan Tanah Hitam"){
        
            $penduduk = DB::table('kartu_keluarga')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Tanah Hitam')->get();
            $anggota = DB::table('anggota')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Tanah Hitam')->get();

            $a=0;
            $b=0;
            $c=0;
            $d=0;
            $e=0;
            $f=0;
            $g=0;
            $h=0;
            $i=0;
            $j=0;
            $k=0;
            $l=0;
            $m=0;
            $n=0;
            $o=0;
            $p=0;

            foreach($penduduk as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            foreach($anggota as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            $hasil = "[".$a.",".$b.",".$c.",".$d.",".$e.",".$f.",".$g.",".$h.",".$i.",".$j.",".$k.",".$l.",".$m.",".$n.",".$o.",".$p."]";

            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Tanah Hitam')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Tanah Hitam')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Tanah Hitam')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Tanah Hitam')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('gaji','0-1 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('gaji','0-1 Juta')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('gaji','1 Juta- 2 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('gaji','1 Juta- 2 Juta')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('gaji','2 Juta - 3 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('gaji','2 Juta - 3 Juta')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('gaji','3 Juta - 4 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('gaji','3 Juta - 4 Juta')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('gaji','4 Juta - 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('gaji','4 Juta - 5 Juta')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('gaji','> 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('gaji','> 5 Juta')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            //Domisili

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('domisili','Ya')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('domisili','Ya')->count();

            $domisili_ya = $jml_domisili + $jml_domisili1;

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('domisili','Tidak')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('domisili','Tidak')->count();

            $domisili_tidak = $jml_domisili + $jml_domisili1;

            $domisili = "[".$domisili_ya.",".$domisili_tidak."]";

            return view('/admin/home',['domisili'=>$domisili,'hasil'=>$hasil,'jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
            
        } else if(Auth::User()->level == "Admin Kelurahan Silaing Bawah"){
        
            $penduduk = DB::table('kartu_keluarga')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Silaing Bawah')->get();
            $anggota = DB::table('anggota')->selectRaw('TIMESTAMPDIFF(YEAR, DATE(tgl_lahir), current_date) AS age')->where('kelurahan','Silaing Bawah')->get();

            $a=0;
            $b=0;
            $c=0;
            $d=0;
            $e=0;
            $f=0;
            $g=0;
            $h=0;
            $i=0;
            $j=0;
            $k=0;
            $l=0;
            $m=0;
            $n=0;
            $o=0;
            $p=0;

            foreach($penduduk as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            foreach($anggota as $data) {
                if($data->age >= 0 && $data->age <= 4){
                    $a = $a + 1;
                } else if($data->age >= 5 && $data->age <= 9){
                    $b = $b + 1;
                } else if($data->age >= 10 && $data->age <= 14){
                    $c = $c + 1;
                } else if($data->age >= 15 && $data->age <= 19){
                    $d = $d + 1;
                } else if($data->age >= 20 && $data->age <= 24){
                    $e = $e + 1;
                } else if($data->age >= 25 && $data->age <= 29){
                    $f = $f + 1;
                } else if($data->age >= 30 && $data->age <= 34){
                    $g = $g + 1;
                } else if($data->age >= 35 && $data->age <= 39){
                    $h = $h + 1;
                } else if($data->age >= 40 && $data->age <= 44){
                    $i = $i + 1;
                } else if($data->age >= 45 && $data->age <= 49){
                    $j = $j + 1;
                } else if($data->age >= 50 && $data->age <= 54){
                    $k = $k + 1;
                } else if($data->age >= 55 && $data->age <= 59){
                    $l = $l + 1;
                } else if($data->age >= 60 && $data->age <= 64){
                    $m = $m + 1;
                } else if($data->age >= 65 && $data->age <= 69){
                    $n = $n + 1;
                } else if($data->age >= 70 && $data->age <= 74){
                    $o = $o + 1;
                } else if($data->age >= 75){
                    $p = $p + 1;
                }
            }

            $hasil = "[".$a.",".$b.",".$c.",".$d.",".$e.",".$f.",".$g.",".$h.",".$i.",".$j.",".$k.",".$l.",".$m.",".$n.",".$o.",".$p."]";

            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Silaing Bawah')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Silaing Bawah')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Silaing Bawah')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Silaing Bawah')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('gaji','0-1 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('gaji','0-1 Juta')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('gaji','1 Juta- 2 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('gaji','1 Juta- 2 Juta')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('gaji','2 Juta - 3 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('gaji','2 Juta - 3 Juta')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('gaji','3 Juta - 4 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('gaji','3 Juta - 4 Juta')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('gaji','4 Juta - 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('gaji','4 Juta - 5 Juta')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('gaji','> 5 Juta')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('gaji','> 5 Juta')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            //Domisili

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('domisili','Ya')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('domisili','Ya')->count();

            $domisili_ya = $jml_domisili + $jml_domisili1;

            $jml_domisili = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('domisili','Tidak')->count();
            $jml_domisili1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('domisili','Tidak')->count();

            $domisili_tidak = $jml_domisili + $jml_domisili1;

            $domisili = "[".$domisili_ya.",".$domisili_tidak."]";

            return view('/admin/home',['domisili'=>$domisili,'hasil'=>$hasil,'jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
            
        }
    }

    public function create(Request $request)
    {
    DB::table('users')->insert([
            'name' => $request['name'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'level'=>$request['level']
             ]);

        return redirect('/users');
    }   

    public function tampil(){
        $user = DB::table('users')->orderBy('id','DESC')->get();
        return view('auth/tambahuser',['user' => $user]);
    }

    public function tambah(){
        return view('auth/register');
    }

    public function edit ($id){
      $user = DB::table('users')->find($id);
      return view ('/auth/edituser',['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $update =DB::table('users')
        ->where('id', $id)  
        ->update([
          'name'=>$request->name,
          'username'=>$request->username,
          'level'=>$request->level]);
        return redirect ('/users')->with('success', 'Data User Berhasil Diupdate !');
    
    }

    public function detail ($id){
      $user = DB::table('users')->find($id);
      return view ('/auth/detailuser',['user'=>$user]);
    }

    public function delete($id){

        DB::table('users')->where('id',$id)->delete();
        return redirect('/users');
    }


    public function showChangePasswordForm(){
        return view('changepassword');
    }

     public function changepassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Ganti Password Berhasil !");


    }




}
