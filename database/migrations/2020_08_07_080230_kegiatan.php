<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kegiatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('penghayatan');
            $table->string('kerja_bakti');
            $table->string('rukun_kematian');
            $table->string('keagamaan');
            $table->string('jumpitan');
            $table->string('arisan');
            $table->string('dll');
            $table->text('ket_penghayatan');
            $table->text('ket_kerja_bakti');
            $table->text('ket_rukun_kematian');
            $table->text('ket_keagamaan');
            $table->text('ket_jumpitan');
            $table->text('ket_arisan');
            $table->text('ket_dll');           
            $table->string('aktifitas');           
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
        Schema::dropIfExists('kegiatan');
    }
}
