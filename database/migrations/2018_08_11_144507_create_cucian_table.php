<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCucianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cucian', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pelanggan')->default('0');
            $table->string('nama_pelanggan');
            $table->string('kurir');
            $table->integer('id_maps')->default('0');
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
        Schema::dropIfExists('cucian');
    }
}
