<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Anggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kk')->unique();
            $table->string('id_nomorkk');
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
            $table->string('no_pasport');
            $table->string('no_kitap');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
           
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
        Schema::dropIfExists('anggota');
    }
}
