<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class HamilController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function rekap(){
    	$rekap_hamil = DB::table('rekap_hamil')->get();
  		return view ('admin/rekaphamil',['rekap_hamil'=>$rekap_hamil]);
    }

    public function create (Request $request){
            DB::table('rekap_hamil')->insert([
                'bulan' => $request->bulan,
                'nama_ibu' =>$request->nama_ibu,
                'nama_suami'=>$request->nama_suami,
                'status_hamil'=>$request->status_hamil,
                'nama_bayi'=>$request->nama_bayi,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'tgl_lahir'=>$request->tgl_lahir,
                'akta_kelahiran'=>$request->akta_kelahiran,
                'nama_alm'=>$request->nama_alm,
                'status_alm'=>$request->status_alm,
                'jnis_kl'=>$request->jnis_kl,
                'tgl_meninggal'=>$request->tgl_meninggal,
                'sebab_meninggal'=>$request->sebab_meninggal,
                'ket'=>$request->ket
                ]);
            return redirect('/video');
        }
    	

    public function  tambah (){
    	return view ('admin/addrekaphamil');
    }
}
