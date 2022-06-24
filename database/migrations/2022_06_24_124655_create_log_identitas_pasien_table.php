<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogIdentitasPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_identitas_pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identitas_pasien_id');
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('identitas_pasien_id')->references('id_pasien')->on('identitas_pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_identitas_pasien');
    }
}
