<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public funcion peliculas()
    {
    	return $this->belogsToMany('App\Pelicula','Peliculas','actor_id','');
    }
}
