@extends('admin.app',[
  'activePage' => 'warga', 
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
                  <h2 class="card-title"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Tambah Data Warga
                    <div class="float-right">
                      <a href="/data-warga" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</a>
                    </div>
                  </h2><hr>
                <form role="form" action="/data-warga/create" method="POST" enctype="multipart/form-data"  id="kk_form">
                          {{ csrf_field() }}
              @foreach($hasil as $data)
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Dasawisma</label>
                    <input class="form-control" type="text" autofocus="" required="" name="dasawisma" placeholder="Dasawisma ">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Nama Kepala Keluarga</label>
                    <input class="form-control" type="text" required="" name="nama_kk" placeholder="Nama Kepala Keluarga ">
                  </div>
                </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">NIK</label>
                    <div class="form-group">
                      <input class="form-control" type="hidden" name="nik" id="nik"  value="{{$data['NIK']}}">
                      <input type="text" class="form-control" disabled="disabled" value="{{$data['NIK']}}">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="example-text-input" class="form-control-label">Nama</label>
                    <input class="form-control" type="hidden" name="nama" id="nama"  value="{{$data['NAMA_LGKP']}}">
                    <input class="form-control" type="text" disabled="disabled"  value="{{$data['NAMA_LGKP']}}">                </div>
                </div>
                  <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="example-text-input" class="form-control-label">Jabatan</label>
                    <input class="form-control" autofocus="" type="text" required="" placeholder=" Jabatan " name="jabatan"  >
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                    <input class="form-control" autofocus="" disabled="disabled" type="text"  value="{{$data['JENIS_KLMIN']}}"   >
                </div>
              </div>
               <div class="col-md-5">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Tempat lahir</label>
                    <input class="form-control" type="text" disabled="disabled"  value="{{$data['TMPT_LHR']}}"  >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Tanggal lahir</label>
                    <input class="form-control" type="date" disabled="disabled"   value="{{$data['TGL_LHR']}}"  >
                </div> 
              </div>
              <div class="col-md-3  ">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Umur</label>
                    <input class="form-control" type="text"  placeholder="Umur" name="umur" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Status Perkawinan</label>
                    <input class="form-control" type="text" disabled="disabled"  value="{{$data['STATUS_KAWIN']}}"  >
                </div>
              </div>
               <div class="col-md-4">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Status Hub Dalam Keluarga</label>
                    <input class="form-control" type="text" disabled="disabled"  value="{{$data['STAT_HBKEL']}}"   >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Agama</label>
                    <input class="form-control" type="text" disabled="disabled"  value="{{$data['AGAMA']}}"  >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Alamat</label>
                      <input class="form-control" type="text" disabled="disabled" value="{{$data['ALAMAT']}}">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Desa/Kel</label>
                    <input class="form-control" type="text" disabled="disabled" value="{{$data['KEL_NAME']}}" >
                </div>
              </div>
                <div class="col-md-3">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Kecamatan</label>
                    <input class="form-control" type="text" disabled="disabled" value="{{$data['KEC_NAME']}}"  >
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Kab/ Kota</label>
                    <input class="form-control" type="text" disabled="disabled"  value="{{$data['KAB_NAME']}}"   >
                </div>
              </div>
                <div class="col-md-3">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Prov</label>
                    <input class="form-control" type="text" disabled="disabled"  value="{{$data['PROP_NAME']}}"  >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Pendidikan</label>
                    <input class="form-control" type="text" disabled="disabled"  value="{{$data['PDDK_AKH']}}"  >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Jenis Pekerjaan</label>
                    <input class="form-control" type="text" disabled="disabled"  value="{{$data['JENIS_PKRJN']}}"   >
                </div>
              </div>

              <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Akseptor KB</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio3" name="akseptor_kb" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio3">Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio4" name="akseptor_kb" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio4" >Tidak</label>
                </div>  
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="example-text-input" class="form-control-label">Jenis Akseptor </label>
                    <input class="form-control" type="text" required="" placeholder="Jenis Akseptor KB" name="jenis_akseptor"  >
                </div>
                </div>
                <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Aktif Dalam Kegiatan Posyandu</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio5" name="aktif_posyandu" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio5"  >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio6" name="aktif_posyandu" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio6" >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-3">
                <div class="form-group mb-3" id="form-input1" >
                    <label for="example-text-input" class="form-control-label">Frekuensi/Volume</label>
                    <input class="form-control" type="text" required="" placeholder="Frekuensi / Volume" name="volume"  >
                </div>
                </div>
                <div class="col-md-3">
                <div class="form-group mb-3" id="form-input2" >
                    <label for="example-text-input" class="form-control-label">Kali</label>
                    <input class="form-control" type="text" required="" placeholder="Kali" name="kali"  >
                </div>
                </div>
                <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Mengikuti Program Bina Keluarga Balita</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio7" name="program_bina" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio7" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio8" name="program_bina" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio8" >Tidak</label>
                </div>  
                  </div>
                </div>
                   <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Memiliki Tabungan</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio9" name="tabungan" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio9" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio10" name="tabungan" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio10">Tidak</label>
                </div>  
                  </div>
                </div>
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Mengikuti Kelompok Belajar</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio11" name="kelompok_belajar" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio11"  >Ya</label>
                </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" id="customRadio12" name="kelompok_belajar" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio12"  >Tidak</label>
                </div>  
                  </div>
                </div>

               <div class="col-md-6">
                <div class="form-group" id="form-input3">
                    <label for="example-password-input" class="form-control-label">Jenis</label>
                      <select class="form-control form-control" name="jenis_belajar">
                        <option value="">-- Pilih Jenis Kelompok Belajar--</option>
                        <option value="Paket A" >Paket A</option>
                        <option value="Paket B"  >Paket B</option>
                        <option value="Paket C" >Paket C</option>
                        <option value="Paket KF" >Paket KF</option>
                        
                      </select>               
                </div>
              </div>

                <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Mengikuti PAUD/Sejenis_belajar</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio13" name="paud" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio13" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio14" name="paud" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio14">Tidak</label>
                </div>  
                  </div>
                </div>
                <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Ikut Dalam Kegiatan Koperasi</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio15" name="koperasi" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio15" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio16" name="koperasi" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio16"  >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-6">
                <div class="form-group mb-3" id="form-input4" >
                    <label for="example-text-input" class="form-control-label">Jenis Koperasi</label>
                    <input class="form-control" type="text" required="" placeholder="Jenis Koperasi" name="jenis_koperasi"  >
                </div>
                </div>
                 <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Penghayatan dan Pengamalan Pancasila</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio1" name="penghayatan" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio1" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio2" name="penghayatan" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio2"  >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                <div class="form-group mb-3" id="form-input5" >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text" required="" placeholder="Jenis Kegiatan Yang Diikuti" rows="3" name="ket_penghayatan"  ></textarea>
                </div>
                </div>
                <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Kerja Bakti</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio17" name="kerja_bakti" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio17"  >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio18" name="kerja_bakti" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio18"  >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                <div class="form-group mb-3" id="form-input6" >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text" required="" placeholder="Jenis Kegiatan Yang Diikuti" rows="3" name="ket_kerja_bakti"  ></textarea>
                </div>
                </div>
                <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Rukun Kematian</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio19" name="rukun_kematian" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio19"  >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio20" name="rukun_kematian" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio20"  >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                <div class="form-group mb-3" id="form-input7" >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text" required="" placeholder="Jenis Kegiatan Yang Diikuti" rows="3" name="ket_rukun_kematian"  ></textarea>
                </div>
                </div>
                 <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Kegiatan Keagamaan</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio21" name="keagamaan" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio21" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio22" name="keagamaan" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio22" >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                <div class="form-group mb-3" id="form-input8" >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text" required="" placeholder="Jenis Kegiatan Yang Diikuti" rows="3" name="ket_keagamaan"  ></textarea>
                </div>
                </div>
                <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Jumpitan</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio23" name="jumpitan" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio23">Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio24" name="jumpitan" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio24" >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                <div class="form-group mb-3" id="form-input9" >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text" required="" placeholder="Jenis Kegiatan Yang Diikuti" rows="3" name="ket_jumpitan"  ></textarea>
                </div>
                </div>
                <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Arisan</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio25" name="arisan" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio25"  >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio26" name="arisan" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio26"  >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                <div class="form-group mb-3" id="form-input10" >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text" required="" placeholder="Jenis Kegiatan Yang Diikuti" rows="3" name="ket_arisan"  ></textarea>
                </div>
                </div>
                 <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Dan Lain-lain</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio27" name="dll" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio27">Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio28" name="dll" class= "custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio28"  >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                <div class="form-group mb-3" id="form-input11" >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text" required="" placeholder="Jenis Kegiatan Yang Diikuti" rows="3" name="ket_dll"  ></textarea>
                </div>
                </div>
            </div> 
            @endforeach               
               <br>
                <div>
                  <button type="submit" class="btn btn-lg btn-primary btn-block">
                    <i class="fa fa-plus" id="btn_kk"></i>&nbsp;<span>Simpan</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection