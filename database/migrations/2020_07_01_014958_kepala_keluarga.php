<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KepalaKeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepala_keluarga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomor_kk')->unique();
            $table->string('nama_kk');
            $table->text('alamat');
            $table->string('rtrw');
            $table->string('kelurahan');
            $table->string('kode_pos');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
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
        Schema::dropIfExists('kepala_keluarga');
    }
}
