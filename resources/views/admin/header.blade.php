<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
     Kartu Keluarga Kecamatan Padang Panjang Barat
  </title>
  <!-- Favicon -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap4.min.css"> -->
  <link href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Logopadangpanjang.png/1200px-Logopadangpanjang.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{url('assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{url('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{url('assets/css/argon-dashboard.css?v=1.1.2')}}" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />

  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
 
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="/welcome">
        <img src="{{url('assets/img/padangpanjang.png')}}" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{url('assets/img/brand/pp.webp')}}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="/changepassword" class="dropdown-item">
                <i class="ni ni-key-25"></i>
                <span>Ganti Password</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="/logout" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="/">
                <img src="{{url('assets/img/brand/blue.png')}}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form --> 
        
        <!-- Navigation -->
        @if(Auth::User()->level == "Admin Camat")
          <h6 class="navbar-heading text-muted">Admin Camat</h6>
        @elseif(Auth::User()->level == "SuperAdmin")
          <h6 class="navbar-heading text-muted">Super Admin</h6>
        @else
          <h6 class="navbar-heading text-muted">{{substr(Auth::User()->level,6)}}</h6>
        @endif
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link @if ($activePage == 'dashboard') active @else  @endif" href="/welcome">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
             @if (Auth::User()->level == 'SuperAdmin')
           <li class="nav-item">
            <a class="nav-link @if ($activePage == 'users') active @else  @endif" href="/users">
              <i class="ni ni-single-02"></i> Data Users
            </a>
          </li>
            @endif
          <li class="nav-item">
            <a class="nav-link @if ($activePage == 'kepala_keluarga') active @else  @endif" href="/kartu-keluarga">
              <i class="ni ni-folder-17 text-red"></i> Data Kartu Keluarga
            </a>  
          </li>
        </ul>
        @if (Auth::User()->level == 'Admin Camat')
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Data Perkelurahan </h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item ml-3 @if ($activePage == 'kepala_keluarga') active @else  @endif">
            <a class="nav-link " href="/kartu-keluarga/kelurahan/balai-balai">
              <i class="ni ni-collection text-orange"></i>Kelurahan Balai-Balai
            </a>  
          </li>
           <li class="nav-item ml-3 @if ($activePage == 'kepala_keluarga') active @else  @endif">
            <a class="nav-link " href="/kartu-keluarga/kelurahan/bukit surungan">
              <i class="ni ni-collection text-black"></i>Kelurahan Bukit Surungan
            </a>  
          </li>
          <li class="nav- ml-3 item @if ($activePage == 'kepala_keluarga') active @else  @endif">
            <a class="nav-link " href="/kartu-keluarga/kelurahan/kampung manggis">
              <i class="ni ni-collection text-green"></i>Kelurahan Kampung Manggis
            </a>  
          </li>
          <li class="nav-item ml-3 @if ($activePage == 'kepala_keluarga') active @else  @endif">
            <a class="nav-link " href="/kartu-keluarga/kelurahan/pasar baru">
              <i class="ni ni-collection text-yellow"></i>Kelurahan Pasar Baru
            </a>  
          </li>
          <li class="nav-item ml-3 @if ($activePage == 'kepala_keluarga') active @else  @endif">
            <a class="nav-link " href="/kartu-keluarga/kelurahan/pasar usang">
              <i class="ni ni-collection text-pink"></i>Kelurahan Pasar usang
            </a>  
          </li>
          <li class="nav-item ml-3 @if ($activePage == 'kepala_keluarga') active @else  @endif">
            <a class="nav-link " href="/kartu-keluarga/kelurahan/silaing atas">
              <i class="ni ni-collection text-purple"></i>Kelurahan Silaing Atas
            </a>  
          </li>
          <li class="nav-item ml-3 @if ($activePage == 'kepala_keluarga') active @else  @endif">
            <a class="nav-link " href="/kartu-keluarga/kelurahan/silaing bawah">
              <i class="ni ni-collection text-blue"></i>Kelurahan Silaing bawah
            </a>  
          </li>
          <li class="nav-item ml-3 @if ($activePage == 'kepala_keluarga') active @else  @endif">
            <a class="nav-link " href="/kartu-keluarga/kelurahan/tanah hitam">
              <i class="ni ni-collection text-gray"></i>Kelurahan Tanah Hitam
            </a>  
          </li>
          <!-- <li class="nav-item @if ($activePage == 'warga') active @else  @endif">
            <a class="nav-link " href="/data-warga">
              <i class="ni ni-folder-17 text-red"></i> Data Warga
            </a>
          </li> 
          <li class="nav-item @if ($activePage == 'keluarga') active @else  @endif">
            <a class="nav-link " href="/data-keluarga">
              <i class="ni ni-paper-diploma text-red"></i> Data Keluarga
            </a>
          </li>        
          <li class="nav-item @if ($activePage == 'rekap_hamil') active @else  @endif">
            <a class="nav-link " href="/rekap-ibu-hamil">
              <i class="ni ni-single-copy-04 text-red"></i> Rekapitulasi Data 
            </a>
          </li> -->
          <!-- <li class="nav-item  @if ($activePage == 'anggota') active @else  @endif">
            <a class="nav-link" href="/anggota">
              <i class="ni ni-key-25 text-info"></i> Data Kartu Keluarga
            </a>
          </li> -->
        </ul>
        <!-- Divider -->
        @endif
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="/welcome"> Data Kartu Keluarga Kecamatan Padang Panjang Barat<br></a>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{url('assets/img/brand/pp.webp')}}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"> {{ Auth::user()->name }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="/changepassword" class="dropdown-item">
                <i class="ni ni-key-25"></i>
                <span>Ganti Password</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="/logout" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
     