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
                  <h2 class="card-title"><i class="fa fa-eye"></i>&nbsp;&nbsp;Detail Data Users
                        <div class="float-right">
                             <button onclick="goBack()" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</button>
                        </div>
                    </h2><hr>
                    <form role="form" action="/users/detail/{{$user->id}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                         
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                                <input class="form-control" autofocus="" type="text" value="{{$user->name}}" disabled="" placeholder="Masukan Nama  ...." name="name"  >
                            </div>
                            <div class="form-group">
                                <label for="example-search-input" class="form-control-label">Username</label>
                                <input class="form-control" type="text" value="{{$user->username}}" disabled="" placeholder="Masukan username  .... " name="username" >
                            </div>
                            <div class="form-group">
                                <label for="example-email-input" class="form-control-label ">Level</label>&nbsp;
                                <div class="custom-control custom-radio custom-control-inline ml-3">
                                  <input type="radio" id="customRadioInline1"  disabled="" value="SuperAdmin" name="level" class="custom-control-input"@if ($user->level =='SuperAdmin') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline1" >SuperAdmin</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline2"  disabled="" value="Admin" name="level" class="custom-control-input"  @if ($user->level =='Admin') checked @endif>
                                  <label class="custom-control-label" for="customRadioInline2">Admin</label>
                                </div>
                            </div>
                          <br><div>
                    </div>
                 </div>
            </div>
          </div>
        </div>


@endsection

