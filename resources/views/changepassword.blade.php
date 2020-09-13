@extends('admin.app',[
  'activePage' => 'users', 
])
@section('content')


<div class="container-fluid mt--7">
      <div class="row"> 
        <div class="col-12">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h2 class="card-title"><i class="fa fa-edit"></i>&nbsp;&nbsp;Ganti Password
                        <div class="float-right">
                             <button onclick="goBack()" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</button>
                        </div>
                    </h2><hr>
                    @if (session('error'))
                        <div class="alert alert-danger">
                          <i class="ni ni-fat-remove"></i>
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                              <i class="ni ni-like-2"></i>
                                {{ session('success') }}
                            </div>
                        @endif
                    <form role="form" action="/changepassword" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                         
                            <div class="form-group {{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <label for="example-text-input" class="form-control-label">Password Lama</label>
                                <input class="form-control" autofocus="" type="password" required="" placeholder="Masukan Password Lama  ...." name="current-password"  >
                                @if ($errors->has('password-lama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password-lama') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="example-search-input" class="form-control-label">Password Baru</label>
                                <input class="form-control" type="password" required="" placeholder="Masukan Password Baru .... " name="new-password" >
                                @if ($errors->has('password-baru'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password-baru') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="example-search-input" class="form-control-label">Konfirmasi Password Baru</label>
                                <input class="form-control" type="password" required="" placeholder="Masukan  Konfirmasi Password Baru .... " name="new-password_confirmation" >
                            </div>
                          <br><div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                    <i class="fa fa-edit"></i>&nbsp;
                                    <span>Ganti Password</span>
                            </button>
                    </div>
                 </div>
            </div>
          </div>
        </div>


@endsection

