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
        
            $jml_penduduk = DB::table('kartu_keluarga')->count();
            $jml_penduduk1 = DB::table('anggota')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->count();

            //Data Penghasilan

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji',' < Rp500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji',' < Rp500.000')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','Rp 500.000 - Rp 1500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','Rp 500.000 - Rp 1500.000')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','> Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','> Rp 4500.000')->count();

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
            

            return view('/admin/home',['jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'total_manggis'=>$total_manggis,'total_bukit'=>$total_bukit,'total_tanah'=>$total_tanah,'total_silat'=>$total_silat,'total_silba'=>$total_silba,'total_paus'=>$total_paus,'total_pabar'=>$total_pabar,'total_balai'=>$total_balai,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
        
        } else if(Auth::User()->level == "SuperAdmin"){
        
            $jml_penduduk = DB::table('kartu_keluarga')->count();
            $jml_penduduk1 = DB::table('anggota')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->count();
              
            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji',' < Rp500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji',' < Rp500.000')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','Rp 500.000 - Rp 1500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','Rp 500.000 - Rp 1500.000')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('gaji','> Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('gaji','> Rp 4500.000')->count();

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
            

            return view('/admin/home',['jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'total_manggis'=>$total_manggis,'total_bukit'=>$total_bukit,'total_tanah'=>$total_tanah,'total_silat'=>$total_silat,'total_silba'=>$total_silba,'total_paus'=>$total_paus,'total_pabar'=>$total_pabar,'total_balai'=>$total_balai,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
        
        } else if(Auth::User()->level == "Admin Kelurahan Balai-Balai"){
        
            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Balai-Balai')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Balai-Balai')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Balai-Balai')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Balai-Balai')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('gaji',' < Rp500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('gaji',' < Rp500.000')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('gaji','Rp 500.000 - Rp 1500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('gaji','Rp 500.000 - Rp 1500.000')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Balai-Balai')->where('gaji','> Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Balai-Balai')->where('gaji','> Rp 4500.000')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            return view('/admin/home',['jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
        
        } else if(Auth::User()->level == "Admin Kelurahan Bukit Surungan"){
        
            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Bukit Surungan')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Bukit Surungan')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Bukit Surungan')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Bukit Surungan')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('gaji',' < Rp500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('gaji',' < Rp500.000')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('gaji','Rp 500.000 - Rp 1500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('gaji','Rp 500.000 - Rp 1500.000')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Bukit Surungan')->where('gaji','> Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Bukit Surungan')->where('gaji','> Rp 4500.000')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            return view('/admin/home',['jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
        
        } else if(Auth::User()->level == "Admin Kelurahan Kampung Manggis"){
        
            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Kampung Manggis')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Kampung Manggis')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Kampung Manggis')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Kampung Manggis')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('gaji',' < Rp500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('gaji',' < Rp500.000')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('gaji','Rp 500.000 - Rp 1500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('gaji','Rp 500.000 - Rp 1500.000')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Kampung Manggis')->where('gaji','> Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Kampung Manggis')->where('gaji','> Rp 4500.000')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            return view('/admin/home',['jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
        
        } else if(Auth::User()->level == "Admin Kelurahan Pasar Baru"){
        
            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Pasar Baru')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Pasar Baru')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Pasar Baru')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Pasar Baru')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('gaji',' < Rp500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('gaji',' < Rp500.000')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('gaji','Rp 500.000 - Rp 1500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('gaji','Rp 500.000 - Rp 1500.000')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Baru')->where('gaji','> Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Baru')->where('gaji','> Rp 4500.000')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            return view('/admin/home',['jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);

        } else if(Auth::User()->level == "Admin Kelurahan pasar Usang"){
        
            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Pasar Usang')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Pasar Usang')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Pasar Usang')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Pasar Usang')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('gaji',' < Rp500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('gaji',' < Rp500.000')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('gaji','Rp 500.000 - Rp 1500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('gaji','Rp 500.000 - Rp 1500.000')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Pasar Usang')->where('gaji','> Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Pasar Usang')->where('gaji','> Rp 4500.000')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            return view('/admin/home',['jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);

        } else if(Auth::User()->level == "Admin Kelurahan Silaing Atas"){
        
            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Silaing Atas')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Silaing Atas')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Silaing Atas')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Silaing Atas')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('gaji',' < Rp500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('gaji',' < Rp500.000')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('gaji','Rp 500.000 - Rp 1500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('gaji','Rp 500.000 - Rp 1500.000')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Atas')->where('gaji','> Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Atas')->where('gaji','> Rp 4500.000')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            return view('/admin/home',['jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
            
        } else if(Auth::User()->level == "Admin Kelurahan Tanah Hitam"){
        
            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Tanah Hitam')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Tanah Hitam')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Tanah Hitam')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Tanah Hitam')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('gaji',' < Rp500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('gaji',' < Rp500.000')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('gaji','Rp 500.000 - Rp 1500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('gaji','Rp 500.000 - Rp 1500.000')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Tanah Hitam')->where('gaji','> Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Tanah Hitam')->where('gaji','> Rp 4500.000')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            return view('/admin/home',['jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
            
        } else if(Auth::User()->level == "Admin Kelurahan Silaing Bawah"){
        
            $jml_penduduk = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->count();
            $jml_penduduk1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->count();

            $jml_laki_laki = DB::table('kartu_keluarga')->where('jns_kelamin','Laki-Laki')->where('kelurahan','Silaing Bawah')->count();
            $jml_laki_laki1 = DB::table('anggota')->where('jenis_kelamin','Laki-Laki')->where('kelurahan','Silaing Bawah')->count();

            $jml_perempuan = DB::table('kartu_keluarga')->where('jns_kelamin','perempuan')->where('kelurahan','Silaing Bawah')->count();
            $jml_perempuan1 = DB::table('anggota')->where('jenis_kelamin','perempuan')->where('kelurahan','Silaing Bawah')->count();

            //Data Penghasilan
            
            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('gaji',' < Rp500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('gaji',' < Rp500.000')->count();

            $penghasilan1 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('gaji','Rp 500.000 - Rp 1500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('gaji','Rp 500.000 - Rp 1500.000')->count();

            $penghasilan2 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('gaji','Rp 1500.000 - Rp 2500.000')->count();

            $penghasilan3 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('gaji','Rp 2500.000 - Rp 3500.000')->count();

            $penghasilan4 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('gaji','Rp 3500.000 - Rp 4500.000')->count();

            $penghasilan5 = $jml_penghasilan + $jml_penghasilan1;

            $jml_penghasilan = DB::table('kartu_keluarga')->where('kelurahan','Silaing Bawah')->where('gaji','> Rp 4500.000')->count();
            $jml_penghasilan1 = DB::table('anggota')->where('kelurahan','Silaing Bawah')->where('gaji','> Rp 4500.000')->count();

            $penghasilan6 = $jml_penghasilan + $jml_penghasilan1;

            return view('/admin/home',['jml_penduduk'=>$jml_penduduk,'jml_penduduk1'=>$jml_penduduk1,'jml_laki_laki'=>$jml_laki_laki,'jml_laki_laki1'=>$jml_laki_laki1,'jml_perempuan'=>$jml_perempuan,'jml_perempuan1'=>$jml_perempuan1,'penghasilan1'=>$penghasilan1,'penghasilan2'=>$penghasilan2,'penghasilan3'=>$penghasilan3,'penghasilan4'=>$penghasilan4,'penghasilan5'=>$penghasilan5,'penghasilan6'=>$penghasilan6]);
            
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
