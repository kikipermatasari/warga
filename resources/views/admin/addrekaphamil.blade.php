@extends('admin.app',[
  'activePage' => 'rekap_hamil', 
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
                  <h2 class="card-title"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Tambah Rekap Data
                    <div class="float-right">
                      <a href="/rekap_hamil" class="btn btn-secondary btn-round btn-sm mb-3 mr-4"><i class="fa fa-arrow-left"></i>Back</a>
                    </div>
                  </h2><hr>
                <form role="form" action="/rekap_hamil/create" method="POST" enctype="multipart/form-data">
                          {{ csrf_field() }}
                <div class="row">
    						<div class="form-group col-6">
        						<label for="example-text-input" class="form-control-label">Bulan</label>
        						<input class="form-control" autofocus="" type="month" required="" placeholder="Masukan Bulan ..." name="bulan"  >
    						</div>
                <div class="form-group col-6">
                    <label for="example-text-input" class="form-control-label">Tahun</label>
                    <input class="form-control" autofocus="" type="year" required="" placeholder="Masukan Bulan ..." name="tahun"  >
                </div>
    						<div class="form-group">
        						<label for="example-email-input" class="form-control-label">Kelompok Daswisma</label>
        						<input class="form-control" type="text" required="" placeholder="Masukan Kelompok Dasawisma ..." name="alamat" >
    						</div>
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Kelompok PKK Rt</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan Kelompok PKK Rt ..." name="pkk_rt" >
                </div>
                <div class="form-group">
                    <label for="example-email-input" class="form-control-label">Kelompok PKK Rw</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan Kelompok PKK Rw ..." name="pkk_rw" >
                </div>
    						<div class="form-group">
        						<label for="example-url-input" class="form-control-label">Nama Ibu</label>
        						<input class="form-control" type="text" required="" placeholder="Masukan Nama Ibu ... " name="nama_ibu" >
    						</div>
                <div class="form-group">
                    <label for="example-url-input" class="form-control-label">Nama Suami</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan Nama Suami ... " name="nama_suami" >
                </div>
                <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Status Hamil/ Status Melahirkan/Nifas</label>
                    <select class="form-control form-control" name="status_hamil">
                        <option value="">-- Pilih Kecamatan--</option>
                        <option value="Hamil">Hamil</option>
                        <option value="Melahirkan">Melahirkan</option>
                        <option value="Nifas">Nifas</option>
                    </select>
                  </div> 
                  <div class="form-group">
                    <label for="example-url-input" class="form-control-label">Nama Bayi</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan Nama Bayi ... " name="nama_bayi" >
                </div>
                <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Jenis Kelamin</label> 
                <div class="custom-control custom-radio custom-control-inline ml-3">
                  <input type="radio" id="customRadioInline1" name="jenis_kelamin" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio1" value="Laki-Laki">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline3" name="jenis_kelamin" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio2" value="Perempuan" >Perempuan</label>
                </div>  
                  </div>
                  <div class="form-group">
                    <label for="example-url-input" class="form-control-label">Tanggal</label>
                    <input class="form-control" type="date" required="" placeholder="Masukan Nama Bayi ... " name="tgl_lahir" >
                </div>
                <div class="form-group">
                    <label for="example-datetime-local-input"  class="form-control-label">Akta Kelahiran</label> 
                <div class="custom-control custom-radio custom-control-inline ml-3">
                  <input type="radio" id="customRadioInline3" name="akta_kelahiran" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio1" value="Ada">Ada</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline4" name="akta_kelahiran" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio2" value="Tidak">Tidak</label>
                </div>  
                  </div>
                <div class="form-group">
                    <label for="example-url-input" class="form-control-label">Nama Ibu/Bayi /Balita</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan Nama Ibu,Bayi,Balita ... " name="nama_alm" >
                </div> 
                <div class="form-group">
                    <label for="example-number-input" class="form-control-label">Status Ibu/Bayi /Balita</label>
                      <select class="form-control form-control" name="kelurahan">
                        <option value="">-- Pilih Status--</option>
                                  <!--Kecamatan Padang Panjang Barat-->   
                        <option value="Ibu">Ibu</option>
                        <option value="Bayi">Bayi</option>
                        <option value="Balita">Balita</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="example-url-input" class="form-control-label">Tanggal Meninggal</label>
                    <input class="form-control" type="date" required="" placeholder="Masukan Nama Bayi ... " name="tgl_lahir" >
                </div>
                <div class="form-group">
                    <label for="example-url-input" class="form-control-label">Sebab Meninggal</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan Sebab Meninggal ... " name="sebab_meninggal" >
                </div>
                <div class="form-group">
                    <label for="example-url-input" class="form-control-label">Sebab Meninggal</label>
                    <input class="form-control" type="text" required="" placeholder="Masukan Keterangan ... " name="ket" >
                </div>
              </div>
    						<br>
                <div>
                  <button type="submit" class="btn btn-lg btn-primary btn-block">
                    <i class="fa fa-plus"></i>&nbsp;<span>Simpan</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection