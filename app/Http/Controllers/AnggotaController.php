<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    
   	 public function anggota($id){
        $kepala_keluarga = DB::table('kepala_keluarga')->find($id);
        $anggota = DB::table('anggota')->where('id_nomorkk',$id)->get();
        return view('admin.anggota', ['anggota' => $anggota,'kepala_keluarga' => $kepala_keluarga]);

    }

    public function tambah($id)
    {
        $kepala_keluarga = DB::table('kepala_keluarga')->find($id);
        return view('admin.addanggota', ['kepala_keluarga' => $kepala_keluarga]);
    }
}
