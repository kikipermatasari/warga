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
                  <h2 class="card-title"><i class="fa fa-eye"></i>&nbsp;&nbsp;Detail Data Kepala Keluarga
                        <div class="float-right">
                             <a href="/kepala-keluarga" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</a>
                        </div>
                    </h2><hr>
                    <form role="form" action="/kepala-keluarga/detail/{{$kepala_keluarga->id}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
    						<div class="form-group">
        						<label for="example-text-input" class="form-control-label">Nomor KK</label>
        						<input class="form-control" type="text" disabled="disabled" value="{{$kepala_keluarga->nomor_kk}}" placeholder="Masukan Nomor KK ..." name="nomor_kk"  >
    						</div>
    						<div class="form-group">
        						<label for="example-search-input" class="form-control-label">Nama Kepala Keluarga</label>
        						<input class="form-control" type="text" disabled="disabled" value="{{$kepala_keluarga->nama_kk}}" placeholder="Masukan Nama Kepala Keluarga ... " name="nama_kk" >
    						</div>
    						<div class="form-group">
        						<label for="example-email-input" class="form-control-label">Alamat</label>
        						<input class="form-control" type="text" disabled="disabled" value="{{$kepala_keluarga->alamat}}" placeholder="Masukan Jalan ..." name="alamat" >
    						</div>
    						<div class="form-group">
        						<label for="example-url-input" class="form-control-label">RT / RW</label>
        						<input class="form-control" type="text" disabled="disabled" value="{{$kepala_keluarga->rtrw}}" placeholder="Masukan RT / RW ... " name="rtrw" >
    						</div>
    						<div class="form-group">
        						<label for="example-password-input" class="form-control-label">Kode Pos</label>
        						<input class="form-control" type="text" disabled="disabled" value="{{$kepala_keluarga->kode_pos}}" placeholder="Masukan Kode Pos ... " name="kode_pos" >
    						</div>
    						<div class="form-group">
        						<label for="example-number-input" class="form-control-label">Desa / Kelurahan</label>
        						<input class="form-control" type="text" disabled="disabled" value="{{$kepala_keluarga->kelurahan}}" placeholder="Masukan Desa/ Kelurahan ..." name="kelurahan" >
    						</div>
    						<div class="form-group">
        						<label for="example-datetime-local-input" class="form-control-label">Kecamatan</label>
        						<input class="form-control" type="text" disabled="disabled" value="{{$kepala_keluarga->kecamatan}}" placeholder="Masukan Kecamantan ... "  name="kecamatan" >
        					</div>
    						<div class="form-group">
        						<label for="example-number-input" class="form-control-label">Kabupaten / Kota</label>
        						<input class="form-control" type="text" disabled="disabled" value="{{$kepala_keluarga->kabupaten}}" placeholder="Masukan Kabupaten / Kota ..." name="kabupaten" >
    						</div>
    						<div class="form-group">
        						<label for="example-number-input" class="form-control-label">Provinsi</label>
        						<input class="form-control" type="text" disabled="disabled" value="{{$kepala_keluarga->provinsi}}" placeholder="Masukan Provinsi ... " name="provinsi" >
    						</div>				
             	       </div>
                    </div>
                </div>
            </div>

@endsection