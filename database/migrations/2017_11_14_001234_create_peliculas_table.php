<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cine_id')->default(1);
            $table->string('nombre');
            $table->string('imagenURL');
            $table->string('horario');
            $table->string('idioma_id')->default(1);
            $table->string('actor_id')->default(0);
            $table->string('director_id')->default(0);
            $table->string('trailerURL');
            $table->integer('duracion');
            $table->string('descripcion');
            $table->string('clasificacion');
            $table->date('fechaInicio');
            $table->date('fechaTermino');
            $table->integer('estatus')->default(1);
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
        Schema::dropIfExists('peliculas');
    }
}
