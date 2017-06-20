<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function(Blueprint $table)
           {
               $table -> increments('id');  
               $table -> string('nama_barang');
               $table -> integer('jumlah_barang');
               $table -> integer('harga_barang');
           }
          );
        
    }
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
