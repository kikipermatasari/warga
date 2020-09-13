<?php

namespace App\Imports;

use App\Anggota;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AnggotaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Anggota([
            'nama_lengkap'      => $row['Nama Lengkap'],
            'nik'               => $row['NIK'], 
            'jenis_kelamin'     => $row['Jenis Kelamin'], 
            'tempat_lahir'      => $row['Tempat Lahir'], 
            'tgllahir'          => $row['Tanggal Lahir'], 
            'agama'             => $row['Agama'], 
            'pendidikan'        => $row['Pendidikam'], 
            'jenis_pekerjaan'   => $row['jenis Pekerjaan'], 
            'gol_darah'         => $row['Golongan Darah'], 
            'status_kawin'      => $row['Status Perkawinan'], 
            'tgl_kawin'         => $row['Tanggal Perkawinan'], 
            'status_hub'        => $row['Status Hubungan Dalam Keluarga'], 
            'kwn'               => $row['Kewarganegaraan'], 
            'no_paspor'         => $row['No.Paspor'], 
            'no_kitap'          => $row['No.Kitap'], 
            'ayah'              => $row['Ayah'], 
            'ibu'               => $row['Ibu'], 
        ]);
    }
}
