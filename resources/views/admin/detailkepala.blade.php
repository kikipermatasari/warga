@extends('admin.app',[
  'activePage' => 'kepala_keluarga', 
])
@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
        </div>
      </div>
</div>

<?php
                                                  $tgl = $kepala_keluarga->tgl_lahir;
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
<div class="container-fluid mt--7">
      <div class="row"> 
        <div class="col-12">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="card-title"><i class="fa fa-eye"></i>&nbsp;&nbsp; Detail Data Kepala Keluarga
                    <div class="float-right">
                      <a href="/kartu-keluarga/cetak/{{$kepala_keluarga->id}}" target="_blank" class="btn btn-primary btn-round btn-sm mb-3 mr-3"><i class="fa fa-print"></i>&nbsp;Cetak</a>
                      <a href="/kartu-keluarga" class="btn btn-secondary btn-round btn-sm mb-3 mr-3"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
                    </div>
                  </h2><hr>
                <form role="form" action="/kartu-keluarga/anggota/create" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-9">
                  <table border="0" width="100%">
                                <tr>
                                    <td width="40%"><b>Nomor Kartu Keluarga</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->no_kk }}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Nama Lengkap</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->nama}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>NIK</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->nik}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Alamat</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->alamat}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>RT / RW</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->rtrw}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Kode Pos</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->kode_pos}}</td>
                                </tr> 
                                <tr>
                                    <td width="40%"><b>Desa / Kelurahan</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->kelurahan}}</td>
                                </tr>
                                 <tr>
                                    <td width="40%"><b>Kecamatan</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->kecamatan}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Kabupaten / Kota</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->kota}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Provinsi</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->provinsi}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Jenis Kelamin</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->jns_kelamin}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Tempat Lahir / Tanggal Lahir</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->tempat_lahir}} / {{$hasil}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Umur</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">
                                    <?php
                                      $tgl_lahir = $kepala_keluarga->tgl_lahir;
                                      $diff  = date_diff( date_create($tgl_lahir), date_create() );
                                      echo $diff->format('%Y tahun %m bulan');
                                    ?></td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Agama</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->agama}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Pendidikan</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->pendidikan}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Jenis Pekerjaan</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->jenis_pekerjaan}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Detail Pekerjaan</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->detail_pekerjaan}}</td>
                                </tr>
                                 <tr>
                                    <td width="35%"><b>Golongan Darah</b></td>
                                    <td width="3%"> : </td>
                                    <td width="62%">{{ $kepala_keluarga->gol_darah}}</td>
                                </tr>
                                 <tr>
                                    <td width="35%"><b>Status Perkawinan</b></td>
                                    <td width="3%"> : </td>
                                    <td width="62%">{{ $kepala_keluarga->status_kawin}}</td>
                                </tr>
                                 <tr>
                                    <td width="35%"><b>Tanggal Perkawinan</b></td>
                                    <td width="3%"> : </td>
                                    <td width="62%">{{ $kepala_keluarga->tgl_kawin}}</td>
                                </tr>
                                
                                <tr>
                                    <td width="40%"><b>Status Hubungan Dalam Keluarga</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->status_hub_keluarga}}</td>
                                </tr>
                                 <tr>
                                    <td width="40%"><b>Detail Status Hubungan Dalam Keluarga</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->detail_hub_keluarga}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Kewarganegaraan</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->kwn}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>No.Pasport</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->no_pasport}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>No.Kitap</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->no_kitap}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Nama Ayah </b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->nama_ayah}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Nama Ibu</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->nama_ibu}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Domisili Di Padang Panjang</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->domisili}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Alamat Domisili</b><br><b>*Jika Tidak Berdomisili Di Padang Panjang</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->alamat_domisili}}</td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Penghasilan  / Bulan</b></td>
                                    <td width="3%"> : </td>
                                    <td width="67%">{{ $kepala_keluarga->gaji}}</td>
                                </tr>

                            </table> 
                        </div>
                        <div class="col-md-3">
                            @if($kepala_keluarga->foto_profile == "")
                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" id="output" class="gambar" alt="" width="70%" >
                            @else
                            <img src="{{url('public/warga')}}/{{ $kepala_keluarga->foto_profile}}" width="70%" >
                            @endif
                        </div>
                            </div>    
                            <hr>    
                                <br>
                              </div>
                            </div>
                          </div>
                        </div>

@endsection