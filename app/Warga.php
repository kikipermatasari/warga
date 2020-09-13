<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table='warga';
    protected $fillable=['noreg','dasawisma','jabatan','umur','akseptor','jenis_akseptor','aktif_posyandu',
    					 'volume','kali','program_bina','tabungan','kelompok_belajar',
    					 'paud','koperasi','jenis_koperasi'];
}
