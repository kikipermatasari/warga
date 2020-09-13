<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }

public function kegiatan(){

        $kegiatan = DB::table('kegiatan')->orderBy('id','DESC')->get();
        return view('admin.kegiatan', ['kegiatan' => $kegiatan]);
}

public function create(Request $request){
            DB::table('kegiatan')->insert([
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
                'ket_dll' => $request->ket_dll,
                'aktifitas' =>$request->aktifitas
              ]);
            return redirect('/data-warga');

   }

public function tambah(){

 return view ('/admin.addkegiatan');

}


}
