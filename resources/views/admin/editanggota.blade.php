@extends('admin.app',[
  'activePage' => 'anggota', 
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
                  <h2 class="card-title"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit Data Anggota Keluarga
                    <div class="float-right">
                      <a href="/kartu-keluarga" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</a>
                    </div>
                  </h2><hr>
                <form role="form" action="/kartu-keluarga/anggota/update/{{$anggota->id}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">No KK</label>
                    <input class="form-control" type="text"  name="id_nomorkk" placeholder="Masukan Nama Kepala Keluarga ... " value="{{$anggota->id_nomorkk}}" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Nama Kepala Keluaga</label>
                    <input class="form-control" type="text"  name="nama_kk" placeholder="Masukan Nama Kepala Keluarga ... " value="{{$anggota->nama_kk}}" >
                  </div>
                </div>  
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Alamat</label>
                      <textarea class="form-control" type="text" placeholder="Masukan Alamat..." name="alamat" id="alamat" >{{$anggota->alamat}}</textarea>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">RT/RW</label>
                    <input class="form-control" type="text" value="{{$anggota->rtrw}}" placeholder="Masukan RT/RW" name="rtrw">
                  </div>
                </div>
                <div class="col-md-6"> 
                <div class="form-group">
                  <label for="example-search-input" class="form-control-label">Kode Pos</label>
                     <select class="form-control form-control"    name="kodepos">
                        <option value="">-- Pilih Kode Pos--</option>
                        <option>#Padang Panjang Timur#</option>
                        <option value="27125" @if ($anggota->kodepos =='27125') selected @endif >27125</option>
                        <option value="27127" @if ($anggota->kodepos =='27127') selected @endif >27127</option>
                        <option value="27123" @if ($anggota->kodepos =='27123') selected @endif>27123</option>
                        <option value="27128" @if ($anggota->kodepos =='27128') selected @endif >27128</option>
                        <option value="27122" @if ($anggota->kodepos =='27122') selected @endif>27122</option>
                        <option value="27124" @if ($anggota->kodepos =='27124') selected @endif >27124</option>
                        <option value="27126" @if ($anggota->kodepos =='27126') selected @endif>27126</option>
                        <option value="27121" @if ($anggota->kodepos =='27121') selected @endif  >27121</option>
                        <option>#Padang Panjang Barat#</option>
                        <option value="27114" @if ($anggota->kodepos =='27114') selected @endif >27114</option>
                        <option value="27115" @if ($anggota->kodepos =='27115') selected @endif>27115</option>
                        <option value="27111" @if ($anggota->kodepos =='27111') selected @endif >27111</option>
                        <option value="27113" @if ($anggota->kodepos =='27113') selected @endif>27113</option>
                        <option value="27116" @if ($anggota->kodepos =='27116') selected @endif >27116</option>
                        <option value="27117" @if ($anggota->kodepos =='27117') selected @endif>27117</option>
                        <option value="27118" @if ($anggota->kodepos =='27118') selected @endif >27118</option>
                        <option value="27112" @if ($anggota->kodepos =='27112') selected @endif>27112</option>
                      </select>
                  </div>
              </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama Lengkap Sesuai KK</label>
                    <input class="form-control" autofocus="" type="text" value="{{$anggota->nama}}"  placeholder=" Nama Lengkap (Sesuai KK) ..." name="nama"  >
                </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">NIK</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="nik"  value="{{$anggota->nik}}" placeholder="Masukkan NIK" id="nik" placeholder="Masukkan NIK" >
                    </div>
                  </div>
                </div>
              <div class="col-md-4">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Jenis  Kelamin</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio1"  name="jenis_kelamin" class="custom-control-input" value="Laki-Laki" @if ($anggota->jenis_kelamin =='Laki-Laki') checked @endif>
                  <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio2"  name="jenis_kelamin" class="custom-control-input" value="Perempuan" @if ($anggota->jenis_kelamin =='Perempuan') checked @endif>
                  <label class="custom-control-label"  for="customRadio2" >Perempuan</label>
                </div>  
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Tempat lahir</label>
                    <input class="form-control" type="text" value="{{$anggota->tempat_lahir}}"  placeholder="Tempat Lahir..." name="tempat_lahir" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Tanggal lahir</label>
                    <input class="form-control" type="date" value="{{$anggota->tgl_lahir}}"  placeholder="Tanggal Lahit..." name="tgl_lahir" >
                </div>
              </div>
             <div class="col-md-6">
               <div class="form-group">
                                <label for="example-email-input" class="form-control-label">Agama</label><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline3" value="Islam" name="agama_anggota" class="custom-control-input" @if ($anggota->agama_anggota =='Islam') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline3">Islam</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline4" value="Kristen" name="agama_anggota" class="custom-control-input" @if ($anggota->agama_anggota =='Kristen') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline4">Kristen</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline5" value="khatolik" name="agama_anggota" class="custom-control-input" @if ($anggota->agama_anggota =='Khatolik') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline5">khatolik</label>
                                </div><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline6" value="Hindu" name="agama_anggota" class="custom-control-input" @if ($anggota->agama_anggota =='Hindu') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline6">Hindu</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline7" value="Budha" name="agama_anggota" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline7" @if ($anggota->agama_anggota =='Budha') checked @endif>Budha</label>
                                </div><br>
                                <div class="custom-control custom-radio custom-control-inline" >
                                  <input type="radio" id="customRadioInline8" value="Khonghucu" name="agama_anggota" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline8" @if ($anggota->agama_anggota =='Khonghucu') checked @endif>Khonghucu</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline" >
                                  <input type="radio" id="customRadioInline9" value="Kepercayaan Terhadap Tuhan Yang Maha Esa" name="agama_anggota" class="custom-control-input" @if ($anggota->agama_anggota =='Kepercayaan Terhadap Tuhan Yang Maha Esa') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline9">Kepercayaan Terhadap Tuhan Yang Maha Esa</label>
                                </div>
                          </div>
                      </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Pendidikan</label>
                     <select class="form-control form-control" name="pendidikan">
                        <option value="">--- Pilih Pendidikan ---</option>
                        <option value="TIDAK / BELUM SEKOLAH" @if ($anggota->pendidikan =='TIDAK / BELUM SEKOLAH') selected @endif >TIDAK / BELUM SEKOLAH</option>
                        <option value=" TAMAT SD / SEDERAJAT" @if ($anggota->pendidikan =='TAMAT SD / SEDERAJAT') selected @endif> TAMAT SD / SEDERAJAT</option>
                        <option value=" SLTP/SEDERAJAT"  @if ($anggota->pendidikan =='SLTP/SEDERAJAT') selected @endif>  SLTP/SEDERAJAT</option>
                        <option value="SLTA / SEDERAJAT"  @if ($anggota->pendidikan =='SLTA / SEDERAJAT') selected @endif>SLTA / SEDERAJAT</option>
                        <option value="BELUM TAMAT SD/SEDERAJAT" @if ($anggota->pendidikan =='BELUM TAMAT SD/SEDERAJAT') selected @endif >BELUM TAMAT SD/SEDERAJAT</option>
                        <option value="DIPLOMA IV/ STRATA I" @if ($anggota->pendidikan =='DIPLOMA IV/ STRATA I') selected @endif>DIPLOMA IV/ STRATA I</option>
                        <option value="AKADEMI/ DIPLOMA III/S. MUDA" @if ($anggota->pendidikan =='AKADEMI/ DIPLOMA III/S. MUDA') selected @endif >AKADEMI/ DIPLOMA III/S. MUDA</option>
                        <option value="DIPLOMA I / II" @if ($anggota->pendidikan =='DIPLOMA I / II') selected @endif >DIPLOMA I / II</option>
                        <option value="STRATA III" @if ($anggota->pendidikan =='STRATA III') selected @endif >STRATA III</option>
                        <option value=" STRATA II" @if ($anggota->pendidikan =='STRATA II"') selected @endif>  STRATA II</option>
                      </select>                 
                    </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                            <label for="example-search-input" class="form-control-label">Jenis Pekerjaan *</label>
                            <select class="form-control form-control" name="jenis_pekerjaan">
                                  <option value="Belum / Tidak Bekerja" @if ($anggota->jenis_pekerjaan =='Belum / Tidak Bekerja') selected @endif>Belum / Tidak Bekerja</option>
                                  <option value="Mengurus Rumah Tangga" @if ($anggota->jenis_pekerjaan =='Mengurus Rumah Tangga') selected @endif>Mengurus Rumah Tangga</option>
                                  <option value="Pelajar / Mahasiswa" @if ($anggota->jenis_pekerjaan =='Pelajar / Mahasiswa') selected @endif>Pelajar / Mahasiswa</option>
                                  <option value="Pensiunan" @if ($anggota->jenis_pekerjaan =='Pensiunan') selected @endif>Pensiunan</option>
                                  <option value="Pegawai Negeri Sipil (PNS)" @if ($anggota->jenis_pekerjaan =='Pegawai Negeri Sipil (PNS)') selected @endif >Pegawai Negeri Sipil (PNS)</option>
                                  <option value="Tentara Nasional Indonesia (TNI)" @if ($anggota->jenis_pekerjaan =='Tentara Nasional Indonesia (TNI)') selected @endif>Tentara Nasional Indonesia (TNI)</option>
                                  <option value="Kepolisian RI (POLRI)" @if ($anggota->jenis_pekerjaan =='Kepolisian RI (POLRI)') selected @endif>Kepolisian RI (POLRI)</option>
                                  <option value="Perdagangan" @if ($anggota->jenis_pekerjaan =='Perdagangan') selected @endif>Perdagangan</option>
                                  <option value="Petani / Pekebun" @if ($anggota->jenis_pekerjaan =='Petani / Pekebun') selected @endif>Petani / Pekebun</option>
                                  <option value="Peternak" @if ($anggota->jenis_pekerjaan =='Peternak') selected @endif>Peternak</option>
                                  <option value="Nelayan / Perikanan" @if ($anggota->jenis_pekerjaan =='Nelayan / Perikanan') selected @endif>Nelayan / Perikanan</option>
                                  <option value="Industri" @if ($anggota->jenis_pekerjaan =='Industri') selected @endif>Industri</option>
                                  <option value="Konstruksi" @if ($anggota->jenis_pekerjaan =='Konstruksi') selected @endif>Konstruksi</option>
                                  <option value="Transportasi" @if ($anggota->jenis_pekerjaan =='Transportasi') selected @endif>Transportasi</option>
                                  <option value="Karyawan Swasta" @if ($anggota->jenis_pekerjaan =='Karyawan Swasta') selected @endif>Karyawan Swasta</option>
                                  <option value="Karyawan BUMN" @if ($anggota->jenis_pekerjaan =='Karyawan BUMN') selected @endif>Karyawan BUMN</option>
                                  <option value="Karyawan BUMD" @if ($anggota->jenis_pekerjaan =='Karyawan BUMD ') selected @endif>Karyawan BUMD</option>
                                  <option value="Karyawan Honorer" @if ($anggota->jenis_pekerjaan =='Karyawan Honorer') selected @endif>Karyawan Honorer</option>
                                  <option value="Buruh Harian Lepas" @if ($anggota->jenis_pekerjaan =='Buruh Harian Lepas') selected @endif>Buruh Harian Lepas</option>
                                  <option value="Buruh Tani / Perkebunan" @if ($anggota->jenis_pekerjaan =='Buruh Tani / Perkebunan') selected @endif>Buruh Tani / Perkebunan</option>
                                  <option value="Buruh Nelayan / Perikanan" @if ($anggota->jenis_pekerjaan =='Buruh Nelayan / Perikanan') selected @endif>Buruh Nelayan / Perikanan</option>
                                  <option value="Buruh Peternakan" @if ($anggota->jenis_pekerjaan =='Buruh Peternakan') selected @endif>Buruh Peternakan</option>
                                  <option value="Pembantu Rumah Tangga" @if ($anggota->jenis_pekerjaan =='Pembantu Rumah Tangga') selected @endif>Pembantu Rumah Tangga</option>
                                  <option value="Tukang Cukur" @if ($anggota->jenis_pekerjaan =='Tukang Cukur') selected @endif>Tukang Cukur</option>
                                  <option value="Tukang Listrik" @if ($anggota->jenis_pekerjaan =='Tukang Listrik') selected @endif>Tukang Listrik</option>
                                  <option value="Tukang Batu" @if ($anggota->jenis_pekerjaan =='Tukang Batu') selected @endif>Tukang Batu</option>
                                  <option value="Tukang Kayu"@if ($anggota->jenis_pekerjaan =='Tukang Kayu') selected @endif>Tukang Kayu</option>
                                  <option value="Tukang Sol Sepatu" @if ($anggota->jenis_pekerjaan =='Tukang Sol Sepatu') selected @endif>Tukang Sol Sepatu</option>
                                  <option value="Tukang Las / Pandai Besi" @if ($anggota->jenis_pekerjaan =='Tukang Las / Pandai Besi') selected @endif>Tukang Las / Pandai Besi</option>
                                  <option value="Tukang Jahit" @if ($anggota->jenis_pekerjaan =='Tukang Jahit') selected @endif>Tukang Jahit</option>
                                  <option value="Tukang Gigi" @if ($anggota->jenis_pekerjaan =='Tukang Gigi') selected @endif>Tukang Gigi</option>
                                  <option value="Penata Rias" @if ($anggota->jenis_pekerjaan =='Penata Rias') selected @endif>Penata Rias</option>
                                  <option value="Penata Busana" @if ($anggota->jenis_pekerjaan =='Penata Busana') selected @endif>Penata Busana</option>
                                  <option value="Penata Rambut" @if ($anggota->jenis_pekerjaan =='Penata Rambut') selected @endif>Penata Rambut</option>
                                  <option value="Mekanik" @if ($anggota->jenis_pekerjaan =='Mekanik') selected @endif>Mekanik</option>
                                  <option value="Seniman" @if ($anggota->jenis_pekerjaan =='Seniman') selected @endif>Seniman</option>
                                  <option value="Tabib" @if ($anggota->jenis_pekerjaan =='Tabib') selected @endif>Tabib</option>
                                  <option value="Paraji" @if ($anggota->jenis_pekerjaan =='Paraji') selected @endif>Paraji</option>
                                  <option value="Perancang Busana" @if ($anggota->jenis_pekerjaan =='Perancang Busana') selected @endif>Perancang Busana</option>
                                  <option value="Penterjemah" @if ($anggota->jenis_pekerjaan =='Penterjemah') selected @endif>Penterjemah</option>
                                  <option value="Imam Mesjid" @if ($anggota->jenis_pekerjaan =='Imam Masjid') selected @endif>Imam Mesjid</option>
                                  <option value="Pendeta" @if ($anggota->jenis_pekerjaan =='Pendeta') selected @endif>Pendeta</option>
                                  <option value="Pastor" @if ($anggota->jenis_pekerjaan =='Pastor') selected @endif>Pastor</option>
                                  <option value="Wartawan" @if ($anggota->jenis_pekerjaan =='Wartawan') selected @endif>Wartawan</option>
                                  <option value="Ustadz / Mubaligh" @if ($anggota->jenis_pekerjaan =='Ustadz / Mubaligh') selected @endif>Ustadz / Mubaligh</option>
                                  <option value="Juru Masak" @if ($anggota->jenis_pekerjaan =='Juru Masak') selected @endif>Juru Masak</option>
                                  <option value="Promotor Acara" @if ($anggota->jenis_pekerjaan =='Promotor Acara') selected @endif>Promotor Acara</option>
                                  <option value="Anggota DPR RI " @if ($anggota->jenis_pekerjaan =='Anggota DPR RI') selected @endif>Anggota DPR RI </option>
                                  <option value="Anggota DPD" @if ($anggota->jenis_pekerjaan =='Anggota DPD') selected @endif>Anggota DPD</option>
                                  <option value="Anggota BPK" @if ($anggota->jenis_pekerjaan =='Anggota BPK') selected @endif>Anggota BPK</option>
                                  <option value="Presiden" @if ($anggota->jenis_pekerjaan =='Presiden') selected @endif>Presiden</option>
                                  <option value="Wakil Presiden" @if ($anggota->jenis_pekerjaan =='Wakil Presiden') selected @endif>Wakil Presiden</option>
                                  <option value="Anggota Mahkamah Konstitusi" @if ($anggota->jenis_pekerjaan =='Anggota Mahkamah Konstitusi') selected @endif>Anggota Mahkamah Konstitusi</option>
                                  <option value="Anggota Kabinet / Kementrian" @if ($anggota->jenis_pekerjaan =='Anggota Kabinet / Kementrian') selected @endif>Anggota Kabinet / Kementrian</option>
                                  <option value="Duta Besar" @if ($anggota->jenis_pekerjaan =='Duta Besar') selected @endif>Duta Besar</option>
                                  <option value="Gubernur" @if ($anggota->jenis_pekerjaan =='Gubernur') selected @endif>Gubernur</option>
                                  <option value="Wakil Gubernur" @if ($anggota->jenis_pekerjaan =='Wakil Gubernur') selected @endif>Wakil Gubernur</option>
                                  <option value="Bupati" @if ($anggota->jenis_pekerjaan =='Bupati') selected @endif>Bupati</option>
                                  <option value="Wakil Bupati" @if ($anggota->jenis_pekerjaan =='Wakil Bupati') selected @endif>Wakil Bupati</option>
                                  <option value="Walikota" @if ($anggota->jenis_pekerjaan =='Walikota') selected @endif>Walikota</option>
                                  <option value="Wakil Walikota" @if ($anggota->jenis_pekerjaan =='Wakil Walikota') selected @endif>Wakil Walikota</option>
                                  <option value="Anggota DPRD Prop" @if ($anggota->jenis_pekerjaan =='Anggota DPRD Prop') selected @endif>Anggota DPRD Prop</option>
                                  <option value="Anggota DPRD Kap / Kota" @if ($anggota->jenis_pekerjaan =='Anggota DPRD Kap / Kota') selected @endif>Anggota DPRD Kap / Kota</option>
                                  <option value="Dosen" @if ($anggota->jenis_pekerjaan =='Dosen') selected @endif>Dosen</option>
                                  <option value="Guru" @if ($anggota->jenis_pekerjaan =='Guru') selected @endif>Guru</option>
                                  <option value="Pilot" @if ($anggota->jenis_pekerjaan =='Pilot') selected @endif>Pilot</option>
                                  <option value="Pengacara" @if ($anggota->jenis_pekerjaan =='Pengacara') selected @endif>Pengacara</option>
                                  <option value="Notaris" @if ($anggota->jenis_pekerjaan =='Notaris') selected @endif>Notaris</option>
                                  <option value="Arsitek" @if ($anggota->jenis_pekerjaan =='Arsitek') selected @endif>Arsitek</option>
                                  <option value="Akuntan"@if ($anggota->jenis_pekerjaan =='Akuntan') selected @endif>Akuntan</option>
                                  <option value="Konsultan" @if ($anggota->jenis_pekerjaan =='Konsultan') selected @endif>Konsultan</option>
                                  <option value="Dokter" @if ($anggota->jenis_pekerjaan =='Dokter') selected @endif>Dokter</option>
                                  <option value="Bidan" @if ($anggota->jenis_pekerjaan =='Bidan') selected @endif>Bidan</option>
                                  <option value="Perawat" @if ($anggota->jenis_pekerjaan =='Perawat') selected @endif>Perawat</option>
                                  <option value="Apoteker" @if ($anggota->jenis_pekerjaan =='Apoteker') selected @endif>Apoteker</option>
                                  <option value="Psikiater / Psikolog" @if ($anggota->jenis_pekerjaan =='Psikiater / Psikolog') selected @endif>Psikiater / Psikolog</option>
                                  <option value="Penyiar Televisi" @if ($anggota->jenis_pekerjaan =='Penyiar televisi') selected @endif>Penyiar Televisi</option>
                                  <option value="Penyiar Radio" @if ($anggota->jenis_pekerjaan =='penyiar Radio') selected @endif>Penyiar Radio</option>
                                  <option value="Pelaut" @if ($anggota->jenis_pekerjaan =='Pelaut') selected @endif>Pelaut</option>
                                  <option value="Peneliti" @if ($anggota->jenis_pekerjaan =='Peneliti') selected @endif>Peneliti</option>
                                  <option value="Sopir" @if ($anggota->jenis_pekerjaan =='Sopir') selected @endif>Sopir</option>
                                  <option value="Pialang" @if ($anggota->jenis_pekerjaan =='Pialang') selected @endif>Pialang</option>
                                  <option value="Paranormal" @if ($anggota->jenis_pekerjaan =='Paranormal') selected @endif>Paranormal</option>
                                  <option value="Pedagang" @if ($anggota->jenis_pekerjaan =='pedagang') selected @endif>Pedagang</option>
                                  <option value="Perangkat Desa" @if ($anggota->jenis_pekerjaan =='Perangakat Desa') selected @endif>Perangkat Desa</option>
                                  <option value="Kepala Desa" @if ($anggota->jenis_pekerjaan =='Kepala Desa') selected @endif>Kepala Desa</option>
                                  <option value="Biarawati" @if ($anggota->jenis_pekerjaan =='Biarawati') selected @endif>Biarawati</option>
                                  <option value="Wiraswasta" @if ($anggota->jenis_pekerjaan =='Wiraswasta') selected @endif>Wiraswasta</option>
                                  <option value="Lainnya" @if ($anggota->jenis_pekerjaan =='Lainnya') selected @endif>Lainnya</option>
                                  
                            </select>
                          </div>
                    </div>
                  <div class="col-md-6">
              <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Detail Jenis Pekerjaan</label>
                    <textarea class="form-control" type="text" rows="" placeholder="Masukan Detail Jenis Pekerjaan" name="detail_pekerjaan" >{{$anggota->detail_pekerjaan}}</textarea>
                </div>
              </div>
               <div class="col-md-3"> 
                <div class="form-group">
                  <label for="example-search-input" class="form-control-label">Golongan Darah</label>
                     <select class="form-control form-control" name="gol_darah">
                        <option value="">-- Golongan Darah--</option>
                        <option value="A"  @if ($anggota->gol_darah =='A') selected @endif>A</option>
                        <option value="B"  @if ($anggota->gol_darah =='B') selected @endif >B</option>
                        <option value="O" @if ($anggota->gol_darah =='O') selected @endif >O</option>
                        <option value="AB" @if ($anggota->gol_darah =='AB') selected @endif >AB</option>
                        <option value="A+"  @if ($anggota->gol_darah =='A+') selected @endif >A+</option>
                        <option value="A-"  @if ($anggota->gol_darah =='A-') selected @endif  >A-</option>
                        <option value="B+"  @if ($anggota->gol_darah =='B+') selected @endif>B+</option>
                        <option value="B-" @if ($anggota->gol_darah =='B-') selected @endif  >B-</option>
                        <option value="AB+"  @if ($anggota->gol_darah =='AB+') selected @endif>AB+</option>
                        <option value="AB-"  @if ($anggota->gol_darah =='AB-') selected @endif>AB-</option>
                        <option value="O="  @if ($anggota->gol_darah =='O+') selected @endif >O=</option>
                        <option value="O-" @if ($anggota->gol_darah =='O-') selected @endif >O-</option>
                        <option value="Tidak Tahu"  @if ($anggota->gol_darah =='Tidak Tahu') selected @endif >Tidak Tahu</option>
                        <option value="Tidak Tahu"  >Tidak Tahu</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-5">
               <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Status Perkawinan</label>
                     <select class="form-control form-control"  name="status_kawin">
                        <option value="Belum Kawin"  @if ($anggota->status_kawin =='Kawin') selected @endif >Belum Kawin</option>
                        <option value="Kawin"  @if ($anggota->status_kawin =='Kawin') selected @endif  >Kawin</option>
                        <option value="Cerai Hidup"  @if ($anggota->status_kawin =='Cerai Hidup') selected @endif  >Cerai Hidup</option>
                        <option value="Cerai Mati"  @if ($anggota->status_kawin =='Cerai Mati') selected @endif >Cerai Mati</option>   
                      </select>  
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Tanggal Perkawinan</label>
                    <input class="form-control" type="text" placeholder="Masukan Tanggal Perkawinan" value="{{$anggota->tgl_kawin}}" name="tgl_kawin">
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Status Hub Dalam Keluarga</label>
                     <select class="form-control form-control" name="status_hub_keluarga">
                        <option value="">-- Pilih Status Hubungan Dalam Keluarga --</option>
                        <option value="Kepala Keluarga" @if ($anggota->status_hub_keluarga =='Kepala Keluarga') selected @endif  >Kepala Keluarga</option>
                        <option value="Suami" @if ($anggota->status_hub_keluarga =='Suami') selected @endif  >Suami</option>
                        <option value="Istri" @if ($anggota->status_hub_keluarga =='Istri') selected @endif  >Istri</option>
                        <option value="Anak" @if ($anggota->status_hub_keluarga =='Anak') selected @endif  >Anak</option>
                        <option value="Menantu" @if ($anggota->status_hub_keluarga =='Menantu') selected @endif   >Menantu</option>
                        <option value="Cucu" @if ($anggota->status_hub_keluarga =='Cucu') selected @endif  >Cucu</option>
                        <option value="Orang Tua" @if ($anggota->status_hub_keluarga =='Orang Tua') selected @endif  >Orang Tua</option>
                        <option value="Mertua" @if ($anggota->status_hub_keluarga =='Mertua') selected @endif  >Mertua</option>
                        <option value="Familiy Lain" @if ($anggota->status_hub_keluarga =='Familiy Lain') selected @endif  >Familiy Lain</option>
                        <option value="Pembantu" @if ($anggota->status_hub_keluarga =='Pembantu') selected @endif  >Pembantu</option>
                        <option value="Lainnya" @if ($anggota->status_hub_keluarga =='Lainnya') selected @endif >Lainnya</option>
                      </select>                 
                    </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Detail Status Hub Keluarga</label>
                    <textarea class="form-control" type="text" rows="" placeholder="Masukan Detail Status Hubungan Keluarga" name="detail_hub_keluarga" >{{$anggota->detail_hub_keluarga}}</textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-password-input" class="form-control-label">Kewarganegaraan</label>
                      <select class="form-control form-control" name="kwn">
                        <option value="">-- Pilih Kewarganegaraan--</option>
                        <option value="WNI" @if ($anggota->kwn =='WNI') selected @endif>WNI</option>
                        <option value="WNA"@if ($anggota->kwn =='WNA') selected @endif>WNA</option>
                        
                      </select>               
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">No. Pasport</label>
                    <input class="form-control" type="text" value="{{$anggota->no_pasport}}"  placeholder="Masukan No. Pasport ... " name="no_pasport" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">No. Kitap</label>
                    <input class="form-control" type="text" value="{{$anggota->no_kitap}}"  placeholder="Masukan No. Kitap ... " name="no_kitap" >
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="example-email-input" class="form-control-label">Nama Ayah</label>
                      <input class="form-control" type="text" value="{{$anggota->nama_ayah}}"  placeholder="Status Ayah   ..." name="nama_ayah" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="example-email-input" class="form-control-label">Nama Ibu</label>
                      <input class="form-control" type="text" value="{{$anggota->nama_ibu}}"  placeholder="Nama Ibu ..." name="nama_ibu" >
                  </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label"> Domisili Di Padang Panjang</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio10"  name="domisili" class="custom-control-input" value="Ya" @if ($anggota->domisili =='Ya') checked @endif>
                  <label class="custom-control-label" for="customRadio10">Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio11"  name="domisili" class="custom-control-input" value="Tidak" @if ($anggota->domisili =='Tidak') checked @endif>
                  <label class="custom-control-label"  for="customRadio11" >Tidak</label>
                </div>  
                  </div>
                </div>
                <div class="col-md-5">
              <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Penghasilan / Bulan</label>
                     <select class="form-control form-control"  name="gaji">
                        <option value=" < Rp500.000" @if ($anggota->gaji ==' < Rp500.00') selected @endif> < Rp500.000</option>
                        <option value="Rp 500.000 - Rp 1500.000" @if ($anggota->gaji =='Rp 500.000 - Rp 1500.000') selected @endif >Rp 500.000 - Rp 1500.000</option>
                        <option value="Rp 1500.000 - Rp 2500.000" @if ($anggota->gaji =='Rp 1500.000 - Rp 2500.000') selected @endif >Rp 1500.000 - Rp 2500.000</option>
                        <option value="Rp 2500.000 - Rp 3500.000" @if ($anggota->gaji =='Rp 2500.000 - Rp 3500.000') selected @endif >Rp 2500.000 - Rp 3500.000</option>
                        <option value="Rp 3500.000 - Rp 4500.000" @if ($anggota->gaji =='Rp 3500.000 - Rp 4500.000') selected @endif >Rp 3500.000 - Rp 4500.000</option>
                        <option value="> Rp 4500.000" @if ($anggota->gaji =='> Rp 4500.000') selected @endif >> Rp 4500.000</option>                        
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
                    <input class="form-control" type="file" onchange="loadFile(event)" class="form-control-file" required="" placeholder="Masukan No. Pasport ... " required name="foto_profile" >
                    <img src="{{url('public/warga')}}/{{ $anggota->foto_profile}}" id="output" class="gambar" alt="" style="max-height:100px;max-width:150px;margin-top:10px" >
                </div>
              </div>
            </div>        
                <br>
                <div>
                  <button type="submit" class="btn btn-lg btn-success btn-block">
                    <i class="fa fa-edit"></i>&nbsp;<span>Update</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection