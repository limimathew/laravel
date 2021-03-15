<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id('fid');
            $table->string('airlinename');
            $table->string('departure');
            $table->string('arrival');
            $table->date('date');
            $table->time('dtime');
            $table->time('atime');
            $table->integer('seat');
            $table->integer('bussiness');
            $table->integer('economy');
            $table->integer('first');
            $table->integer('bcost');
            $table->integer('ecost');
            $table->integer('fcost');

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
        Schema::dropIfExists('flights');
    }
}
