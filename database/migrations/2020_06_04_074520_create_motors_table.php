<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->SoftDeletes();
            $table->bigIncrements('id');
            $table->integer('merek_id');
            $table->string('gambar');
            $table->string('jenis_motor');
            $table->string('tipe_motor');
            $table->string('harga_motor');
            $table->string('bahan_bakar');
            $table->string('ban_depan');
            $table->string('ban_belakang');
            $table->string('jenis_ban');
            $table->string('kapasitas_mesin');
            $table->string('tenaga_maksimal');
            $table->string('jenis_transmisi');
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
        Schema::dropIfExists('motors');
    }
}
