<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogPerkesmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_perkesmas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('perkesmas_id');
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('perkesmas_id')->references('id_perkesmas')->on('perkesmas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_perkesmas');
    }
}
