@extends('admin.app',[
  'activePage' => 'dashboard', 
])
@section('content')
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8 ">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row text-center">
            <div class="col-xl-4 col-lg-6" >
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-muted mb-0">Jumlah Penduduk</h5>
                      <span class="h4 font-weight-bold mb-0">{{$jml_penduduk + $jml_penduduk1}} Orang</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                        <i class="fa fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title  text-muted mb-0">Jumlah Laki-Laki</h5>
                      <span class="h4 font-weight-bold mb-0">{{$jml_laki_laki + $jml_laki_laki1}} Orang</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                        <i class="fas fa-male"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title  text-muted mb-0">Jumlah Perempuan</h5>
                      <span class="h4 font-weight-bold mb-0">{{$jml_perempuan + $jml_perempuan1}} Orang</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-female"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                  </p>
                </div>
              </div>
            </div>
            
          </div>
          <!-- Card stats -->
        </div>
      </div>
    </div>
   
<div class="container-fluid mt--7">
      @if(Auth::User()->level == "Admin Camat")
      <div class="row">
        <div class="col-xl-12">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Log Aktivitas</h6>
                  <h2 class="mb-0">Aktivitas Pada Bulan <?php date_default_timezone_set('Asia/Jakarta'); echo date('F Y');?></h2>
                </div>
              </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th class="text-center" width="5%">#</th>
                          <th class="th-md text-center">Tanggal</th>
                          <th class="th-md text-center">Pukul</th>
                          <th class="th-md text-center">Aktivitas</th>
<!--                           <th class="th-md text-center">Action</th>
 -->                        </tr>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=0; ?>
                        @foreach($log_penduduk_created as $data)
                        <?php $no++; ?>
                        <tr>
                          <td class="text-center">{{$no}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y')}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('H:i')}} WIB</td>
                          <td>Kelurahan {{$data->kelurahan}} Menambahkan Data Kepala Keluarga Baru</td>
                          <!-- <td class="text-center">
                            <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Lihat Aktivitas"><i class="fa fa-eye"></i>
                            </a>
                          </td> -->             
                        </tr>
                        @endforeach
                        @foreach($log_penduduk_updated as $data)
                        <?php $no++; ?>
                        <tr>
                          <td class="text-center">{{$no}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->updated_at)->format('d M Y')}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->updated_at)->format('H:i')}} WIB</td>
                          <td>Kelurahan {{$data->kelurahan}} Mengupdate Data Kepala Keluarga Baru</td>
                          <!-- <td class="text-center">
                            <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Lihat Aktivitas"><i class="fa fa-eye"></i>
                            </a>
                          </td>    -->          
                        </tr>
                        @endforeach
                        @foreach($log_anggota_created as $data)
                        <?php $no++; ?>
                        <tr>
                          <td class="text-center">{{$no}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y')}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('H:i')}} WIB</td>
                          <!-- <td>Kelurahan {{$data->kelurahan}} Menambahkan Data Anggota Keluarga Baru</td>
                          <td class="text-center">
                            <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Lihat Aktivitas"><i class="fa fa-eye"></i>
                            </a>
                          </td>     -->         
                        </tr>
                        @endforeach
                        @foreach($log_anggota_updated as $data)
                        <?php $no++; ?>
                        <tr>
                          <td class="text-center">{{$no}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->updated_at)->format('d M Y')}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->updated_at)->format('H:i')}} WIB</td>
                          <td>Kelurahan {{$data->kelurahan}} Mengupdate Data Anggota Keluarga Baru</td>
                          <!-- <td class="text-center">
                            <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Lihat Aktivitas"><i class="fa fa-eye"></i>
                            </a>
                          </td>   -->           
                        </tr>
                        @endforeach
                      </tbody>
                    </table> 
                </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 mt-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Per Kelurahan</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
                <canvas class="pb-5" id="chart-kelurahan" ></canvas>
            </div>
          </div>
        </div>
        <div class="col-xl-6 mt-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Menurut Umur </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas class="pb-5" id="chart-umur" width="100%" height="100%" ></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 mt-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Menurut Penghasilan </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas class="pb-5" id="chart-penghasilan" width="100%" height="100%" ></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 mt-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Menurut Domisili </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas class="pb-5" id="chart-domisili" width="100%" height="100%" ></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 mt-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Menurut Jenis Kelamin </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas class="pb-5" id="chart-jekel" width="100%" height="100%" ></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
var ctx = document.getElementById('chart-kelurahan').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Balai-Balai', 'K. Manggis', 'P.Baru', 'P. Usang', 'Silaing Atas', 'Silaing Bawah','Tanah Hitam', 'B. Surungan'],
        datasets: [{
            label: 'Jumlah Penduduk per Kelurahan',
            data: [{{$total_balai}}, {{$total_manggis}}, {{$total_pabar}}, {{$total_paus}}, {{$total_silat}},{{$total_silba}} ,
            {{$total_tanah}}, {{$total_bukit}}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',


            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('chart-umur').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['(0-4)', '(5-9)', '(10-14)', '(15-19)', '(20-24)', '(25-29)','(30-34)','(35-39)','(45-49)','(50-54)','(55-59)','(60-64)','(65-70)','(71-74)','(75+)'],
        datasets: [{
            label: 'Jumlah Penduduk Menurut Umur',
            data: {{$hasil}},
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('chart-penghasilan').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['-',' 0-1 Juta', '1 Juta- 2 Juta', '2 Juta - 3 Juta', '3 Juta - 4 Juta', '4 Juta - 5 Juta', '> 5 Juta'],
        datasets: [{
            label: 'Jumlah Penduduk Menurut Penghasilan',
            data: [{{$penghasilan0}},{{$penghasilan1}}, {{$penghasilan2}}, {{$penghasilan3}}, {{$penghasilan4}}, {{$penghasilan5}}, {{$penghasilan6}}],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('chart-jekel').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Laki-Laki', 'Perempuan'],
        datasets: [{
            label: 'Jenis Kelamin',
            data: [{{$jml_laki_laki + $jml_laki_laki1}}, {{$jml_perempuan + $jml_perempuan1}}],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
    }
});

var ctx = document.getElementById('chart-domisili').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Berdomisili di Padang Panjang', 'Tidak Berdomisili di Padang Panjang'],
        datasets: [{
            label: 'Jenis Kelamin',
            data: {{$domisili}},
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
    }
});
</script>
      @elseif(Auth::User()->level == "SuperAdmin")
      <div class="row">
        <div class="col-xl-12">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Log Aktivitas</h6>
                  <h2 class="mb-0">Aktivitas Pada Bulan <?php date_default_timezone_set('Asia/Jakarta'); echo date('F Y');?></h2>
                </div>
              </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th class="text-center" width="5%">#</th>
                          <th class="th-md text-center">Tanggal</th>
                          <th class="th-md text-center">Pukul</th>
                          <th class="th-md text-center">Aktivitas</th>
                          <th class="th-md text-center">Action</th>
                        </tr>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=0; ?>
                        @foreach($log_penduduk_created as $data)
                        <?php $no++; ?>
                        <tr>
                          <td class="text-center">{{$no}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y')}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('H:i')}} WIB</td>
                          <td>Kelurahan {{$data->kelurahan}} Menambahkan Data Kepala Keluarga Baru</td>
                          <td class="text-center">
                            <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Lihat Aktivitas"><i class="fa fa-eye"></i>
                            </a>
                          </td>             
                        </tr>
                        @endforeach
                        @foreach($log_penduduk_updated as $data)
                        <?php $no++; ?>
                        <tr>
                          <td class="text-center">{{$no}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->updated_at)->format('d M Y')}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->updated_at)->format('H:i')}} WIB</td>
                          <td>Kelurahan {{$data->kelurahan}} Mengupdate Data Kepala Keluarga Baru</td>
                          <td class="text-center">
                            <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Lihat Aktivitas"><i class="fa fa-eye"></i>
                            </a>
                          </td>             
                        </tr>
                        @endforeach
                        @foreach($log_anggota_created as $data)
                        <?php $no++; ?>
                        <tr>
                          <td class="text-center">{{$no}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y')}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->created_at)->format('H:i')}} WIB</td>
                          <td>Kelurahan {{$data->kelurahan}} Menambahkan Data Anggota Keluarga Baru</td>
                          <td class="text-center">
                            <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Lihat Aktivitas"><i class="fa fa-eye"></i>
                            </a>
                          </td>             
                        </tr>
                        @endforeach
                        @foreach($log_anggota_updated as $data)
                        <?php $no++; ?>
                        <tr>
                          <td class="text-center">{{$no}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->updated_at)->format('d M Y')}}</td>
                          <td class="th-md text-center">{{ \Carbon\Carbon::parse($data->updated_at)->format('H:i')}} WIB</td>
                          <td>Kelurahan {{$data->kelurahan}} Mengupdate Data Anggota Keluarga Baru</td>
                          <td class="text-center">
                            <a href="/kartu-keluarga/detail/{{$data->id}}"
                                  data-toggle="tooltip" style="margin-left: 10px; color: black;" data-original-title="Lihat Aktivitas"><i class="fa fa-eye"></i>
                            </a>
                          </td>             
                        </tr>
                        @endforeach
                      </tbody>
                    </table> 
                </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 mt-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Per Kelurahan</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
                <canvas class="pb-5" id="chart-kelurahan" ></canvas>
            </div>
          </div>
        </div>
        <div class="col-xl-6 mt-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Menurut Umur </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas class="pb-5" id="chart-umur" width="100%" height="100%" ></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 mt-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Menurut Penghasilan </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas class="pb-5" id="chart-penghasilan" width="100%" height="100%" ></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 mt-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Menurut Domisili </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas class="pb-5" id="chart-domisili" width="100%" height="100%" ></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 mt-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Menurut Jenis Kelamin </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas class="pb-5" id="chart-jekel" width="100%" height="100%" ></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
var ctx = document.getElementById('chart-kelurahan').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Balai-Balai', 'K. Manggis', 'P.Baru', 'P. Usang', 'Silaing Atas', 'Silaing Bawah','Tanah Hitam', 'B. Surungan'],
        datasets: [{
            label: 'Jumlah Penduduk per Kelurahan',
            data: [{{$total_balai}}, {{$total_manggis}}, {{$total_pabar}}, {{$total_paus}}, {{$total_silat}},{{$total_silba}} ,
            {{$total_tanah}}, {{$total_bukit}}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',


            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('chart-umur').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['(0-4)', '(5-9)', '(10-14)', '(15-19)', '(20-24)', '(25-29)','(30-34)','(35-39)','(45-49)','(50-54)','(55-59)','(60-64)','(65-70)','(71-74)','(75+)'],
        datasets: [{
            label: 'Jumlah Penduduk Menurut Umur',
            data: {{$hasil}},
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('chart-penghasilan').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['-',' 0-1 Juta', '1 Juta- 2 Juta', '2 Juta - 3 Juta', '3 Juta - 4 Juta', '4 Juta - 5 Juta', '> 5 Juta'],
        datasets: [{
            label: 'Jumlah Penduduk Menurut Penghasilan',
            data: [{{$penghasilan0}},{{$penghasilan1}}, {{$penghasilan2}}, {{$penghasilan3}}, {{$penghasilan4}}, {{$penghasilan5}}, {{$penghasilan6}}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('chart-jekel').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Laki-Laki', 'Perempuan'],
        datasets: [{
            label: 'Jenis Kelamin',
            data: [{{$jml_laki_laki + $jml_laki_laki1}}, {{$jml_perempuan + $jml_perempuan1}}],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
    }
});

var ctx = document.getElementById('chart-domisili').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Berdomisili di Padang Panjang', 'Tidak Berdomisili di Padang Panjang'],
        datasets: [{
            label: 'Jenis Kelamin',
            data: {{$domisili}},
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
    }
});
</script>
      @else
      <div class="row">
        <div class="col-xl-6">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Menurut Umur </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas class="pb-5" id="chart-umur" width="100%" height="100%" ></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Menurut Penghasilan </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas class="pb-5" id="chart-penghasilan" width="100%" height="100%" ></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 mt-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Menurut Domisili </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas class="pb-5" id="chart-domisili" width="100%" height="100%" ></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 mt-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Grafik</h6>
                  <h2 class="mb-0">Jumlah Penduduk Menurut Jenis Kelamin </h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas class="pb-5" id="chart-jekel" width="100%" height="100%" ></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
var ctx = document.getElementById('chart-umur').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['(0-4)', '(5-9)', '(10-14)', '(15-19)', '(20-24)', '(25-29)','(30-34)','(35-39)','(45-49)','(50-54)','(55-59)','(60-64)','(65-70)','(71-74)','(75+)'],
        datasets: [{
            label: 'Jumlah Penduduk Menurut Umur',
            data: {{$hasil}},
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'

            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('chart-penghasilan').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['-',' 0-1 Juta', '1 Juta- 2 Juta', '2 Juta - 3 Juta', '3 Juta - 4 Juta', '4 Juta - 5 Juta', '> 5 Juta'],
        datasets: [{
            label: 'Jumlah Penduduk Menurut Penghasilan',
            data: [{{$penghasilan0}},{{$penghasilan1}}, {{$penghasilan2}}, {{$penghasilan3}}, {{$penghasilan4}}, {{$penghasilan5}}, {{$penghasilan6}}],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('chart-jekel').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Laki-Laki', 'Perempuan'],
        datasets: [{
            label: 'Jenis Kelamin',
            data: [{{$jml_laki_laki + $jml_laki_laki1}}, {{$jml_perempuan + $jml_perempuan1}}],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
    }
});

var ctx = document.getElementById('chart-domisili').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Berdomisili di Padang Panjang', 'Tidak Berdomisili di Padang Panjang'],
        datasets: [{
            label: 'Jenis Kelamin',
            data: {{$domisili}},
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(153, 102, 255, 1)',
                'rgba(255, 99, 132, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
    }
});
</script>
      @endif
            @endsection

      