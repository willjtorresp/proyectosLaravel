<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
protected $fillable = [
	'name', 'slug', 'description'
];
//Relaciones
	public function role()
	{
		return $this->belongsTo('App\Role');
	}

public function users()
{
	retunr $this->belongsToMany('App\User');
}
//Almacenamiento
//Validacion
//Recuperacion de informacion
//Otras operaciones
}
