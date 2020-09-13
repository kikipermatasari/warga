<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepala_keluarga extends Model
{
    protected $table='kepala_keluarga';
    protected $fillable=['nomor_kk','nama_kk','alamat','rtrw','kode_pos','kelurahan','kecamatan','kabupaten','provinsi'];
}
