<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangans', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('bangunan_id')->unsigned();
          $table->string('name');
          $table->integer('lantai');
          $table->double('luas_ruangan');
          $table->string('peruntukkan');
          $table->integer('kapasitas');

          $table->foreign('bangunan_id')->references('id')->on('bangunans');

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
        Schema::dropIfExists('ruangans');
    }
}
