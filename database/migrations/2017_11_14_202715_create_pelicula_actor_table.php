<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculaActorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula_actor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pelicula_id')->unsigned();
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
            $table->integer('actor_id')->unsigned();
            $table->foreign('actor_id')->references('id')->on('actors');
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
        Schema::dropIfExists('pelicula_actor');
    }
}
