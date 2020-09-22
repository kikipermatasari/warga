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

<div class="container-fluid mt--7">
      <div class="row"> 
        <div class="col-12">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="card-title"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit Data Kartu Keluarga
                    <div class="float-right">
                      <a href="/kartu-keluarga" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</a>
                    </div>
                  </h2><hr>
                <form role="form" action="/kartu-keluarga/update/{{$kepala_keluarga->id}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nomor KK</label>
                      <input class="form-control" type="text" autofocus="" value="{{$kepala_keluarga->no_kk}}" name="no_kk" placeholder="Masukkan Nomor KK" id="no_kk" >
                  </div>
              </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">NIK</label>
                    <div class="form-group">
                      <input class="form-control" type="text"  name="nik" placeholder="Masukkan NIK" value="{{$kepala_keluarga->nik}}"  id="nik" placeholder="Masukkan NIK" >
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                    <input class="form-control" type="text"  name="nama" placeholder="Masukkan Nama Lengkap" value="{{$kepala_keluarga->nama}}" id="nama">
                </div>
                </div>
            <div class="col-md-6">
                  <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Alamat</label>
                      <textarea class="form-control" type="text" placeholder="Masukan Alamat..."  name="alamat" id="alamat" >{{$kepala_keluarga->alamat}}</textarea>
                  </div>
              </div>
                
              <div class="col-md-2">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">RT/RW</label>
                    <input class="form-control" type="text" value="{{$kepala_keluarga->rtrw}}" placeholder="Masukan RT/RW"  name="rtrw">
                  </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Desa/Kelurahan</label>
                     <select class="form-control form-control"  name="kelurahan">
                        <option value="">-- Pilih Desa/ Kelurahan--</option>
                        <option value="Balai-Balai" @if ($kepala_keluarga->kelurahan =='Balai-Balai') selected @endif  >Balai-Balai</option>
                        <option value="Bukit Surungan" @if ($kepala_keluarga->kelurahan =='Bukit Surungan') selected @endif   >Bukit Surungan</option>
                        <option value="Kampung Manggis" @if ($kepala_keluarga->kelurahan =='Kampung Manggis') selected @endif  >Kampung Manggis</option>
                        <option value="Pasar Baru" @if ($kepala_keluarga->kelurahan =='Pasar Baru') selected @endif  >Pasar Baru</option>
                        <option value="Pasar Usang" @if ($kepala_keluarga->kelurahan =='Pasar Usang') selected @endif  >Pasar Usang</option>
                        <option value="Silaing Atas" @if ($kepala_keluarga->kelurahan =='Silaing Atas') selected @endif  >Silaing Atas</option>
                        <option value="Silaing Bawah" @if ($kepala_keluarga->kelurahan =='Silaing Bawah') selected @endif  >Silaing Bawah</option>
                        <option value="Tanah Hitam" @if ($kepala_keluarga->kelurahan =='Tanah Hitam') selected @endif >Tanah Hitam</option>
                        <option value="Ekor Lubuk" @if ($kepala_keluarga->kelurahan =='Ekor Lubuk') selected @endif  >Ekor Lubuk</option>
                        <option value="Ganting" @if ($kepala_keluarga->kelurahan =='Ganting') selected @endif >Ganting</option>
                        <option value="Guguk Malintang"@if ($kepala_keluarga->kelurahan =='Guguk Malintang') selected @endif  >Guguk Malintang</option>
                        <option value="Koto Katik" @if ($kepala_keluarga->kelurahan =='Koto Katik') selected @endif >Koto Katik</option>
                        <option value="Koto Panjang" @if ($kepala_keluarga->kelurahan =='Koto Panjang') selected @endif  >Koto Panjang</option>
                        <option value="Ngalau" @if ($kepala_keluarga->kelurahan =='Ngalau') selected @endif  >Ngalau</option>
                        <option value="Sigando" @if ($kepala_keluarga->kelurahan =='Sigando') selected @endif  >Sigando</option>
                        <option value="Tanah Pak Lambik" @if ($kepala_keluarga->kelurahan =='Tanah Pak Lambik') selected @endif  >Tanah Pak Lambik</option>    
                      </select> 
                  </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Kecamatan</label>
                    <select class="form-control form-control"  name="kecamatan">
                        <option value="Padang Panjang Barat" @if ($kepala_keluarga->kecamatan =='Padang Panjang Barat') selected @endif >Padang Panjang Barat</option><!--    
                        <option value="Padang Panjang Timur" @if ($kepala_keluarga->kecamatan =='Padang Panjang Timur') selected @endif >Padang Panjang Timur</option> -->   
                    </select>               
                      </div>
                </div>
                <div class="col-md-4"> 
                <div class="form-group">
                  <label for="example-search-input" class="form-control-label">Kode Pos</label>
                     <select class="form-control form-control"  name="kode_pos">
                        <option value="">-- Pilih Kode Pos--</option>
                        <!-- <option>#Padang Panjang Timur#</option>
                        <option value="27125" @if ($kepala_keluarga->kode_pos =='27125') selected @endif >27125</option>
                        <option value="27127" @if ($kepala_keluarga->kode_pos =='27127') selected @endif >27127</option>
                        <option value="27123" @if ($kepala_keluarga->kode_pos =='27123') selected @endif>27123</option>
                        <option value="27128" @if ($kepala_keluarga->kode_pos =='27128') selected @endif >27128</option>
                        <option value="27122" @if ($kepala_keluarga->kode_pos =='27122') selected @endif>27122</option>
                        <option value="27124" @if ($kepala_keluarga->kode_pos =='27124') selected @endif >27124</option>
                        <option value="27126" @if ($kepala_keluarga->kode_pos =='27126') selected @endif>27126</option>
                        <option value="27121" @if ($kepala_keluarga->kode_pos =='27121') selected @endif  >27121</option>
                        <option>#Padang Panjang Barat#</option> -->
                        <option value="27114" @if ($kepala_keluarga->kode_pos =='27114') selected @endif >27114</option>
                        <option value="27115" @if ($kepala_keluarga->kode_pos =='27115') selected @endif>27115</option>
                        <option value="27111" @if ($kepala_keluarga->kode_pos =='27111') selected @endif >27111</option>
                        <option value="27113" @if ($kepala_keluarga->kode_pos =='27113') selected @endif>27113</option>
                        <option value="27116" @if ($kepala_keluarga->kode_pos =='27116') selected @endif >27116</option>
                        <option value="27117" @if ($kepala_keluarga->kode_pos =='27117') selected @endif>27117</option>
                        <option value="27118" @if ($kepala_keluarga->kode_pos =='27118') selected @endif >27118</option>
                        <option value="27112" @if ($kepala_keluarga->kode_pos =='27112') selected @endif>27112</option>
                      </select>
                  </div>
              </div>
               <div class="col-md-3">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Jenis  Kelamin</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio1"  name="jns_kelamin" class="custom-control-input" value="Laki-Laki" @if ($kepala_keluarga->jns_kelamin =='Laki-Laki') checked @endif>
                  <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio2"  name="jns_kelamin" class="custom-control-input" value="Perempuan" @if ($kepala_keluarga->jns_kelamin =='Perempuan') checked @endif>
                  <label class="custom-control-label"  for="customRadio2" >Perempuan</label>
                </div>  
                  </div>
                </div>
               <div class="col-md-5">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Tempat lahir</label>
                    <input class="form-control" type="text"  name="tempat_lahir" value="{{$kepala_keluarga->tempat_lahir}}" placeholder="Masukkan Tempat Lahir">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Tanggal lahir</label>
                    <?php
                        $now = date('Y-m-d');
                    ?>
                    <input class="form-control" type="date" value="{{$kepala_keluarga->tgl_lahir}}"  name="tgl_lahir"  >
                </div> 
              </div>
              <div class="col-md-5">
                  <div class="form-group">
                                  <label for="example-email-input" class="form-control-label">Agama</label><br>
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline3" value="Islam" name="agama" class="custom-control-input" @if ($kepala_keluarga->agama =='Islam') checked @endif>
                                    <label class="custom-control-label" for="customRadioInline3">Islam</label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline4" value="Kristen" name="agama" class="custom-control-input" @if ($kepala_keluarga->agama =='Kristen') checked @endif>
                                    <label class="custom-control-label" for="customRadioInline4">Kristen</label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline5" value="khatolik" name="agama" class="custom-control-input" @if ($kepala_keluarga->agama =='Khatolik') checked @endif>
                                    <label class="custom-control-label" for="customRadioInline5">khatolik</label>
                                  </div><br>
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline6" value="Hindu" name="agama" class="custom-control-input" @if ($kepala_keluarga->agama =='Hindu') checked @endif>
                                    <label class="custom-control-label" for="customRadioInline6">Hindu</label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline7" value="Budha" name="agama" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline7" @if ($kepala_keluarga->agama =='Budha') checked @endif>Budha</label>
                                  </div><br>
                                  <div class="custom-control custom-radio custom-control-inline" >
                                    <input type="radio" id="customRadioInline8" value="Khonghucu" name="agama" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline8" @if ($kepala_keluarga->agama =='Khonghucu') checked @endif>Khonghucu</label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline" >
                                    <input type="radio" id="customRadioInline9" value="Kepercayaan Terhadap Tuhan Yang Maha Esa" name="agama" class="custom-control-input" @if ($kepala_keluarga->agama =='Kepercayaan Terhadap Tuhan Yang Maha Esa') checked @endif>
                                    <label class="custom-control-label" for="customRadioInline9">Kepercayaan Terhadap Tuhan Yang Maha Esa</label>
                                  </div>
                            </div>

               <!--  <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Agama</label>
                    <input class="form-control" type="text"    >
                </div> -->
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Pendidikan</label>
                     <select class="form-control form-control"  name="pendidikan">
                        <option value="">--- Pilih Pendidikan ---</option>
                        <option value="TIDAK / BELUM SEKOLAH" @if ($kepala_keluarga->pendidikan =='TIDAK / BELUM SEKOLAH') selected @endif >TIDAK / BELUM SEKOLAH</option>
                        <option value=" TAMAT SD / SEDERAJAT" @if ($kepala_keluarga->pendidikan =='TAMAT SD / SEDERAJAT') selected @endif> TAMAT SD / SEDERAJAT</option>
                        <option value=" SLTP/SEDERAJAT"  @if ($kepala_keluarga->pendidikan =='SLTP/SEDERAJAT') selected @endif>  SLTP/SEDERAJAT</option>
                        <option value="SLTA / SEDERAJAT"  @if ($kepala_keluarga->pendidikan =='SLTA / SEDERAJAT') selected @endif>SLTA / SEDERAJAT</option>
                        <option value="BELUM TAMAT SD/SEDERAJAT" @if ($kepala_keluarga->pendidikan =='BELUM TAMAT SD/SEDERAJAT') selected @endif >BELUM TAMAT SD/SEDERAJAT</option>
                        <option value="DIPLOMA IV/ STRATA I" @if ($kepala_keluarga->pendidikan =='DIPLOMA IV/ STRATA I') selected @endif>DIPLOMA IV/ STRATA I</option>
                        <option value="AKADEMI/ DIPLOMA III/S. MUDA" @if ($kepala_keluarga->pendidikan =='AKADEMI/ DIPLOMA III/S. MUDA') selected @endif >AKADEMI/ DIPLOMA III/S. MUDA</option>
                        <option value="DIPLOMA I / II" @if ($kepala_keluarga->pendidikan =='DIPLOMA I / II') selected @endif >DIPLOMA I / II</option>
                        <option value="STRATA III" @if ($kepala_keluarga->pendidikan =='STRATA III') selected @endif >STRATA III</option>
                        <option value=" STRATA II" @if ($kepala_keluarga->pendidikan =='STRATA II"') selected @endif>  STRATA II</option>
                      </select>                 
                    </div>
              </div>
               <div class="col-md-3"> 
                <div class="form-group">
                  <label for="example-search-input" class="form-control-label">Golongan Darah</label>
                     <select class="form-control form-control"  name="gol_darah">
                        <option value="">-- Golongan Darah--</option>
                        <option value="A"  @if ($kepala_keluarga->gol_darah =='A') selected @endif>A</option>
                        <option value="B"  @if ($kepala_keluarga->gol_darah =='B') selected @endif >B</option>
                        <option value="O" @if ($kepala_keluarga->gol_darah =='O') selected @endif >O</option>
                        <option value="AB" @if ($kepala_keluarga->gol_darah =='AB') selected @endif >AB</option>
                        <option value="A+"  @if ($kepala_keluarga->gol_darah =='A+') selected @endif >A+</option>
                        <option value="A-"  @if ($kepala_keluarga->gol_darah =='A-') selected @endif  >A-</option>
                        <option value="B+"  @if ($kepala_keluarga->gol_darah =='B+') selected @endif>B+</option>
                        <option value="B-" @if ($kepala_keluarga->gol_darah =='B-') selected @endif  >B-</option>
                        <option value="AB+"  @if ($kepala_keluarga->gol_darah =='AB+') selected @endif>AB+</option>
                        <option value="AB-"  @if ($kepala_keluarga->gol_darah =='AB-') selected @endif>AB-</option>
                        <option value="O="  @if ($kepala_keluarga->gol_darah =='O+') selected @endif >O=</option>
                        <option value="O-" @if ($kepala_keluarga->gol_darah =='O-') selected @endif >O-</option>
                        <option value="Tidak Tahu"  @if ($kepala_keluarga->gol_darah =='Tidak Tahu') selected @endif >Tidak Tahu</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                            <label for="example-number-input" class="form-control-label">Jenis Pekerjaan *</label>
                            <select class="form-control form-control"  name="jenis_pekerjaan">
                                  <option value="Belum / Tidak Bekerja" @if ($kepala_keluarga->jenis_pekerjaan =='Belum / Tidak Bekerja') selected @endif>Belum / Tidak Bekerja</option>
                                  <option value="Mengurus Rumah Tangga" @if ($kepala_keluarga->jenis_pekerjaan =='Mengurus Rumah Tangga') selected @endif>Mengurus Rumah Tangga</option>
                                  <option value="Pelajar / Mahasiswa" @if ($kepala_keluarga->jenis_pekerjaan =='Pelajar / Mahasiswa') selected @endif>Pelajar / Mahasiswa</option>
                                  <option value="Pensiunan" @if ($kepala_keluarga->jenis_pekerjaan =='Pensiunan') selected @endif>Pensiunan</option>
                                  <option value="Pegawai Negeri Sipil (PNS)" @if ($kepala_keluarga->jenis_pekerjaan =='Pegawai Negeri Sipil (PNS)') selected @endif >Pegawai Negeri Sipil (PNS)</option>
                                  <option value="Tentara Nasional Indonesia (TNI)" @if ($kepala_keluarga->jenis_pekerjaan =='Tentara Nasional Indonesia (TNI)') selected @endif>Tentara Nasional Indonesia (TNI)</option>
                                  <option value="Kepolisian RI (POLRI)" @if ($kepala_keluarga->jenis_pekerjaan =='Kepolisian RI (POLRI)') selected @endif>Kepolisian RI (POLRI)</option>
                                  <option value="Perdagangan" @if ($kepala_keluarga->jenis_pekerjaan =='Perdagangan') selected @endif>Perdagangan</option>
                                  <option value="Petani / Pekebun" @if ($kepala_keluarga->jenis_pekerjaan =='Petani / Pekebun') selected @endif>Petani / Pekebun</option>
                                  <option value="Peternak" @if ($kepala_keluarga->jenis_pekerjaan =='Peternak') selected @endif>Peternak</option>
                                  <option value="Nelayan / Perikanan" @if ($kepala_keluarga->jenis_pekerjaan =='Nelayan / Perikanan') selected @endif>Nelayan / Perikanan</option>
                                  <option value="Industri" @if ($kepala_keluarga->jenis_pekerjaan =='Industri') selected @endif>Industri</option>
                                  <option value="Konstruksi" @if ($kepala_keluarga->jenis_pekerjaan =='Konstruksi') selected @endif>Konstruksi</option>
                                  <option value="Transportasi" @if ($kepala_keluarga->jenis_pekerjaan =='Transportasi') selected @endif>Transportasi</option>
                                  <option value="Karyawan Swasta" @if ($kepala_keluarga->jenis_pekerjaan =='Karyawan Swasta') selected @endif>Karyawan Swasta</option>
                                  <option value="Karyawan BUMN" @if ($kepala_keluarga->jenis_pekerjaan =='Karyawan BUMN') selected @endif>Karyawan BUMN</option>
                                  <option value="Karyawan BUMD" @if ($kepala_keluarga->jenis_pekerjaan =='Karyawan BUMD ') selected @endif>Karyawan BUMD</option>
                                  <option value="Karyawan Honorer" @if ($kepala_keluarga->jenis_pekerjaan =='Karyawan Honorer') selected @endif>Karyawan Honorer</option>
                                  <option value="Buruh Harian Lepas" @if ($kepala_keluarga->jenis_pekerjaan =='Buruh Harian Lepas') selected @endif>Buruh Harian Lepas</option>
                                  <option value="Buruh Tani / Perkebunan" @if ($kepala_keluarga->jenis_pekerjaan =='Buruh Tani / Perkebunan') selected @endif>Buruh Tani / Perkebunan</option>
                                  <option value="Buruh Nelayan / Perikanan" @if ($kepala_keluarga->jenis_pekerjaan =='Buruh Nelayan / Perikanan') selected @endif>Buruh Nelayan / Perikanan</option>
                                  <option value="Buruh Peternakan" @if ($kepala_keluarga->jenis_pekerjaan =='Buruh Peternakan') selected @endif>Buruh Peternakan</option>
                                  <option value="Pembantu Rumah Tangga" @if ($kepala_keluarga->jenis_pekerjaan =='Pembantu Rumah Tangga') selected @endif>Pembantu Rumah Tangga</option>
                                  <option value="Tukang Cukur" @if ($kepala_keluarga->jenis_pekerjaan =='Tukang Cukur') selected @endif>Tukang Cukur</option>
                                  <option value="Tukang Listrik" @if ($kepala_keluarga->jenis_pekerjaan =='Tukang Listrik') selected @endif>Tukang Listrik</option>
                                  <option value="Tukang Batu" @if ($kepala_keluarga->jenis_pekerjaan =='Tukang Batu') selected @endif>Tukang Batu</option>
                                  <option value="Tukang Kayu"@if ($kepala_keluarga->jenis_pekerjaan =='Tukang Kayu') selected @endif>Tukang Kayu</option>
                                  <option value="Tukang Sol Sepatu" @if ($kepala_keluarga->jenis_pekerjaan =='Tukang Sol Sepatu') selected @endif>Tukang Sol Sepatu</option>
                                  <option value="Tukang Las / Pandai Besi" @if ($kepala_keluarga->jenis_pekerjaan =='Tukang Las / Pandai Besi') selected @endif>Tukang Las / Pandai Besi</option>
                                  <option value="Tukang Jahit" @if ($kepala_keluarga->jenis_pekerjaan =='Tukang Jahit') selected @endif>Tukang Jahit</option>
                                  <option value="Tukang Gigi" @if ($kepala_keluarga->jenis_pekerjaan =='Tukang Gigi') selected @endif>Tukang Gigi</option>
                                  <option value="Penata Rias" @if ($kepala_keluarga->jenis_pekerjaan =='Penata Rias') selected @endif>Penata Rias</option>
                                  <option value="Penata Busana" @if ($kepala_keluarga->jenis_pekerjaan =='Penata Busana') selected @endif>Penata Busana</option>
                                  <option value="Penata Rambut" @if ($kepala_keluarga->jenis_pekerjaan =='Penata Rambut') selected @endif>Penata Rambut</option>
                                  <option value="Mekanik" @if ($kepala_keluarga->jenis_pekerjaan =='Mekanik') selected @endif>Mekanik</option>
                                  <option value="Seniman" @if ($kepala_keluarga->jenis_pekerjaan =='Seniman') selected @endif>Seniman</option>
                                  <option value="Tabib" @if ($kepala_keluarga->jenis_pekerjaan =='Tabib') selected @endif>Tabib</option>
                                  <option value="Paraji" @if ($kepala_keluarga->jenis_pekerjaan =='Paraji') selected @endif>Paraji</option>
                                  <option value="Perancang Busana" @if ($kepala_keluarga->jenis_pekerjaan =='Perancang Busana') selected @endif>Perancang Busana</option>
                                  <option value="Penterjemah" @if ($kepala_keluarga->jenis_pekerjaan =='Penterjemah') selected @endif>Penterjemah</option>
                                  <option value="Imam Mesjid" @if ($kepala_keluarga->jenis_pekerjaan =='Imam Masjid') selected @endif>Imam Mesjid</option>
                                  <option value="Pendeta" @if ($kepala_keluarga->jenis_pekerjaan =='Pendeta') selected @endif>Pendeta</option>
                                  <option value="Pastor" @if ($kepala_keluarga->jenis_pekerjaan =='Pastor') selected @endif>Pastor</option>
                                  <option value="Wartawan" @if ($kepala_keluarga->jenis_pekerjaan =='Wartawan') selected @endif>Wartawan</option>
                                  <option value="Ustadz / Mubaligh" @if ($kepala_keluarga->jenis_pekerjaan =='Ustadz / Mubaligh') selected @endif>Ustadz / Mubaligh</option>
                                  <option value="Juru Masak" @if ($kepala_keluarga->jenis_pekerjaan =='Juru Masak') selected @endif>Juru Masak</option>
                                  <option value="Promotor Acara" @if ($kepala_keluarga->jenis_pekerjaan =='Promotor Acara') selected @endif>Promotor Acara</option>
                                  <option value="Anggota DPR RI " @if ($kepala_keluarga->jenis_pekerjaan =='Anggota DPR RI') selected @endif>Anggota DPR RI </option>
                                  <option value="Anggota DPD" @if ($kepala_keluarga->jenis_pekerjaan =='Anggota DPD') selected @endif>Anggota DPD</option>
                                  <option value="Anggota BPK" @if ($kepala_keluarga->jenis_pekerjaan =='Anggota BPK') selected @endif>Anggota BPK</option>
                                  <option value="Presiden" @if ($kepala_keluarga->jenis_pekerjaan =='Presiden') selected @endif>Presiden</option>
                                  <option value="Wakil Presiden" @if ($kepala_keluarga->jenis_pekerjaan =='Wakil Presiden') selected @endif>Wakil Presiden</option>
                                  <option value="Anggota Mahkamah Konstitusi" @if ($kepala_keluarga->jenis_pekerjaan =='Anggota Mahkamah Konstitusi') selected @endif>Anggota Mahkamah Konstitusi</option>
                                  <option value="Anggota Kabinet / Kementrian" @if ($kepala_keluarga->jenis_pekerjaan =='Anggota Kabinet / Kementrian') selected @endif>Anggota Kabinet / Kementrian</option>
                                  <option value="Duta Besar" @if ($kepala_keluarga->jenis_pekerjaan =='Duta Besar') selected @endif>Duta Besar</option>
                                  <option value="Gubernur" @if ($kepala_keluarga->jenis_pekerjaan =='Gubernur') selected @endif>Gubernur</option>
                                  <option value="Wakil Gubernur" @if ($kepala_keluarga->jenis_pekerjaan =='Wakil Gubernur') selected @endif>Wakil Gubernur</option>
                                  <option value="Bupati" @if ($kepala_keluarga->jenis_pekerjaan =='Bupati') selected @endif>Bupati</option>
                                  <option value="Wakil Bupati" @if ($kepala_keluarga->jenis_pekerjaan =='Wakil Bupati') selected @endif>Wakil Bupati</option>
                                  <option value="Walikota" @if ($kepala_keluarga->jenis_pekerjaan =='Walikota') selected @endif>Walikota</option>
                                  <option value="Wakil Walikota" @if ($kepala_keluarga->jenis_pekerjaan =='Wakil Walikota') selected @endif>Wakil Walikota</option>
                                  <option value="Anggota DPRD Prop" @if ($kepala_keluarga->jenis_pekerjaan =='Anggota DPRD Prop') selected @endif>Anggota DPRD Prop</option>
                                  <option value="Anggota DPRD Kap / Kota" @if ($kepala_keluarga->jenis_pekerjaan =='Anggota DPRD Kap / Kota') selected @endif>Anggota DPRD Kap / Kota</option>
                                  <option value="Dosen" @if ($kepala_keluarga->jenis_pekerjaan =='Dosen') selected @endif>Dosen</option>
                                  <option value="Guru" @if ($kepala_keluarga->jenis_pekerjaan =='Guru') selected @endif>Guru</option>
                                  <option value="Pilot" @if ($kepala_keluarga->jenis_pekerjaan =='Pilot') selected @endif>Pilot</option>
                                  <option value="Pengacara" @if ($kepala_keluarga->jenis_pekerjaan =='Pengacara') selected @endif>Pengacara</option>
                                  <option value="Notaris" @if ($kepala_keluarga->jenis_pekerjaan =='Notaris') selected @endif>Notaris</option>
                                  <option value="Arsitek" @if ($kepala_keluarga->jenis_pekerjaan =='Arsitek') selected @endif>Arsitek</option>
                                  <option value="Akuntan"@if ($kepala_keluarga->jenis_pekerjaan =='Akuntan') selected @endif>Akuntan</option>
                                  <option value="Konsultan" @if ($kepala_keluarga->jenis_pekerjaan =='Konsultan') selected @endif>Konsultan</option>
                                  <option value="Dokter" @if ($kepala_keluarga->jenis_pekerjaan =='Dokter') selected @endif>Dokter</option>
                                  <option value="Bidan" @if ($kepala_keluarga->jenis_pekerjaan =='Bidan') selected @endif>Bidan</option>
                                  <option value="Perawat" @if ($kepala_keluarga->jenis_pekerjaan =='Perawat') selected @endif>Perawat</option>
                                  <option value="Apoteker" @if ($kepala_keluarga->jenis_pekerjaan =='Apoteker') selected @endif>Apoteker</option>
                                  <option value="Psikiater / Psikolog" @if ($kepala_keluarga->jenis_pekerjaan =='Psikiater / Psikolog') selected @endif>Psikiater / Psikolog</option>
                                  <option value="Penyiar Televisi" @if ($kepala_keluarga->jenis_pekerjaan =='Penyiar televisi') selected @endif>Penyiar Televisi</option>
                                  <option value="Penyiar Radio" @if ($kepala_keluarga->jenis_pekerjaan =='penyiar Radio') selected @endif>Penyiar Radio</option>
                                  <option value="Pelaut" @if ($kepala_keluarga->jenis_pekerjaan =='Pelaut') selected @endif>Pelaut</option>
                                  <option value="Peneliti" @if ($kepala_keluarga->jenis_pekerjaan =='Peneliti') selected @endif>Peneliti</option>
                                  <option value="Sopir" @if ($kepala_keluarga->jenis_pekerjaan =='Sopir') selected @endif>Sopir</option>
                                  <option value="Pialang" @if ($kepala_keluarga->jenis_pekerjaan =='Pialang') selected @endif>Pialang</option>
                                  <option value="Paranormal" @if ($kepala_keluarga->jenis_pekerjaan =='Paranormal') selected @endif>Paranormal</option>
                                  <option value="Pedagang" @if ($kepala_keluarga->jenis_pekerjaan =='pedagang') selected @endif>Pedagang</option>
                                  <option value="Perangkat Desa" @if ($kepala_keluarga->jenis_pekerjaan =='Perangakat Desa') selected @endif>Perangkat Desa</option>
                                  <option value="Kepala Desa" @if ($kepala_keluarga->jenis_pekerjaan =='Kepala Desa') selected @endif>Kepala Desa</option>
                                  <option value="Biarawati" @if ($kepala_keluarga->jenis_pekerjaan =='Biarawati') selected @endif>Biarawati</option>
                                  <option value="Wiraswasta" @if ($kepala_keluarga->jenis_pekerjaan =='Wiraswasta') selected @endif>Wiraswasta</option>
                                  <option value="Lainnya" @if ($kepala_keluarga->jenis_pekerjaan =='Lainnya') selected @endif>Lainnya</option>
                                  
                            </select>
                          </div>
                    </div>
                  <div class="col-md-6">
              <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Detail Jenis Pekerjaan</label>
                    <textarea class="form-control" type="text" rows="3" placeholder="Masukan Detail Jenis Pekerjaan"  name="detail_pekerjaan" >{{$kepala_keluarga->detail_pekerjaan}}</textarea>
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Status Perkawinan</label>
                     <select class="form-control form-control"  name="status_kawin">
                        <option value="Belum Kawin"  @if ($kepala_keluarga->status_kawin =='Kawin') selected @endif >Belum Kawin</option>
                        <option value="Kawin"  @if ($kepala_keluarga->status_kawin =='Kawin') selected @endif  >Kawin</option>
                        <option value="Cerai Hidup"  @if ($kepala_keluarga->status_kawin =='Cerai Hidup') selected @endif  >Cerai Hidup</option>
                        <option value="Cerai Mati"  @if ($kepala_keluarga->status_kawin =='Cerai Mati') selected @endif >Cerai Mati</option>
                        
                      </select>  
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Tanggal Perkawinan</label>
                    <input class="form-control" type="text" placeholder="Masukan Tanggal Perkawinan" value="{{$kepala_keluarga->tgl_kawin}}" name="tgl_kawin">
                  </div>
                </div>
               <div class="col-md-6">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Status Hub Dalam Keluarga</label>
                     <select class="form-control form-control"  name="status_hub_keluarga">
                        <option value="">-- Pilih Status Hubungan Dalam Keluarga --</option>
                        <option value="Kepala Keluarga" @if ($kepala_keluarga->status_hub_keluarga =='Kepala Keluarga') selected @endif  >Kepala Keluarga</option>
                        <option value="Suami" @if ($kepala_keluarga->status_hub_keluarga =='Suami') selected @endif  >Suami</option>
                        <option value="Istri" @if ($kepala_keluarga->status_hub_keluarga =='Istri') selected @endif  >Istri</option>
                        <option value="Anak" @if ($kepala_keluarga->status_hub_keluarga =='Anak') selected @endif  >Anak</option>
                        <option value="Menantu" @if ($kepala_keluarga->status_hub_keluarga =='Menantu') selected @endif   >Menantu</option>
                        <option value="Cucu" @if ($kepala_keluarga->status_hub_keluarga =='Cucu') selected @endif  >Cucu</option>
                        <option value="Orang Tua" @if ($kepala_keluarga->status_hub_keluarga =='Orang Tua') selected @endif  >Orang Tua</option>
                        <option value="Mertua" @if ($kepala_keluarga->status_hub_keluarga =='Mertua') selected @endif  >Mertua</option>
                        <option value="Familiy Lain" @if ($kepala_keluarga->status_hub_keluarga =='Familiy Lain') selected @endif  >Familiy Lain</option>
                        <option value="Pembantu" @if ($kepala_keluarga->status_hub_keluarga =='Pembantu') selected @endif  >Pembantu</option>
                        <option value="Lainnya" @if ($kepala_keluarga->status_hub_keluarga =='Lainnya') selected @endif >Lainnya</option>
                      </select>                 
                    </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Detail Status Hub Keluarga</label>
                    <textarea class="form-control" type="text" rows="" placeholder="Masukan Detail Status Hubungan Keluarga"  name="detail_hub_keluarga" >{{$kepala_keluarga->detail_hub_keluarga}}</textarea>
                </div>
              </div>   
              <div class="col-md-3">
                <div class="form-group">
                    <label for="example-password-input" class="form-control-label">Kewarganegaraan</label>
                      <select class="form-control form-control"  name="kwn">
                        <option value="">-- Pilih Kewarganegaraan--</option>
                        <option value="WNI" @if ($kepala_keluarga->kwn =='WNI') selected @endif>WNI</option>
                        <option value="WNA"@if ($kepala_keluarga->kwn =='WNA') selected @endif>WNA</option>
                        
                      </select>               
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">No. Pasport</label>
                    <input class="form-control" type="text" value="{{$kepala_keluarga->no_pasport}}" placeholder="Masukan No. Pasport ... "  name="no_pasport" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">No. Kitap</label>
                    <input class="form-control" type="text" value="{{$kepala_keluarga->no_kitap}}" placeholder="Masukan No. Kitap ... "  name="no_kitap" >
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="example-email-input" class="form-control-label">Nama Ayah</label>
                      <input class="form-control" type="text" value="{{$kepala_keluarga->nama_ayah}}" placeholder="Status Ayah   ..." name="nama_ayah" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="example-email-input" class="form-control-label">Nama Ibu</label>
                      <input class="form-control" type="text" value="{{$kepala_keluarga->nama_ibu}}"  placeholder="Nama Ibu ..." name="nama_ibu" >
                  </div>
            </div>
             <div class="col-md-3">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label"> Domisili Di Padang Panjang</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio10"  name="domisili" class="custom-control-input" value="Ya" @if ($kepala_keluarga->domisili =='Ya') checked @endif>
                  <label class="custom-control-label" for="customRadio10">Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio11"  name="domisili" class="custom-control-input" value="Tidak" @if ($kepala_keluarga->domisili =='Tidak') checked @endif>
                  <label class="custom-control-label"  for="customRadio11" >Tidak</label>
                </div>  
                  </div>
                </div>
                <div class="col-md-5">
              <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Penghasilan / Bulan</label>
                     <select class="form-control form-control"  name="gaji">
                        <option value="0-1 Juta" @if ($kepala_keluarga->gaji =='0-1 Juta') selected @endif> 0-1 Juta</option>
                        <option value="1 Juta- 2 Juta" @if ($kepala_keluarga->gaji =='1 Juta- 2 Juta') selected @endif   >1 Juta- 2 Juta</option>
                        <option value="2 Juta - 3 Juta" @if ($kepala_keluarga->gaji =='2 Juta - 3 Juta') selected @endif  >2 Juta - 3 Juta</option>
                        <option value="3 Juta - 4 Juta" @if ($kepala_keluarga->gaji =='3 Juta - 4 Juta') selected @endif  >3 Juta - 4 Juta</option>
                        <option value="4 Juta - 5 Juta" @if ($kepala_keluarga->gaji =='4 Juta - 5 Juta') selected @endif  >4 Juta - 5 Juta</option>
                        <option value="> 5 Juta"  @if ($kepala_keluarga->gaji =='> 5 Juta') selected @endif >> 5Juta </option>                       
                      </select>  
                </div>
              </div>
               <style>
                          }
                          }
                        .gambar {
                            width: 150px;
                            height: 200px;
                        }
                    </style>
                    <script>
                        var loadFile = function (event) {
                            var reader = new FileReader();
                            reader.onload = function () {
                                var output = document.getElementById('output');
                                output.src = reader.result;
                            };
                            reader.readAsDataURL(event.target.files[0]);
                        };

                    </script>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Foto Profile</label>
                    <input class="form-control" type="file" onchange="loadFile(event)" class="form-control-file" placeholder="Masukan No. Pasport ... "  name="foto_profile" >
                    <img src="{{url('public/warga')}}/{{ $kepala_keluarga->foto_profile}}" id="output" class="gambar" alt="" style="max-height:100px;max-width:150px;margin-top:10px" >
                </div>
              </div>
             </div>
             <br>
                <div>
                  <button type="submit" class="btn btn-lg btn-success btn-block">
                    <i class="fa fa-edit" id="btn_kk"></i>&nbsp;<span>Update</span>
                  </button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>

@endsection