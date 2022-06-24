<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogKesehatanJiwaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_kesehatan_jiwa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kesehatan_jiwa_id')->unsigned();
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('kesehatan_jiwa_id')->references('id_kesehatan_jiwa')->on('kesehatan_jiwa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_kesehatan_jiwa');
    }
}
