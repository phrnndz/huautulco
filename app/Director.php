<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    //
    return $this->belogsToMany('App\Pelicula','Peliculas','director_id','');

}
