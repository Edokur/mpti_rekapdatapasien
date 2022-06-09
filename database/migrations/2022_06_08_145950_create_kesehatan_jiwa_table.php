<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKesehatanJiwaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesehatan_jiwa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_register');
            $table->integer('id_pasien');
            $table->string('nama');
            $table->integer('nik');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('jenis_kelamin');
            $table->integer('no_bpjs');
            $table->string('kepala_keluarga');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->text('diagnosa');
            $table->text('terapi');
            $table->date('tanggal_kunjungan');
            $table->integer('kunjungan');
            $table->text('keterangan');
            $table->timestamps();
            $table->foreign('id_pasien')->references('id')->on('identitas_pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kesehatan_jiwa');
    }
}
