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
                <form role="form" action="/data-warga/create" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                
              <div class="row">
                  <div class="col-md-6">
                 <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Penghayatan dan Pengamalan Pancasila</label> 
                  <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio1" name="penghayatan" class="custom-control-input" value="Ya">
                  <label class="custom-control-label" for="customRadio1" >Ya</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                  <input type="radio" id="customRadio2" name="penghayatan" class="custom-control-input" value="Tidak">
                  <label class="custom-control-label"  for="customRadio2" >Tidak</label>
                </div>  
                  </div>
                </div>
                  <div class="col-md-6">
                <div class="form-group mb-3" id="form-input5" >
                    <label for="example-text-input" class="form-control-label">Keterangan</label>
                    <input class="form-control" type="text" required="" placeholder="Jenis Kegiatan Yang Diikuti" name="ket_penghayatan"  >
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