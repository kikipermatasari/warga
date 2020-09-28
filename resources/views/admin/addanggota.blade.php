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
                  <h2 class="card-title"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Tambah Data
                    <div class="float-right">
                      <a href="/kartu-keluarga" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</a>
                    </div>
                  </h2><hr>
                <form role="form" action="/kartu-keluarga/anggota/create" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">No KK</label>
                    <input class="form-control" type="hidden"  name="id_nomorkk" placeholder="Masukan Nama Kepala Keluarga ... " value="{{$kepala_keluarga->no_kk}}" >
                    <input class="form-control" type="text" disabled="disabled" placeholder="Masukan Nama Kepala Keluarga ... " value="{{$kepala_keluarga->no_kk}}" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Nama Kepala Keluaga</label>
                    <input class="form-control" type="hidden"  name="nama_kk" placeholder="Masukan Nama Kepala Keluarga ... " value="{{$kepala_keluarga->nama}}" >
                    <input class="form-control" type="text"  disabled="disabled" placeholder="Masukan Nama Kepala Keluarga ... " value="{{$kepala_keluarga->nama}}" >
                  </div>
                </div>  
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Alamat</label>
                      <input class="form-control" type="hidden"  name="alam" placeholder="Masukan Nama Kepala Keluarga ... " value="{{$kepala_keluarga->nama}}" >
                      <input class="form-control" type="text"  name="nama_kk" placeholder="Masukan Nama Kepala Keluarga ... " value="{{$kepala_keluarga->nama}}" >
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">RT/RW</label>
                    <input class="form-control" type="hidden" value="{{$kepala_keluarga->rtrw}}" placeholder="Masukan RT/RW" name="rtrw">
                    <input class="form-control" type="text" value="{{$kepala_keluarga->rtrw}}" placeholder="Masukan RT/RW" disabled="disabled">
                  </div>
                </div>
                <div class="col-md-4"> 
                <div class="form-group">
                  <label for="example-search-input" class="form-control-label">Kode Pos</label>
                     <select class="form-control form-control"     name="id_kodepos">
                        <option value="">-- Pilih Kode Pos--</option>
                        <!-- <option>#Padang Panjang Timur#</option>
                        <option value="27125" @if ($kepala_keluarga->kode_pos =='27125') selected @endif >27125</option>
                        <option value="27127" @if ($kepala_keluarga->kode_pos =='27127') selected @endif >27127</option>
                        <option value="27123" @if ($kepala_keluarga->kode_pos =='27123') selected @endif>27123</option>
                        <option value="27128" @if ($kepala_keluarga->kode_pos =='27128') selected @endif >27128</option>
                        <option value="27122" @if ($kepala_keluarga->kode_pos =='27122') selected @endif>27122</option>
                        <option value="27124" @if ($kepala_keluarga->kode_pos =='27124') selected @endif >27124</option>
                        <option value="27126" @if ($kepala_keluarga->kode_pos =='27126') selected @endif>27126</option>
                        <option value="27121" @if ($kepala_keluarga->kode_pos =='27121') selected @endif  >27121</option> -->
<!--                         <option>#Padang Panjang Barat#</option>
 -->                    <option value="27114" @if ($kepala_keluarga->kode_pos =='27114') selected @endif >27114<option>
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
              <div class="col-md-4">  
                   <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Desa/Kelurahan</label>
                     <select class="form-control form-control"  name="id_kelurahan">
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
                <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama Lengkap Sesuai KK</label>
                    <input class="form-control" autofocus="" type="text" required="" placeholder=" Nama Lengkap (Sesuai KK) ..." name="nama"  >
                </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">NIK</label>
                    <div class="form-group">
                      <input class="form-control" type="text" required name="nik" placeholder="Masukkan NIK" id="nik" placeholder="Masukkan NIK" >
                    </div>
                  </div>
                </div>
              <div class="col-md-4">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Jenis  Kelamin</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio1"  name="jenis_kelamin" class="custom-control-input" value="Laki-Laki">
                  <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio2"  name="jenis_kelamin" class="custom-control-input" value="Perempuan" >
                  <label class="custom-control-label"  for="customRadio2" >Perempuan</label>
                </div>  
                  </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Tempat lahir</label>
                    <input class="form-control" type="text" required="" placeholder="Tempat Lahir..." name="tempat_lahir" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Tanggal lahir</label>
                    <input class="form-control" type="date" required="" placeholder="Tanggal Lahit..." name="tgl_lahir" >
                </div>
              </div>
             <div class="col-md-6">
                <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Agama</label><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline3" value="Islam" d name="agama_anggota" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline3">Islam</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline4" value="Kristen"  name="agama_anggota" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline4">Kristen</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline5" value="khatolik"  name="agama_anggota" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline5">khatolik</label>
                                </div><br>
                                <div class="custom-control custom-radio custom-control-inline" >
                                  <input type="radio" id="customRadioInline6" value="Hindu"  name="agama_anggota" class="custom-control-input" >
                                  <label class="custom-control-label" for="customRadioInline6">Hindu</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline ">
                                  <input type="radio" id="customRadioInline7" value="Budha"  name="agama_anggota" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline7" >Budha</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline" >
                                  <input type="radio" id="customRadioInline8" value="Khonghucu"  name="agama_anggota" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline8" >Khonghucu</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline" >
                                  <input type="radio" id="customRadioInline9" value="Kepercayaan Terhadap Tuhan Yang Maha Esa"  name="agama_anggota" class="custom-control-input"  >
                                  <label class="custom-control-label" for="customRadioInline9">Kepercayaan Terhadap Tuhan Yang Maha Esa</label>
                                </div>
                            </div>
                          </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Pendidikan</label>
                     <select class="form-control form-control" required name="pendidikan">
                        <option value="">--- Pilih Pendidikan ---</option>
                        <option value="TIDAK / BELUM SEKOLAH"  >TIDAK / BELUM SEKOLAH</option>
                        <option value=" TAMAT SD / SEDERAJAT" > TAMAT SD / SEDERAJAT</option>
                        <option value=" SLTP/SEDERAJAT"  >  SLTP/SEDERAJAT</option>
                        <option value="SLTA / SEDERAJAT"  >SLTA / SEDERAJAT</option>
                        <option value="BELUM TAMAT SD/SEDERAJAT"  >BELUM TAMAT SD/SEDERAJAT</option>
                        <option value="DIPLOMA IV/ STRATA I" >DIPLOMA IV/ STRATA I</option>
                        <option value="AKADEMI/ DIPLOMA III/S. MUDA" >AKADEMI/ DIPLOMA III/S. MUDA</option>
                        <option value="DIPLOMA I / II" >DIPLOMA I / II</option>
                        <option value="STRATA III" >STRATA III</option>
                        <option value=" STRATA II" >  STRATA II</option>
                      </select>                 
                    </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                            <label for="example-search-input" class="form-control-label">Jenis Pekerjaan *</label>
                            <select class="form-control form-control" required name="jenis_pekerjaan">
                                  <option value="">-- Pilih Jenis Pekerjaan--</option>
                                  <option value="Belum / Tidak Bekerja" >Belum / Tidak Bekerja</option>
                                  <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                  <option value="Pelajar / Mahasiswa" >Pelajar / Mahasiswa</option>
                                  <option value="Pensiunan>Pensiunan">Pensiunan</option>
                                  <option value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>
                                  <option value="Tentara Nasional Indonesia (TNI)">Tentara Nasional Indonesia (TNI)</option>
                                  <option value="Kepolisian RI (POLRI)">Kepolisian RI (POLRI)</option>
                                  <option value="Perdagangan">Perdagangan</option>
                                  <option value="Petani / Pekebun" >Petani / Pekebun</option>
                                  <option value="Peternak">Peternak</option>
                                  <option value="Nelayan / Perikanan" >Nelayan / Perikanan</option>
                                  <option value="Industri">Industri</option>
                                  <option value="Konstruksi" >Konstruksi</option>
                                  <option value="Transportasi" >Transportasi</option>
                                  <option value="Karyawan Swasta" >Karyawan Swasta</option>
                                  <option value="Karyawan BUMN" >Karyawan BUMN</option>
                                  <option value="Karyawan BUMD" >Karyawan BUMD</option>
                                  <option value="Karyawan Honorer">Karyawan Honorer</option>
                                  <option value="Buruh Harian Lepas">Buruh Harian Lepas</option>
                                  <option value="Buruh Tani / Perkebunan" >Buruh Tani / Perkebunan</option>
                                  <option value="Buruh Nelayan / Perikanan" >Buruh Nelayan / Perikanan</option>
                                  <option value="Buruh Peternakan" >Buruh Peternakan</option>
                                  <option value="Pembantu Rumah Tangga" >Pembantu Rumah Tangga</option>
                                  <option value="Tukang Cukur">Tukang Cukur</option>
                                  <option value="Tukang Listrik" >Tukang Listrik</option>
                                  <option value="Tukang Batu" >Tukang Batu</option>
                                  <option value="Tukang Kayu">Tukang Kayu</option>
                                  <option value="Tukang Sol Sepatu" >Tukang Sol Sepatu</option>
                                  <option value="Tukang Las / Pandai Besi">Tukang Las / Pandai Besi</option>
                                  <option value="Tukang Jahit" >Tukang Jahit</option>
                                  <option value="Tukang Gigi" >Tukang Gigi</option>
                                  <option value="Penata Rias" >Penata Rias</option>
                                  <option value="Penata Busana">Penata Busana</option>
                                  <option value="Penata Rambut" >Penata Rambut</option>
                                  <option value="Mekanik">Mekanik</option>
                                  <option value="Seniman" >Seniman</option>
                                  <option value="Tabib" >Tabib</option>
                                  <option value="Paraji">Paraji</option>
                                  <option value="Perancang Busana">Perancang Busana</option>
                                  <option value="Penterjemah" >Penterjemah</option>
                                  <option value="Imam Mesjid">Imam Mesjid</option>
                                  <option value="Pendeta" >Pendeta</option>
                                  <option value="Pastor" >Pastor</option>
                                  <option value="Wartawan" >Wartawan</option>
                                  <option value="Ustadz / Mubaligh" >Ustadz / Mubaligh</option>
                                  <option value="Juru Masak">Juru Masak</option>
                                  <option value="Promotor Acara" >Promotor Acara</option>
                                  <option value="Anggota DPR RI " >Anggota DPR RI </option>
                                  <option value="Anggota DPD">Anggota DPD</option>
                                  <option value="Anggota BPK" >Anggota BPK</option>
                                  <option value="Presiden">Presiden</option>
                                  <option value="Wakil Presiden">Wakil Presiden</option>
                                  <option value="Anggota Mahkamah Konstitusi">Anggota Mahkamah Konstitusi</option>
                                  <option value="Anggota Kabinet / Kementrian" >Anggota Kabinet / Kementrian</option>
                                  <option value="Duta Besar" >Duta Besar</option>
                                  <option value="Gubernur">Gubernur</option>
                                  <option value="Wakil Gubernur" >Wakil Gubernur</option>
                                  <option value="Bupati" >Bupati</option>
                                  <option value="Wakil Bupati" >Wakil Bupati</option>
                                  <option value="Walikota" >Walikota</option>
                                  <option value="Wakil Walikota" >Wakil Walikota</option>
                                  <option value="Anggota DPRD Prop">Anggota DPRD Prop</option>
                                  <option value="Anggota DPRD Kap / Kota" >Anggota DPRD Kap / Kota</option>
                                  <option value="Dosen" >Dosen</option>
                                  <option value="Guru">Guru</option>
                                  <option value="Pilot" >Pilot</option>
                                  <option value="Pengacara" >Pengacara</option>
                                  <option value="Notaris">Notaris</option>
                                  <option value="Arsitek" >Arsitek</option>
                                  <option value="Akuntan">Akuntan</option>
                                  <option value="Konsultan" >Konsultan</option>
                                  <option value="Dokter" >Dokter</option>
                                  <option value="Bidan" >Bidan</option>
                                  <option value="Perawat" >Perawat</option>
                                  <option value="Apoteker">Apoteker</option>
                                  <option value="Psikiater / Psikolog" >Psikiater / Psikolog</option>
                                  <option value="Penyiar Televisi" >Penyiar Televisi</option>
                                  <option value="Penyiar Radio" >Penyiar Radio</option>
                                  <option value="Pelaut">Pelaut</option>
                                  <option value="Peneliti" >Peneliti</option>
                                  <option value="Sopir">Sopir</option>
                                  <option value="Pialang">Pialang</option>
                                  <option value="Paranormal">Paranormal</option>
                                  <option value="Pedagang">Pedagang</option>
                                  <option value="Perangkat Desa" >Perangkat Desa</option>
                                  <option value="Kepala Desa" >Kepala Desa</option>
                                  <option value="Biarawati">Biarawati</option>
                                  <option value="Wiraswasta" >Wiraswasta</option>
                                  <option value="Lainnya"></option>
                                  
                            </select>
                          </div>
                    </div>
                  <div class="col-md-6">
              <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Detail Jenis Pekerjaan</label>
                    <textarea class="form-control" type="text" rows="3" placeholder="Masukan Detail Jenis Pekerjaan" required name="detail_pekerjaan" ></textarea>
                </div>
              </div>
               <div class="col-md-3"> 
                <div class="form-group">
                  <label for="example-search-input" class="form-control-label">Golongan Darah</label>
                     <select class="form-control form-control" required name="gol_darah">
                        <option value="">-- Golongan Darah--</option>
                        <option value="A" >A</option>
                        <option value="B"  >B</option>
                        <option value="O" >O</option>
                        <option value="AB"  >AB</option>
                        <option value="A+" >A+</option>
                        <option value="A-"  >A-</option>
                        <option value="B+" >B+</option>
                        <option value="B-"  >B-</option>
                        <option value="AB+" >AB+</option>
                        <option value="AB-" >AB-</option>
                        <option value="O="  >O=</option>
                        <option value="O-" >O-</option>
                        <option value="Tidak Tahu"  >Tidak Tahu</option>
                      </select>
                  </div>
              </div><div class="col-md-5">
              <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Status Perkawinan</label>
                     <select class="form-control form-control" required name="status_kawin">
                        <option value="">-- Pilih Status Perkawinan --</option>
                        <option value="Belum Kawin" >Belum Kawin</option>
                        <option value="Kawin"  >Kawin</option>
                        <option value="Cerai Hidup"  >Cerai Hidup</option>
                        <option value="Cerai Mati"  >Cerai Mati</option>
                        
                      </select>  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Tanggal Perkawinan</label>
                    <input class="form-control" type="text" placeholder="Masukan Tanggal Perkawinan" required name="tgl_kawin">
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Status Hub Dalam Keluarga</label>
                     <select class="form-control form-control" required name="status_hub_keluarga">
                        <option value="">-- Pilih Status Hubungan Dalam Keluarga --</option>
                        <option value="Kepala Keluarga" >Kepala Keluarga</option>
                        <option value="Suami"  >Suami</option>
                        <option value="Istri"  >Istri</option>
                        <option value="Anak"  >Anak</option>
                        <option value="Menantu"  >Menantu</option>
                        <option value="Cucu" >Cucu</option>
                        <option value="Orang Tua" >Orang Tua</option>
                        <option value="Mertua" >Mertua</option>
                        <option value="Familiy Lain" >Familiy Lain</option>
                        <option value="Pembantu" >Pembantu</option>
                        <option value="Lainnya" >Lainnya</option>
                      </select>                 
                    </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Detail Status Hub Keluarga</label>
                    <textarea class="form-control" type="text" rows="3" placeholder="Masukan Detail Status Hubungan Keluarga" required name="detail_hub_keluarga" ></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-password-input" class="form-control-label">Kewarganegaraan</label>
                      <select class="form-control form-control" required name="kwn">
                        <option value="">-- Pilih Kewarganegaraan--</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                        
                      </select>               
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">No. Pasport</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan No. Pasport ... " required name="no_pasport" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">No. Kitap</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan No. Kitap ... " required name="no_kitap" >
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="example-email-input" class="form-control-label">Nama Ayah</label>
                      <input class="form-control" type="text" required="" placeholder="Status Ayah   ..." name="nama_ayah" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="example-email-input" class="form-control-label">Nama Ibu</label>
                      <input class="form-control" type="text" required="" placeholder="Nama Ibu ..." name="nama_ibu" >
                  </div>
            </div>
            <div class="col-md-2">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label"> Domisili Di Padang Panjang</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio10"  name="domisili" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio10">Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio11"  name="domisili" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio11" >Tidak</label>
                </div>  
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="example-email-input" class="form-control-label">Alamat Domisili *Jika Tidak berdomisili Di Padang Panjang</label>
                      <textarea class="form-control" rows="3" type="text" placeholder="Masukan Alamat Domisili Jika Tidak ..." name="alamat_domisili" ></textarea>
                  </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Penghasilan / Bulan</label>
                     <select class="form-control form-control" name="gaji">
                        <option value="">-- Pilih Kisaran Gaji --</option>
                        <option value="-" >-</option>
                        <option value="0-1 Juta" > 0-1 Juta</option>
                        <option value="1 Juta- 2 Juta"  >1 Juta-  Juta</option>
                        <option value="2 Juta - 3 Juta"  >2 Juta - 3 Juta</option>
                        <option value="3 Juta - 4 Juta"  >3 Juta - 4 Juta</option>
                        <option value="4 Juta - 5 Juta"  >4 Juta - 5 Juta</option>
                        <option value="> 5 Juta" >> 5Juta </option>
                      </select>                 
                    </div>
              </div>
            </div>        
                <br>
                <div>
                  <button type="submit" class="btn btn-lg btn-primary btn-block">
                    <i class="fa fa-plus"></i>&nbsp;<span>Simpan</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection