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
                  <h2 class="card-title"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Edit Data Aggota Kartu Keluarga
                    <div class="float-right">
                      <a href="/kartu-keluarga/anggota/list/{{$anggota->no_kk}}" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</a>
                    </div>
                  </h2><hr>
                <form role="form" action="/kartu-keluarga/anggota/update/{{$anggota->id}}" method="POST" enctype="multipart/form-data" id="kk_form">
                          {{ csrf_field() }}
              <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">NIK</label>
                    <div class="form-group">
                      <input type="text" class="form-control" disabled="disabled" value="{{$anggota->nik}}">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                    <input class="form-control" type="text" disabled="disabled"  value="{{$anggota->nama}}">
                </div>
                </div>
               <div class="col-md-4">
                  <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nomor KK</label>
                      <input class="form-control" type="text" disabled="disabled" value="{{$anggota->no_kk}}">
                  </div>
              </div>
                <div class="col-md-4">
                <div class="form-group">
                    <label for="example-password-input" class="form-control-label">Kewarganegaraan</label>
                      <select class="form-control form-control" name="kwn">
                        <option value="WNI"@if ($anggota->kwn =='WNI') selected @endif>WNI</option>
                        <option value="WNA" @if ($anggota->kwn =='WNA') selected @endif>WNA</option>
                        
                      </select>               
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">No. Pasport</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan No. Pasport ... " name="no_pasport" value="{{$anggota->no_pasport}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="example-search-input" class="form-control-label">No. Kitap</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan No. Kitap ... " name="no_kitap" value="{{$anggota->no_kitap}}">
                </div>
              </div>
             </div>
             <br>
                <div>
                  <button type="submit" class="btn btn-lg btn-success btn-block">
                    <i class="fa fa-edit" id="btn_kk"></i>&nbsp;<span>Update</span>
                  </button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>

@endsection