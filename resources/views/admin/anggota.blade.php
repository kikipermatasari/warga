@extends('admin.app',[
  'activePage' => 'kepala_keluarga', 
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
                  <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Anggota Kartu Keluarga
                    <div class="float-right">                    
                    <a href="/kartu-keluarga" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</a>
                    </div>
                    </h2><hr>
                    <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th class="text-center" width="5%">No</th>
                          <th class="text-center" >Nama Kepala Keluarga</th>
                         <th class="th-md text-center">Nama Lengkap</th>
                           <th class="th-md text-center">NIK</th>
                          <th class="text-center" width="10%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=0; ?>
                            @foreach($anggota as $data)
                                <?php $no++; ?>
                        <tr>
                          <td class="text-center">{{$no}}</td>
                          <td>{{$data->nama_kk}} </td>
                          <td>{{$data->nama}} </td>
                          <td>{{$data->nik}} </td>
                                <td class="text-center">
                            <div class="form-button-action"> 
                              <a href="/kartu-keluarga/anggota/edit/{{$data->id }}"
                                data-toggle="tooltip" style="margin-left: 10px; color: blue;" data-original-title="Edit"><i class="fa fa-edit"></i>
                              </a>
                               <a href="/kartu-keluarga/anggota/detail/{{$data->id }}"
                                data-toggle="tooltip" style="margin-left: 10px; color: grey;" data-original-title="Detail"><i class="fa fa-eye"></i>
                              </a>
                              <a href="/kartu-keluarga/anggota/delete/{{$data->id}}" data-toggle="tooltip"   style="margin-left: 10px; color: red;"  data-original-title="Hapus" onclick="javascript: return confirm('Anda yakin hapus ?')"> <i class="fa fa-trash-alt"></i>
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

<!-- Import Excel -->
                        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form method="post" action="/kepala-keluarga/import_excel" enctype="multipart/form-data">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                </div>
                                <div class="modal-body">
                     
                                  {{ csrf_field() }}
                     
                                  <label>Pilih file excel</label>
                                  <div class="form-group">
                                    <input type="file" name="file" required="required">
                                  </div>
                     
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <a href="{{url('assets/template.xlsx')}}">
                                    <button type="button" class="btn btn-dark">Download Template</button>
                                  </a>
                                  <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>

@endsection