<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveilans2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveilans_2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_penyakit');
            $table->integer('laki_laki');
            $table->integer('perempuan');
            $table->integer('total_kunjungan');
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
        Schema::dropIfExists('surveilans_2');
    }
}
