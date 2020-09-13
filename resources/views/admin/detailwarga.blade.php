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
                  <h2 class="card-title"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Detail Data Warga
                    <div class="float-right">
                      <a href="/data-warga" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</a>
                    </div>
                  </h2><hr>
                <form role="form" action="/data-warga/detail/{{$warga->id}}" method="POST" enctype="multipart/form-data"  id="kk_form">
                          {{ csrf_field() }}
              @foreach($hasil as $data)
                <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Dasawisma</label>
                    <input class="form-control" type="text" autofocus="" disabled="" required="" value="{{$warga->dasawisma}}" disabled="disabled" name="dasawisma" placeholder="Dasawisma ">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Nama Kepala Keluarga</label>
                    <input class="form-control" type="text" required="" disabled="" disabled="disabled" name="nama_kk" value="{{$warga->nama_kk}}" placeholder="Nama Kepala Keluarga ">
                  </div>
                </div>
               <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">NIK</label>
                    <div class="form-group">
                      <input class="form-control" type="hidden" name="nik" id="nik"  value="{{$data['NIK']}}">
                      <input type="text" class="form-control" disabled="disabled" value="{{$data['NIK']}}">
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                <div class="form-group mb-3">
                    <label for="example-text-input" class="form-control-label">Nama</label>
                    <input class="form-control" type="hidden" name="nama" id="nama"  value="{{$data['NAMA_LGKP']}}">
                    <input class="form-control" type="text" disabled="disabled"  value="{{$data['NAMA_LGKP']}}">                
                  </div>
                </div>
                <div class="col-md-2  ">
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Umur</label>
                    <input class="form-control" type="text"  placeholder="Umur" disabled="" value="{{$warga->umur}}" disabled="disabled" name="umur" >
                </div>
              </div>
                  <div class="col-md-5">
                <div class="form-group mb-3">
                    <label for="example-text-input" class="form-control-label">Jabatan</label>
                    <input class="form-control" autofocus="" type="text" disabled="" required="" placeholder="Jabatan " value="{{$warga->jabatan}}" disabled="disabled" name="jabatan"  >
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
                  <input type="radio" id="customRadio3" disabled="disabled" name="akseptor_kb" disabled="" class="custom-control-input" value="Ya" @if ($warga->akseptor_kb =='Ya') checked @endif >
                  <label class="custom-control-label" for="customRadio3" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio4" disabled="disabled" name="akseptor_kb" disabled="" class="custom-control-input" value="Tidak"  @if ($warga->akseptor_kb =='Tidak') checked @endif>
                  <label class="custom-control-label"  for="customRadio4">Tidak</label>
                </div>  
                  </div>
                </div>
                <div class="col-md-6">
                @if($warga->akseptor_kb == 'Ya')
                <div class="form-group mb-3"  >
                    <label for="example-text-input" class="form-control-label">Jenis Akseptor</label>
                    <input class="form-control" type="text" value="{{$warga->jenis_akseptor}}" disabled="" placeholder="Jenis Akseptor KB" disabled="disabled" name="jenis_akseptor"  >
                </div>
                @endif
                </div>
                <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Aktif Dalam Kegiatan Posyandu</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio5" disabled="disabled" name="aktif_posyandu"  disabled="" class="custom-control-input" value="Ya" @if ($warga->aktif_posyandu =='Ya') checked @endif >
                  <label class="custom-control-label" for="customRadio5" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio6" disabled="disabled" name="aktif_posyandu" disabled="" class="custom-control-input" value="Tidak" @if ($warga->aktif_posyandu =='Tidak') checked @endif>
                  <label class="custom-control-label"  for="customRadio6"  >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-3">
                @if($warga->aktif_posyandu == 'Ya')
                <div class="form-group mb-3" >
                    <label for="example-text-input" class="form-control-label">Frekuensi/Volume</label>
                    <input class="form-control" type="text" value="{{$warga->volume}}" disabled="" placeholder="Frekuensi / Volume" disabled="disabled" name="volume"  >
                </div>
                @endif
                </div>
                <div class="col-md-3">
                @if($warga->aktif_posyandu == 'Ya')
                <div class="form-group mb-3" >
                    <label for="example-text-input" class="form-control-label">Kali</label>
                    <input class="form-control" type="text"  value="{{$warga->kali}}" disabled="" placeholder="Kali" disabled="disabled" name="kali"  >
                </div>
                @endif
                </div>
                <div class="col-md-6">
                 <div class="form-group">
                   <label for="example-datetime-local-input"  class="form-control-label">Mengikuti Program Bina Keluarga Balita</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio7" disabled="disabled" name="program_bina" class="custom-control-input" value="Ya"  @if ($warga->program_bina =='Ya') checked @endif >
                  <label class="custom-control-label" for="customRadio7" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio8" disabled="disabled" name="program_bina" class="custom-control-input" value="Tidak" @if ($warga->program_bina =='Tidak') checked @endif>
                  <label class="custom-control-label"  for="customRadio8" >Tidak</label>
                </div> 
                  </div>
                </div>
                   <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Memiliki Tabungan</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio9" disabled="disabled" name="tabungan" class="custom-control-input" value="Ya"  @if ($warga->tabungan =='Ya') checked @endif >
                  <label class="custom-control-label" for="customRadio9" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio10" disabled="disabled" name="tabungan" class="custom-control-input" value="Tidak" @if ($warga->tabungan =='Tidak') checked @endif>
                  <label class="custom-control-label"  for="customRadio10"   >Tidak</label>
                </div>  
                  </div>
                </div>
                 <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Mengikuti Kelompok Belajar</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio11" disabled="disabled" name="kelompok_belajar" class="custom-control-input" value="Ya" @if ($warga->kelompok_belajar =='Ya') checked @endif >
                  <label class="custom-control-label" for="customRadio11"  >Ya</label>
                </div>
              <div class="custom-control custom-radio mb-3">
                <input type="radio" id="customRadio12" disabled="disabled" name="kelompok_belajar" class="custom-control-input" value="Tidak" @if ($warga->kelompok_belajar =='Tidak') checked @endif>
                  <label class="custom-control-label"  for="customRadio12"   >Tidak</label>
                </div>  
                  </div>
                </div>

               <div class="col-md-6">
               @if($warga->jenis_belajar == 'Paket A')
               @elseif ($warga->jenis_belajar == 'Paket B')
               @elseif ($warga->jenis_belajar == 'Paket C')
              @elseif ($warga->jenis_belajar == 'Paket KF')               
               <div class="form-group">
                    <label for="example-password-input" class="form-control-label">Jenis</label>
                      <select class="form-control form-control" disabled="disabled" name="jenis_belajar">
                        <option value="Paket A" @if ($warga->jenis_belajar =='Paket A') checked @endif >Paket A</option>
                        <option value="Paket B" @if ($warga->jenis_belajar =='Paket B') checked @endif >Paket B</option>
                        <option value="Paket C" @if ($warga->jenis_belajar =='Paket C') checked @endif >Paket C</option>
                        <option value="Paket KF" @if ($warga->jenis_belajar =='Paket KF') checked @endif >Paket KF</option>
                        
                      </select>               
                </div>
                @endif
              </div>
                <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Mengikuti PAUD/Sejenis_belajar</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio13" disabled="disabled" name="paud" class="custom-control-input" value="Ya" @if ($warga->paud =='Ya') checked @endif>
                  <label class="custom-control-label" for="customRadio13" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio14" disabled="disabled" name="paud" class="custom-control-input" value="Tidak" @if ($warga->paud =='Tidak') checked @endif>
                  <label class="custom-control-label"  for="customRadio14">Tidak</label>
                </div>  
                  </div>
                </div>
                <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Ikut Dalam Kegiatan Koperasi</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio15" disabled="disabled" name="koperasi" class="custom-control-input" value="Ya" @if ($warga->koperasi =='Ya') checked @endif>
                  <label class="custom-control-label" for="customRadio15"   >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio16" disabled="disabled" name="koperasi" class="custom-control-input" value="Tidak" @if ($warga->koperasi =='Tidak') checked @endif>
                  <label class="custom-control-label"  for="customRadio16"   >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-6">
                @if($warga->dll == 'koperasi')
                <div class="form-group mb-3" >
                    <label for="example-text-input" class="form-control-label">Jenis Koperasi</label>
                    <input class="form-control" type="text"  placeholder="Jenis Koperasi"  value="{{$warga->jenis_koperasi}}" disabled="disabled" name="jenis_koperasi"  >
                </div>
                @endif
                </div>
                 <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Penghayatan dan Pengamalan Pancasila</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio1" disabled="disabled" name="penghayatan" class="custom-control-input" value="Ya" @if ($warga->penghayatan =='Ya') checked @endif  >
                  <label class="custom-control-label" for="customRadio1" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio2" disabled="disabled" name="penghayatan" class="custom-control-input" value="Tidak"  @if ($warga->penghayatan =='Tidak') checked @endif>
                  <label class="custom-control-label"  for="customRadio2" >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                @if($warga->penghayatan == 'Ya')
                <div class="form-group mb-3" >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text" placeholder="Jenis Kegiatan Yang Diikuti" rows="3" disabled="disabled" name="ket_penghayatan"  >{{$warga->ket_penghayatan}}</textarea>
                </div>
                @endif
                </div>
                <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Kerja Bakti</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio17" disabled="disabled" name="kerja_bakti" class="custom-control-input" value="Ya" @if ($warga->kerja_bakti =='Ya') checked @endif>
                  <label class="custom-control-label" for="customRadio17"   >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio18" disabled="disabled" name="kerja_bakti" class="custom-control-input" value="Tidak" @if ($warga->kerja_bakti =='Tidak') checked @endif >
                  <label class="custom-control-label"  for="customRadio18"  >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                @if($warga->kerja_bakti == 'Ya')
                <div class="form-group mb-3"  >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text"  placeholder="Jenis Kegiatan Yang Diikuti" rows="3" disabled="disabled" name="ket_kerja_bakti"  >{{$warga->ket_kerja_bakti}}</textarea>
                </div>
                @endif
                </div>
                <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Rukun Kematian</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio19" disabled="disabled" name="rukun_kematian" class="custom-control-input" value="Ya" @if ($warga->rukun_kematian =='Ya') checked @endif>
                  <label class="custom-control-label" for="customRadio19"   >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio20" disabled="disabled" name="rukun_kematian" class="custom-control-input" value="Tidak" @if ($warga->rukun_kematian =='Tidak') checked @endif>
                  <label class="custom-control-label"  for="customRadio20"   >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                @if($warga->rukun_kematian == 'Ya')
                <div class="form-group mb-3" >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text"  placeholder="Jenis Kegiatan Yang Diikuti" rows="3" disabled="disabled" name="ket_rukun_kematian"  >{{$warga->ket_rukun_kematian}}</textarea>
                </div>
                @endif
                </div>
                 <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Kegiatan Keagamaan</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio21" disabled="disabled" name="keagamaan" class="custom-control-input" value="Ya" @if ($warga->keagamaan =='Ya') checked @endif>
                  <label class="custom-control-label" for="customRadio21"   >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio22" disabled="disabled" name="keagamaan" class="custom-control-input" value="Tidak" @if ($warga->keagamaan =='Tidak') checked @endif >
                  <label class="custom-control-label"  for="customRadio22"  >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                @if($warga->keagamaan == 'Ya')
                <div class="form-group mb-3" >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text"  placeholder="Jenis Kegiatan Yang Diikuti" rows="3" disabled="disabled" name="ket_keagamaan"  >{{$warga->ket_keagamaan}}</textarea>
                </div>
                @endif
                </div>
                <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Jumpitan</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio23" disabled="disabled" name="jumpitan" class="custom-control-input" value="Ya" @if ($warga->jumpitan =='Ya') checked @endif>
                  <label class="custom-control-label" for="customRadio23"   >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio24" disabled="disabled" name="jumpitan" class="custom-control-input" value="Tidak" @if ($warga->jumpitan =='Tidak') checked @endif >
                  <label class="custom-control-label"  for="customRadio24" >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                 @if($warga->jumpitan == 'Ya')
                <div class="form-group mb-3" >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text" placeholder="Jenis Kegiatan Yang Diikuti" rows="3" disabled="disabled" name="ket_jumpitan"  >{{$warga->ket_jumpitan}}</textarea>
                </div>
                @endif
                </div>
                <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Arisan</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio25" disabled="disabled" name="arisan" class="custom-control-input" value="Ya"  @if ($warga->arisan =='Ya') checked @endif >
                  <label class="custom-control-label" for="customRadio25" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio26" disabled="disabled" name="arisan" class="custom-control-input" value="Tidak" @if ($warga->arisan =='Tidak') checked @endif >
                  <label class="custom-control-label"  for="customRadio26"  >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                @if($warga->arisan == 'Ya')
                <div class="form-group mb-3">
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text" placeholder="Jenis Kegiatan Yang Diikuti" rows="3" disabled="disabled" name="ket_arisan"  >{{$warga->ket_arisan}}</textarea>
                </div>
                @endif
                </div>
                <div class="col-md-12">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Dan Lain-lain</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio27" disabled="disabled" name="dll" class="custom-control-input" value="Ya" @if ($warga->dll =='Ya') checked @endif>
                  <label class="custom-control-label" for="customRadio27">Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio28" disabled="disabled" name="dll" class= "custom-control-input" value="Tidak" @if ($warga->dll =='Tidak') checked @endif>
                  <label class="custom-control-label"  for="customRadio28"  >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-12">
                @if($warga->dll == 'Ya')
                <div class="form-group mb-3">
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <textarea class="form-control" type="text"  placeholder="Jenis Kegiatan Yang Diikuti" rows="3" disabled="disabled" name="ket_dll"  >{{$warga->ket_dll}}</textarea>
                </div>
                @endif
                </div>
            </div> 
            @endforeach
               <br>
              </form>
              </div>
            </div>
          </div>
        </div>

@endsection