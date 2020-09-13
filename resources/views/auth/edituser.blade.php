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
                  <h2 class="card-title"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Edit Data Users
                        <div class="float-right">
                             <button onclick="goBack()" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</button>
                        </div>
                    </h2><hr>
                    <form role="form" action="/users/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                         
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                <input class="form-control" autofocus="" type="text" value="{{$user->name}}" placeholder="Masukan Nama  ...." name="name"  >
                            </div>
                            <div class="form-group">
                                <label for="example-search-input" class="form-control-label">Username</label>
                                <input class="form-control" type="text" value="{{$user->username}}" placeholder="Masukan username  .... " name="username" >
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label ">Level</label><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline1"  value="SuperAdmin" name="level" class="custom-control-input"@if ($user->level =='SuperAdmin') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline1" >SuperAdmin</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline2"  value="Admin Camat" name="level" class="custom-control-input"  @if ($user->level =='Admin Camat') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline2">Admin Camat</label>
                                </div>
                               <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline3" required="" value="Admin Kelurahan Balai-Balai" name="level" class="custom-control-input" @if ($user->level =='Admin Kelurahan Balai-Balai') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline3">Admin Kelurahan Balai-Balai</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline5" required="" value="Admin Kelurahan Kampung Manggis" name="level" class="custom-control-input" @if ($user->level =='Admin Kelurahan Kampung Manggis') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline5">Admin Kelurahan Kampung Manggis</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline6" required="" value="Admin Kelurahan Tanah Hitam" name="level" class="custom-control-input" @if ($user->level =='Admin Kelurahan Tanah Hitam') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline6">Admin Kelurahan Tanah Hitam</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline7" required="" value="Admin Kelurahan Pasar Baru" name="level" class="custom-control-input" @if ($user->level =='Admin Kelurahan Pasar Baru') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline7">Admin Kelurahan Pasar Baru</label>
                                </div> 
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline8" required="" value="Admin Kelurahan pasar Usang" name="level" class="custom-control-input" @if ($user->level =='Admin Kelurahan pasar Usang') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline8">Admin Kelurahan pasar Usang</label>
                                </div> 
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline9" required="" value="Admin Kelurahan Silaing Atas" name="level" class="custom-control-input" @if ($user->level =='Admin Kelurahan Silaing Atas') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline9">Admin Kelurahan Silaing Atas</label>
                                </div>  
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline10" required="" value="Admin Kelurahan Silaing Bawah" name="level" class="custom-control-input" @if ($user->level =='Admin Kelurahan Silaing Bawah') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline10">Admin Kelurahan Silaing Bawah</label>
                                </div>
                                 <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline11" required="" value="Admin Kelurahan Bukit Surungan" name="level" class="custom-control-input" @if ($user->level =='Admin Kelurahan Bukit Surungan') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline11">Admin Kelurahan Bukit Surungan</label>
                                </div>
                                </div>
                          <br><div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                    <i class="fa fa-edit"></i>&nbsp;
                                    <span>Update</span>
                            </button>
                    </div>
                 </div>
            </div>
          </div>
        </div>


@endsection

