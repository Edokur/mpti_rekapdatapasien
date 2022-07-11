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
        Schema::create('log_activity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('activity_id')->index();
            $table->text('jenis_data');
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('activity_id')->references('id_register')->on('identitas_pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_activity');
    }
}
