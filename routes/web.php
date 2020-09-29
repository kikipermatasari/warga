 	<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/kartu-keluarga/', 'KepalakeluargaController@kepala');
Route::get('/kartu-keluarga/kelurahan/{id}', 'KepalakeluargaController@kepala_kel');
Route::get('/kartu-keluarga/tambah', 'KepalakeluargaController@tambah');
Route::post('/kartu-keluarga/create', 'KepalakeluargaController@createkepala');
Route::post('/kartu-keluarga/cek', 'KepalakeluargaController@cek');
Route::get('/kartu-keluarga/edit/{id}', 'KepalakeluargaController@edit');
Route::post('/kartu-keluarga/update/{id}', 'KepalakeluargaController@updatekepala');
Route::get('/kartu-keluarga/delete/{id}', 'KepalakeluargaController@delete');
Route::get('/kartu-keluarga/detail/{id}', 'KepalakeluargaController@detailkepala');
Route::post('/kartu-keluarga/foto-rumah/update/{id}', 'KepalakeluargaController@updaterumah');
Route::get('/kartu-keluarga/foto-rumah/{id}', 'KepalakeluargaController@rumah');
Route::get('/kartu-keluarga/cetak/{id}', 'KepalakeluargaController@cetak_kepala');

Route::get('/kartu-keluarga/anggota/{id}', 'KepalakeluargaController@anggota');
Route::get('/kartu-keluarga/anggota/tambah/{id}', 'KepalakeluargaController@tambah_anggota');
Route::post('/kartu-keluarga/anggota/create', 'KepalakeluargaController@createanggota');
Route::get('/kartu-keluarga/anggota/edit/{id}', 'KepalakeluargaController@editanggota');
Route::post('/kartu-keluarga/anggota/update/{id}', 'KepalakeluargaController@updateanggota');
Route::get('/kartu-keluarga/anggota/delete/{id}', 'KepalakeluargaController@delete_anggota');
Route::get('/kartu-keluarga/anggota/detail/{id}', 'KepalakeluargaController@detailanggota');
Route::get('/kartu-keluarga/anggota/cetak/{id}', 'KepalakeluargaController@cetak_anggota');

Route::get('/data-warga', 'WargaController@warga');
Route::get('/data-warga/tambah', 'WargaController@tambah');
Route::post('/data-warga/cek', 'WargaController@cek');
Route::post('/data-warga/create', 'WargaController@create');
Route::get('/data-warga/edit/{id}', 'WargaController@edit');
Route::post('/data-warga/update/{id}', 'WargaController@update');
Route::get('/data-warga/detail/{id}', 'WargaController@detail');
Route::get('/data-warga/delete/{id}', 'WargaController@delete');

Route::get('/data-keluarga', 'KeluargaController@keluarga');

Route::get('/kegiatan', 'KegiatanController@kegiatan');
Route::get('/kegiatan/tambah', 'KegiatanController@tambah');
Route::post('/kegiatan/create', 'KegiatanController@create');

Route::get('/rekap-ibu-hamil', 'HamilController@rekap');
Route::get('/rekap-ibu-hamil/tambah', 'HamilController@tambah');
Route::post('/rekap-ibu-hamil/create', 'HamilController@create');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome','HomeController@index');
Route::get('/users','HomeController@tampil');
Route::get('/users/tambah','HomeController@tambah');
Route::get('/users/edit/{id}','HomeController@edit');
Route::get('/users/detail/{id}','HomeController@detail');
Route::post('/users/update/{id}', 'HomeController@update');
Route::post('/users/create','HomeController@create');
Route::get('/users/delete/{id}','HomeController@delete');
Route::post('/changepassword','HomeController@changepassword')->name('changepassword');
Route::get('/changepassword','HomeController@showChangePasswordForm');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
