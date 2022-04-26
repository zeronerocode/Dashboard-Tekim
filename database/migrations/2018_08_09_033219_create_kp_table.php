<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateKpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kp', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nim');

            $table->string('nama_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('nomor_surat');
            $table->string('ipk');
            $table->string('jumlah_sks');
            $table->string('periode');
            $table->string('akhir_periode');
            $table->foreign('nim')->references()->on('mhs');
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
        Schema::dropIfExists('kp');
    }
}
