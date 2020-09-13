@extends('admin.app',[
  'activePage' => 'warga', 
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
                  <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Kegiatan Warga
                        <div class="float-right">
                             <a href="/kegiatan/tambah" class="btn btn-primary btn-round btn-sm mb-3"><i class="fa fa-plus-circle"></i> Tambah Kegiatan Warga</a>
                             <a href="/kegiatan" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>    
                        </div>
                    </h2><hr>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" width="100%">
                      <thead>
                        <tr>
                          <th class="text-center" width="5%">No
d                          <th class="th-md text-center">Kegiatan
                          <th class="text-center" width="25%">Action
                          </th>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=0; ?>
                            @foreach($kegiatan as $data)
                                <?php $no++; ?>
                        <tr>
                          <td class="text-center">{{$no}}</td>
                          <td>{{$data->penghayatan}}</td>
                          <td>{{$data->kerja_bakti}}</td>
                          <td>{{$data->rukun_kematian}}</td>
                          <td>{{$data->keagamaan}}</td>
                          <td>{{$data->jumpitan}}</td>
                          <td>{{$data->arisan}}</td>
                                <td class="text-center">
                            <div class="form-button-action">
                              <a href="/warga/edit/{{ $data->id }}"
                                data-toggle="tooltip" style="margin-left: 10px; color: blue;" data-original-title="Edit"><i class="fa fa-edit"></i>
                              </a>
                              <a href="/warga/detail/{{$data->id}}"
                                data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Detail Kepala Keluarga"><i class="fa fa-eye"></i>
                              </a>
                              <a href="/warga/delete/{{ $data->id }}" data-toggle="tooltip"   style="margin-left: 10px; color: red;"  data-original-title="Hapus" onclick="javascript: return confirm('Anda yakin hapus ?')"> <i class="fa fa-trash-alt"></i>
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