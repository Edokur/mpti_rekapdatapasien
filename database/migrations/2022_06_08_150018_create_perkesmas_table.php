<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkesmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkesmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_register');
            $table->integer('id_pasien');
            $table->string('nama_pasien');
            $table->integer('nik');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->integer('no_bpjs');
            $table->string('kepala_keluarga');
            $table->string('pendidikan');
            $table->date('tanggal_kunjungan');
            $table->integer('kunjungan');
            $table->text('intervensi_keperawatan');
            $table->text('diagnosa_keperawatan');
            $table->text('implementasi_keperawatan');
            $table->text('keterangan');
            $table->timestamps();
            // $table->foreign('id_pasien')->references('id')->on('identitas_pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perkesmas');
    }
}
