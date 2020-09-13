@extends('admin.app',[
  'activePage' => 'users', 
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
                  <h2 class="card-title"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Tambah Data Users
                        <div class="float-right">
                             <button onclick="goBack()" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</button>
                        </div>
                    </h2><hr>
                    <form role="form" action="/users/create" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                         
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                <input class="form-control" autofocus="" type="text" required="" placeholder="Masukan Nama  ...." name="name"  >
                            </div>
                            <div class="form-group">
                                <label for="example-search-input" class="form-control-label">Username</label>
                                <input class="form-control" type="text" required="" placeholder="Masukan username  .... " name="username" >
                            </div>
                            <div class="form-group">
                                <label for="example-search-input" class="form-control-label">Password</label>
                                <input class="form-control" type="password" required="" placeholder="Masukan Nama Password  .... " name="password" >
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label ">Level</label><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline1" required="" value="SuperAdmin" name="level" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline1">SuperAdmin</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline2" required="" value="Admin Camat" name="level" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline2">Admin Camat</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline3" required="" value="Admin Kelurahan Balai-Balai" name="level" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline3">Admin Kelurahan Balai-Balai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline5" required="" value="Admin Kelurahan Kampung Manggis" name="level" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline5">Admin Kelurahan Kampung Manggis</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline6" required="" value="Admin Kelurahan Tanah Hitam" name="level" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline6">Admin Kelurahan Tanah Hitam</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline7" required="" value="Admin Kelurahan Pasar Baru" name="level" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline7">Admin Kelurahan Pasar Baru</label>
                                </div> 
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline8" required="" value="Admin Kelurahan pasar Usang" name="level" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline8">Admin Kelurahan pasar Usang</label>
                                </div> 
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline9" required="" value="Admin Kelurahan Silaing Atas" name="level" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline9">Admin Kelurahan Silaing Atas</label>
                                </div>  
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline10" required="" value="Admin Kelurahan Silaing Bawah" name="level" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline10">Admin Kelurahan Silaing Bawah</label>
                                </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline11" required="" value="Admin Kelurahan Bukit Surungan" name="level" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline11">Admin Kelurahan Bukit Surungan</label>
                                </div>                        
                              </div>
                                        <br><div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                    <i class="fa fa-plus"></i>&nbsp;
                                    <span>Simpan</span>
                            </button>
                    </div>
                 </div>
            </div>
          </div>
        </div>


@endsection

