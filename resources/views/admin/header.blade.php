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
  <!-- <link rel="stylesheet" type="text/css" href="link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'"> -->
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

  <style type="text/css">
    * {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

#grad1 {
    background-color: : #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA)
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
}

#msform input,
#msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button:hover,
#msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
}

select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue
}

.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #000000
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: skyblue
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.fit-image {
    width: 100%;
    object-fit: cover
}
  </style>

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
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
     