<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    //
    return $this->belogsToMany('App\Pelicula','Peliculas','idioma_id','');

}
