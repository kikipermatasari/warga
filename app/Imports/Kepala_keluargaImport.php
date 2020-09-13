<?php

namespace App\Imports;

use App\Kepala_keluarga;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class Kepala_keluargaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kepala_keluarga([
            'nomor_kk'      => $row['Nomor KK'],
            'nama_kk'      => $row['Nama Kepala Keluarga'],
            'alamat'      => $row['Jalan'],
            'rtrw'      => $row['RT/RW'],
            'kode_pos'      => $row['Kode Pos'],
            'kelurahan'      => $row['Desa/Kelurahan'],
            'kecamatan'      => $row['Kecamatan'],
            'kabupaten'      => $row['Ksbupaten/Kota'],
            'provinsi'      => $row['Provinsi'],

        ]);
    }
}
