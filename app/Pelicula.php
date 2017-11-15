<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
	protected $fillable = [
						'nombre',
						'imagenURL',
						'horario',
						'idioma',
						'actor_id',
						'director_id',
						'trailerURL',
						'duracion',
						'descripcion',
						'clasificacion',
						'fechaInicio',
						'fechaTermino'
						];

	public function actores()
	{
		return $this->belogstoMany('App\Actor');
	}

	public function directores()
	{
		return $this->belogstoMany('App\Director');
	}

	public function directores()
	{
		return $this->belogstoMany('App\Idioma');
	}
}
