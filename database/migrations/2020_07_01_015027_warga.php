<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Warga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dasawisma');
            $table->string('noreg')->unique();
            $table->text('nama_lengkap');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('jenis_pekerjaan');
            $table->string('gol_darah');
            $table->string('status_perkawinan');
            $table->string('tgl_kawin');
            $table->string('status_hub'); 
            $table->string('kwn');
            $table->text('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('jabatan');
            $table->string('akseptor_kb');
            $table->string('aktif_posyandu');
            $table->string('program_bina');
            $table->string('tabungan');
            $table->string('kelompok_belajar');
            $table->string('paud');
            $table->string('umur');
            $table->string('koperasi');
            $table->string('jenis_koperasi');
            $table->string('jenis_akseptor');
            $table->string('volume');
            $table->string('kali');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warga');
    }
}
