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
                      <a href="/kartu-keluarga" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</a>
                    </div>
                  </h2><hr>
                <form role="form" action="/kartu-keluarga/anggota/cek" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
              <div class="row">
                  <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-search-input" class="form-control-label">NIK ANGGOTA KELUARGA</label>
                    <div class="input-group">
                      <input type="number" class="form-control" name="nik" id="nik" autofocus="autofocus" placeholder="MASUKAN NIK ANGGOTA KELUARGA" aria-label="Recipient's username" aria-describedby="button-addon2" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16">
                      <div class="input-group-append">
                        <button class="btn btn-outline-primary" name="btn_nik" id="btn_nik" type="submit">Cek NIK</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </form>
              </div>
            </div>
          </div>
        </div>

@endsection