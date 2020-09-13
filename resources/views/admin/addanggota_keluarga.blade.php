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
                  <h2 class="card-title"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Tambah Data Kartu Keluarga
                    <div class="float-right">
                      <a href="/kartu-keluarga/tambah" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</a>
                    </div>
                  </h2><hr>
                <form role="form" action="/kartu-keluarga/anggota/create" method="POST" enctype="multipart/form-data" id="kk_form">
                          {{ csrf_field() }}
              @foreach($hasil as $data)
              @if($data['STAT_HBKEL'] == "KEPALA KELUARGA")
              <script>
                alert("NIK ANDA TIDAK TERDAFTAR SEBAGAI ANGGOTA KELUARGA");
                window.history.back();
              </script>  
              @endif
              @if($data['KAB_NAME'] != "KOTA PADANG PANJANG")
              <script>
                alert("NIK ANDA TIDAK TERDAFTAR DI KOTA PADANG PANJANG");
                window.history.back();
              </script>  
              @endif
              <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">NIK</label>
                    <div class="form-group">
                      <input class="form-control" type="hidden" name="nik" id="nik"  value="{{$data['NIK']}}">
                      <input class="form-control" type="hidden" name="status_hub_kel" id="status_hub_kel" value="{{$data['STAT_HBKEL']}}" >
                      <input type="text" class="form-control" disabled="disabled" value="{{$data['NIK']}}">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                    <input class="form-control" type="hidden" name="nama" id="nama"  value="{{$data['NAMA_LGKP']}}">
                    <input class="form-control" type="text" disabled="disabled"  value="{{$data['NAMA_LGKP']}}">
                </div>
                </div>
               <div class="col-md-4">
                  <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nomor KK</label>
                      <input class="form-control" type="hidden" name="no_kk" id="no_kk" value="{{$data['NO_KK']}}">
                      <input class="form-control" type="text" disabled="disabled" value="{{$data['NO_KK']}}">
                  </div>
              </div>
            <div class="col-md-12">
                  <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Alamat</label>
                      <input class="form-control" type="text" disabled="disabled" value="{{$data['ALAMAT']}}">
                  </div>
              </div>
                
              <div class="col-md-2">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">RT/RW</label>
                    <input class="form-control" type="text" disabled="disabled" value="{{$data['NO_RT']}}">
                  </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">Desa/Keluarahan</label>
                    <input class="form-control" type="text" disabled="disabled" value="{{$data['KEL_NAME']}}" >
                  </div>
                </div>
                <div class="col-md-4"> 
    						<div class="form-group">
        						<label for="example-password-input" class="form-control-label">Kode Pos</label>
                    @if($data['KEL_NAME'] == "EKOR LUBUK")
                    <input class="form-control" type="hidden" required="" name="kode_pos">
                    <input class="form-control" type="text" disabled="disabled" value="27125" >
                    @elseif($data['KEL_NAME'] == "Ganting")
                    <input class="form-control" type="hidden" required="" name="kode_pos">
                    <input class="form-control" type="text" disabled="disabled" value="27127" >
                    @elseif($data['KEL_NAME'] == "KOTO KATIK")
                    <input class="form-control" type="hidden" required="" name="kode_pos">
                    <input class="form-control" type="text" disabled="disabled" value="27123" >
                    @elseif($data['KEL_NAME'] == "GUGUK MALINTANG")
                    <input class="form-control" type="hidden" required="" name="kode_pos">
                    <input class="form-control" type="text" disabled="disabled" value="27128" > 
                    @elseif($data['KEL_NAME'] == "KOTO PANJANG")
                    <input class="form-control" type="hidden" required="" name="kode_pos">
                    <input class="form-control" type="text" disabled="disabled" value="27122" >
                    @elseif($data['KEL_NAME'] == "NGALAU")
                    <input class="form-control" type="hidden" required="" name="kode_pos">
                    <input class="form-control" type="text" disabled="disabled" value="27124" > 
                    @elseif($data['KEL_NAME'] == "SIGANDO")
                    <input class="form-control" type="hidden" required="" name="kode_pos">
                    <input class="form-control" type="text" disabled="disabled" value="27126" >  
                    @elseif($data['KEL_NAME'] == "TANAH PAK LAMBIK")
                    <input class="form-control" type="hidden" required="" name="kode_pos">
                    <input class="form-control" type="text" disabled="disabled" value="27121" >                                      
                    @endif				
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-password-input" class="form-control-label">Kewarganegaraan</label>
                      <select class="form-control form-control" name="kwn">
                        <option value="">-- Pilih Kewarganegaraan--</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                        
                      </select>               
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">No. Pasport</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan No. Pasport ... " name="no_pasport" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">No. Kitap</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan No. Kitap ... " name="no_kitap" >
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
              </form>
              </div>
            </div>
          </div>
        </div>

@endsection