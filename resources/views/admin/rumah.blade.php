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
                   @if (Auth::User()->level == 'Admin Camat')
                    @elseif (Auth::User()->level == 'SuperAdmin')
                    @else
                  <h2 class="card-title"><i class="fa fa-home"></i>&nbsp;&nbsp;Tambah Data Foto Rumah
                    @endif
                    <div class="float-right">
                      <a href="/kartu-keluarga" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</a>
                    </div>
                  </h2><hr>
                <form role="form" action="/kartu-keluarga/foto-rumah/update/{{$kepala_keluarga->id}}" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                <div class="row">

              <style>
                          }
                          }
                        .gambar {
                            width: 150px;
                            height: 200px;
                        }
                    </style>
                    <script>
                        var loadFile = function (event) {
                            var reader = new FileReader();
                            reader.onload = function () {
                                var output = document.getElementById('output');
                                output.src = reader.result;
                            };
                            reader.readAsDataURL(event.target.files[0]);
                        };

                    </script>
              <div class="col-md-12">
               <div class="form-group">
                    @if (Auth::User()->level == 'Admin Camat')
                    @elseif (Auth::User()->level == 'SuperAdmin')
                    @else
                    <label for="example-search-input" class="form-control-label">Foto Rumah</label>
                    <input class="form-control" type="file" onchange="loadFile(event)" class="form-control-file" required="" placeholder="Masukan No. Pasport ... " required name="foto_rumah" >
                    @endif
                    @if($kepala_keluarga->foto_rumah == "")
                    <img src="https://www.someltenthire.co.uk/wp-content/uploads/2016/02/blank-rows-img.jpg" id="output" class="gambar" alt="" style="max-height:350px;width:100%;margin-top:10px" >
                    @else
                    <img src="{{url('public/warga')}}/{{ $kepala_keluarga->foto_rumah}}" id="output" class="gambar" alt="" style="max-height:350px;width:100%;margin-top:10px" >
                    @endif
                </div>
              </div>  
            </div>        
                <br>
                <div>
                  @if (Auth::User()->level == 'Admin Camat')
                    @elseif (Auth::User()->level == 'SuperAdmin')
                    @else
                  <button type="submit" class="btn btn-lg btn-primary btn-block">
                    <i class="fa fa-plus"></i>&nbsp;<span>Simpan</span>
                  </button>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection