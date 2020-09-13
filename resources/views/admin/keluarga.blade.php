@extends('admin.app',[
  'activePage' => 'keluarga', 
])
@section('content')

    <!-- Header -->
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
                  <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Warga
                        <div class="float-right">
                             <a href="/data-keluarga" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>    
                        </div>
                    </h2><hr>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th class="text-center" width="5%">No
d                          <th class="th-md text-center">Dasawisma
                          <th class="th-md text-center">Nama Kepala Keluarga
                          <th class="text-center" width="25%">Action
                          </th>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=0; ?>
                            @foreach($warga as $data)
                                <?php $no++; ?>
                        <tr>
                          <td class="text-center">{{$no}}</td>
                          <td>{{$data->dasawisma}}</td>
                          <td>{{$data->nama_kk}}</td>
                                <td class="text-center">
                            <div class="form-button-action">
                              <a href="/data-keluarga/anggota/tambah"
                                data-toggle="tooltip" style="margin-left: 10px; color: green;" data-original-title="Tambah Anggota Keluarga"><i class="fa fa-plus-circle"></i>
                              </a>
                              <a href="/data-keluarga/detail/{{$data->id}}"
                                data-toggle="tooltip" style="margin-left: 10px; color: blue;" data-original-title="Detail Data Keluarga"><i class="fa fa-eye"></i>
                              </a>
                              <a href="/data-keluarga/delete/{{ $data->id }}" data-toggle="tooltip"   style="margin-left: 10px; color: red;"  data-original-title="Hapus" onclick="javascript: return confirm('Anda yakin hapus ?')"> <i class="fa fa-trash-alt"></i>
                              </a>
                                                            
                            </div>
                          </td>                        
                      </tr>
                    @endforeach
                      </tbody>
                    </table> 
                </div>      
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection