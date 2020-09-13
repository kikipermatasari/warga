<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RekapHamil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_hamil', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->string('tahun');
            $table->string('pkk_rt');
            $table->string('pkk_rw');
            $table->string('nama_ibu');
            $table->string('nama_suami')->unique();
            $table->string('status_hamil');
            $table->string('nama_bayi');
            $table->string('jenis_kelamin');
            $table->string('tgl_lahir');
            $table->string('akta_kelahiran');
            $table->string('nama_alm');
            $table->string('status_alm');
            $table->string('jnis_kl');
            $table->string('tgl_meninggal');
            $table->string('sebab_meninggal');
            $table->string('ket');
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
        Schema::dropIfExists('rekap_hamil');
    }
}
