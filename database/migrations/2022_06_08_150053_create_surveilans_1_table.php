<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveilans1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveilans_1', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pasien');
            $table->string('nama_pasien');
            $table->integer('umur');
            $table->date('tanggal');
            $table->text('diagnosa');
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
        Schema::dropIfExists('surveilans_1');
    }
}
