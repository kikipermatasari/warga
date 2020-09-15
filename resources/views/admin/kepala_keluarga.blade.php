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
                  @if ($kel == 'balai-balai')
                  <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Kepala Keluarga Kelurahan Balai - Balai
                  @elseif ($kel == 'kampung manggis')
                  <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Kepala Keluarga Kelurahan Kampung Manggis
                  @elseif ($kel == 'pasar baru')
                  <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Kepala Keluarga Kelurahan Pasar Baru
                  @elseif ($kel == 'pasar usang')
                  <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Kepala Keluarga Kelurahan Pasar Usang
                  @elseif ($kel == 'silaing atas')
                  <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Kepala Keluarga Kelurahan Silaing Atas
                  @elseif ($kel == 'silaing bawah')
                  <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Kepala Keluarga Kelurahan Silaing Bawah
                  @elseif ($kel == 'tanah hitam')
                  <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Kepala Keluarga Kelurahan Tanah Hitam   
                  @elseif ($kel == 'bukit surungan')
                  <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Kepala Keluarga Kelurahan Bukit Surungan
                  @else
                    @if(Auth::User()->level == "Admin Camat")
                      <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Kepala Keluarga Kecamatan Padang Panjang Barat
                    @elseif(Auth::User()->level == "SuperAdmin")
                      <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Kepala Keluarga Kecamatan Padang Panjang Barat
                    @else
                      <h2 class="card-title"><i class="fa fa-list-alt"></i>&nbsp;&nbsp;Data Kepala Keluarga {{substr(Auth::User()->level,6)}}
                    @endif
                  @endif
                        <div class="float-right">
                             @if (Auth::User()->level == 'Admin Camat')
                             @elseif (Auth::User()->level == 'SuperAdmin')
                             @else
                             <a href="/kartu-keluarga/tambah" class="btn btn-primary btn-round btn-sm mb-3"><i class="fa fa-plus-circle"></i> Tambah Data Kepala Keluarga</a>
                             @endif
                        </div>
                    </h2><hr>
                    <div class="table-responsive">
                    @if ($kel == '')
                      @if(Auth::User()->level == "Admin Camat")
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th class="text-center" width="5%">No</th>
                            <th class="th-md text-center">Nomor KK</th>
                            <th class="th-md text-center">Nama Kepala Keluarga</th>
                            <th class="th-md text-center">Kelurahan </th>
                            <th class="text-center" width="25%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=0; ?>
                              @foreach($kepala_keluarga as $data)
                                  <?php $no++; ?>
                          <tr>
                            <td class="text-center">{{$no}}</td>
                            <td>{{$data->no_kk}} </td>
                            <td>{{$data->nama}} </td>
                            <td>{{$data->kelurahan}} </td>
                                  <td class="text-center">
                              <div class="form-button-action"> 
                              @if (Auth::User()->level != 'Admin Camat')
                                <a href="/kartu-keluarga/anggota/tambah/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: green;" data-original-title="Tambah Anggota KK"><i class="fa fa-plus-circle"></i>
                                </a>
                                <a href="/kartu-keluarga/anggota/{{$data->no_kk}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: purple;" data-original-title="List Anggota KK"><i class="fa fa-list"></i>
                                </a>
                                <a href="kartu-keluarga/edit/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: blue;" data-original-title="Edit Data Kepala Keluarga"><i class="fa fa-edit"></i>
                                </a>
                                <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Detail Data Kepala Keluarga"><i class="fa fa-eye"></i>
                                </a> 
                                <a href="/kartu-keluarga/foto-rumah/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: orange;" data-original-title="Foto Rumah"><i class="fa fa-home"></i>
                                </a> 
                                <a href="/kartu-keluarga/delete/{{$data->no_kk}}" data-toggle="tooltip"   style="margin-left: 10px; color: red;"  data-original-title="Hapus" onclick="javascript: return confirm('Anda yakin hapus ?')"> <i class="fa fa-trash-alt"></i>
                                </a>
                               @else
                                <a href="/kartu-keluarga/anggota/{{$data->no_kk}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: purple;" data-original-title="List Anggota KK"><i class="fa fa-list"></i>
                                </a>
                                <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Detail Data Kepala Keluarga"><i class="fa fa-eye"></i>
                                </a>
                                <a href="/kartu-keluarga/foto-rumah/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: orange;" data-original-title="Foto Rumah"><i class="fa fa-home"></i>
                                </a>
                               @endif                               
                              </div>
                            </td>                        
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                      @elseif(Auth::User()->level == "SuperAdmin")
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th class="text-center" width="5%">No</th>
                            <th class="th-md text-center">Nomor KK</th>
                            <th class="th-md text-center">Nama Kepala Keluarga</th>
                            <th class="th-md text-center">Kelurahan </th>
                            <th class="text-center" width="25%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=0; ?>
                              @foreach($kepala_keluarga as $data)
                                  <?php $no++; ?>
                          <tr>
                            <td class="text-center">{{$no}}</td>
                            <td>{{$data->no_kk}} </td>
                            <td>{{$data->nama}} </td>
                            <td>{{$data->kelurahan}} </td>
                                  <td class="text-center">
                              <div class="form-button-action"> 
                              @if (Auth::User()->level != 'Admin Camat')
                                <a href="/kartu-keluarga/anggota/tambah/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: green;" data-original-title="Tambah Anggota KK"><i class="fa fa-plus-circle"></i>
                                </a>
                                <a href="/kartu-keluarga/anggota/{{$data->no_kk}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: purple;" data-original-title="List Anggota KK"><i class="fa fa-list"></i>
                                </a>
                                <a href="kartu-keluarga/edit/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: blue;" data-original-title="Edit Data Kepala Keluarga"><i class="fa fa-edit"></i>
                                </a>
                                <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Detail Data Kepala Keluarga"><i class="fa fa-eye"></i>
                                </a> 
                                <a href="/kartu-keluarga/foto-rumah/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: orange;" data-original-title="Foto Rumah"><i class="fa fa-home"></i>
                                </a> 
                                <a href="/kartu-keluarga/delete/{{$data->no_kk}}" data-toggle="tooltip"   style="margin-left: 10px; color: red;"  data-original-title="Hapus" onclick="javascript: return confirm('Anda yakin hapus ?')"> <i class="fa fa-trash-alt"></i>
                                </a>
                               @else
                                <a href="/kartu-keluarga/anggota/{{$data->no_kk}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: purple;" data-original-title="List Anggota KK"><i class="fa fa-list"></i>
                                </a>
                                <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Detail Data Kepala Keluarga"><i class="fa fa-eye"></i>
                                </a>
                               @endif                               
                              </div>
                            </td>                        
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                      @else
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th class="text-center" width="5%">No</th>
                            <th class="th-md text-center">Nomor KK</th>
                            <th class="th-md text-center">Nama Kepala Keluarga</th>
                            <th class="text-center" width="25%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=0; ?>
                              @foreach($kepala_keluarga as $data)
                                  <?php $no++; ?>
                          <tr>
                            <td class="text-center">{{$no}}</td>
                            <td>{{$data->no_kk}} </td>
                            <td>{{$data->nama}} </td>
                            <td class="text-center">
                              <div class="form-button-action"> 
                              @if (Auth::User()->level != 'Admin Camat')
                                <a href="/kartu-keluarga/anggota/tambah/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: green;" data-original-title="Tambah Anggota KK"><i class="fa fa-plus-circle"></i>
                                </a>
                                <a href="/kartu-keluarga/anggota/{{$data->no_kk}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: purple;" data-original-title="List Anggota KK"><i class="fa fa-list"></i>
                                </a>
                                <a href="kartu-keluarga/edit/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: blue;" data-original-title="Edit Data Kepala Keluarga"><i class="fa fa-edit"></i>
                                </a>
                                <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Detail Data Kepala Keluarga"><i class="fa fa-eye"></i>
                                </a> 
                                <a href="/kartu-keluarga/foto-rumah/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: orange;" data-original-title="Foto Rumah"><i class="fa fa-home"></i>
                                </a> 
                                <a href="/kartu-keluarga/delete/{{$data->no_kk}}" data-toggle="tooltip"   style="margin-left: 10px; color: red;"  data-original-title="Hapus" onclick="javascript: return confirm('Anda yakin hapus ?')"> <i class="fa fa-trash-alt"></i>
                                </a>
                               @else
                                <a href="/kartu-keluarga/anggota/{{$data->no_kk}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: purple;" data-original-title="List Anggota KK"><i class="fa fa-list"></i>
                                </a>
                                <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Detail Data Kepala Keluarga"><i class="fa fa-eye"></i>
                                </a>
                                <a href="/kartu-keluarga/foto-rumah/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: orange;" data-original-title="Foto Rumah"><i class="fa fa-home"></i>
                                </a>
                               @endif                               
                              </div>
                            </td>                        
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                      @endif
                    @else
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th class="text-center" width="5%">No</th>
                          <th class="th-md text-center">Nomor KK</th>
                          <th class="th-md text-center">Nama Kepala Keluarga</th>
                          <th class="text-center" width="25%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=0; ?>
                            @foreach($kepala_keluarga as $data)
                                <?php $no++; ?>
                        <tr>
                          <td class="text-center">{{$no}}</td>
                          <td>{{$data->no_kk}} </td>
                          <td>{{$data->nama}} </td>
                                <td class="text-center">
                            <div class="form-button-action"> 
                              <!-- <a href="/kartu-keluarga/anggota/tambah/{{$data->id}}"
                                data-toggle="tooltip" style="margin-left: 10px; color: green;" data-original-title="Tambah Anggota KK"><i class="fa fa-plus-circle"></i>
                              </a> -->
                              <a href="/kartu-keluarga/anggota/{{$data->no_kk}}"
                                data-toggle="tooltip" style="margin-left: 10px; color: purple;" data-original-title="List Anggota KK"><i class="fa fa-list"></i>
                              </a>
                              <!-- <a href="kartu-keluarga/edit/{{$data->id}}"
                                data-toggle="tooltip" style="margin-left: 10px; color: blue;" data-original-title="Edit Data Kepala Keluarga"><i class="fa fa-edit"></i>
                              </a> -->
                              <a href="/kartu-keluarga/detail/{{$data->id}}"
                                data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Detail Data Kepala Keluarga"><i class="fa fa-eye"></i>
                              </a> 
                              <!-- <a href="/kartu-keluarga/delete/{{$data->no_kk}}" data-toggle="tooltip"   style="margin-left: 10px; color: red;"  data-original-title="Hapus" onclick="javascript: return confirm('Anda yakin hapus ?')"> <i class="fa fa-trash-alt"></i>
                              </a> --> 
                              <a href="/kartu-keluarga/foto-rumah/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: orange;" data-original-title="Foto Rumah"><i class="fa fa-home"></i>
                                </a>                         
                            </div>
                          </td>                        
                      </tr>
                    @endforeach
                      </tbody>
                    </table>
                    @endif
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