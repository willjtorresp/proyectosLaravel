<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
protected $fillable = [
	'name', 'slug', 'description'
];

//Relaciones
public function permissions()
{
	return $this->hasMany('App\Permission');
}

public function users()
{
	return $this->belongsToMany('App\User');
}
//Almacenamiento
//Validacion
//Recuperacion de informacion
//Otras operaciones

}
