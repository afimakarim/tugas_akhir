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
            $table->bigInteger('merek_id')->unsigned();
            $table->Integer('jenis_id')->unsigned();
            $table->string('gambar')->nullable()->default(null);
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

            $table->foreign('jenis_id')->references('id')->on('jenis')->onDelete('CASCADE');
            $table->foreign('merek_id')->references('id')->on('mereks')->onDelete('CASCADE');
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
