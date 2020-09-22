<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Anggota Keluarga</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    /* Black border */
    .font1{
        margin-top:auto; 
        font-size: 14px;
      font-family: "Arial", Helvetica, sans-serif;
      text-align: justify;
    }

    .font2{
        font-size: 18px;
        font-family: "Arial", Helvetica, sans-serif;
      font-style: bold;
    }
    hr.new1 {
      border-top: 1px solid black;
    }

    /* Dashed black border */
    hr.new2 {
      border-top: 1px dashed black;
    }

    /* Dotted black border */
    hr.new3 {
      border-top: 1px dotted black;
    }

    /* Thick black border */
    hr.new4 {
      border: 1px solid black;
    }

    /* Large rounded black border */
    hr.new5 {
      border: 10px solid black;
      border-radius: 5px;
    }
  </style>
</head>
<body style="margin-left: 40px;margin-right: 30px;">
<?php
                                                  $tgl = $anggota->tgl_lahir;
                                                  $hari = date("D", strtotime($tgl));
                                                  switch($hari){
                                                    case 'Sun':
                                                      $hari_ini = "Minggu";
                                                    break;
                                                 
                                                    case 'Mon':     
                                                      $hari_ini = "Senin";
                                                    break;
                                                 
                                                    case 'Tue':
                                                      $hari_ini = "Selasa";
                                                    break;
                                                 
                                                    case 'Wed':
                                                      $hari_ini = "Rabu";
                                                    break;
                                                 
                                                    case 'Thu':
                                                      $hari_ini = "Kamis";
                                                    break;
                                                 
                                                    case 'Fri':
                                                      $hari_ini = "Jumat";
                                                    break;
                                                 
                                                    case 'Sat':
                                                      $hari_ini = "Sabtu";
                                                    break;
                                                    
                                                    default:
                                                      $hari_ini = "Tidak di ketahui";   
                                                    break;
                                                  }
                                                  $newdate = date("d-m-Y", strtotime($tgl));
                                                  $hasil = $hari_ini . ", " . $newdate;

                                            ?>
    <div class="container">
        <center>
            <span class="font2">Data Anggota Keluarga</span></p><hr class="new4"><br>
        </center>
        <div class="row">
                    <div class="col-md-9">
                         <table border="0" width="100%">
                                <tr>
                                    <td class="font1"width="40%"><b>Nomor Kartu Keluarga</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->id_nomorkk }}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Nama Lengkap</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->nama}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>NIK</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->nik}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Alamat</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->alamat}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>RT / RW</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->rtrw}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Kode Pos</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->kodepos}}</td>
                                </tr> 
                                <tr>
                                    <td class="font1"width="40%"><b>Desa / Kelurahan</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->kelurahan}}</td>
                                </tr>
                                 <tr>
                                    <td class="font1"width="40%"><b>Kecamatan</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->kecamatan}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Kabupaten / Kota</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->kota}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Provinsi</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->provinsi}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Jenis Kelamin</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->jenis_kelamin}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Tempat Lahir / Tanggal Lahir</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->tempat_lahir}} / {{$hasil}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Umur</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">
                                    <?php
                                      $tgl_lahir = $anggota->tgl_lahir;
                                      $diff  = date_diff( date_create($tgl_lahir), date_create() );
                                      echo $diff->format('%Y tahun %m bulan');
                                    ?></td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Agama</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->agama_anggota}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Pendidikan</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->pendidikan}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Jenis Pekerjaan</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->jenis_pekerjaan}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Detail Pekerjaan</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->detail_pekerjaan}}</td>
                                </tr>
                                 <tr>
                                    <td class="font1"width="35%"><b>Golongan Darah</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="62%">{{ $anggota->gol_darah}}</td>
                                </tr>
                                 <tr>
                                    <td class="font1"width="35%"><b>Status Perkawinan</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="62%">{{ $anggota->status_kawin}}</td>
                                </tr>
                                 <tr>
                                    <td class="font1"width="35%"><b>Tanggal Perkawinan</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="62%">{{ $anggota->tgl_kawin}}</td>
                                </tr>
                                
                                <tr>
                                    <td class="font1"width="40%"><b>Status Hubungan Dalam Keluarga</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->status_hub_keluarga}}</td>
                                </tr>
                                 <tr>
                                    <td class="font1"width="40%"><b>Detail Status Hubungan Dalam Keluarga</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->detail_hub_keluarga}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Kewarganegaraan</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->kwn}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>No.Pasport</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->no_pasport}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>No.Kitap</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->no_kitap}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Nama Ayah </b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->nama_ayah}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Nama Ibu</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->nama_ibu}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Domisili Di Padang Panjang</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->domisili}}</td>
                                </tr>
                                <tr>
                                    <td class="font1"width="40%"><b>Penghasilan  / Bulan</b></td>
                                    <td class="font1"width="3%"> : </td>
                                    <td class="font1"width="67%">{{ $anggota->gaji}}</td>
                                </tr>

                            </table> 
                        </div>
                        <div class="col-md-3 text-right mt-4">
                            <br>
                            <img src="{{ public_path('public/warga') }}/{{ $anggota->foto_profile}}" width="125px" height="125px">
                        </div>
                    </div>
    </div>

</body>
</html>