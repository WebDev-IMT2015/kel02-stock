<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databarang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('deskripsi');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->string('dari');
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
        Schema::dropIfExists('databarang');
    }
}
