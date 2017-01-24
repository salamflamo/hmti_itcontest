<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTahap3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahap3s', function (Blueprint $table) {
          $table->increments('id')->foreign('id')->references('id')->on('users')->onDelete('cascade');
          $table->integer('point')->nullable();
          $table->char('one')->nullable();
          $table->string('two')->nullable();
          $table->string('three')->nullable();
          $table->string('four')->nullable();
          $table->string('five')->nullable();
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
        Schema::dropIfExists('tahap3s');
    }
}
