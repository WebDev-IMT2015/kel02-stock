<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatapegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapegawai', function(Blueprint $table)
           {
               $table -> increments('id');  
               $table -> string('nama');
               $table -> string('email');
               $table -> string('password');
               $table -> string('jabatan');
               $table -> timestamps();
           }
          );
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('datapegawai');
    }
}
