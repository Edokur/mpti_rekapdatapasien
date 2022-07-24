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
            $table->increments('id_surveilens2');
            // $table->integer('identitas_penyakit_id');
            $table->string('id_register');
            $table->string('nama_penyakit');
            $table->integer('lakilaki');
            $table->integer('perempuan');
            $table->integer('lga');
            $table->integer('lgb');
            $table->integer('lgc');
            $table->integer('lgd');
            $table->integer('lge');
            $table->integer('lgf');
            $table->integer('lgg');
            $table->integer('lgh');
            $table->integer('lgi');
            $table->integer('lgj');
            $table->integer('lgk');
            $table->integer('lgl');
            $table->integer('pga');
            $table->integer('pgb');
            $table->integer('pgc');
            $table->integer('pgd');
            $table->integer('pge');
            $table->integer('pgf');
            $table->integer('pgg');
            $table->integer('pgh');
            $table->integer('pgi');
            $table->integer('pgj');
            $table->integer('pgk');
            $table->integer('pgl');
            $table->integer('total_kunjungan');
            $table->timestamps();

            // $table->foreign('identitas_penyakit_id')->references('id_identitas_penyakit')->on('identitas_penyakit');
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
