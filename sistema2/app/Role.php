<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
protected $fillable = [
	'name','slug', 'descripcion'
];

//Relaciones
public function permissions()
{
	return $this->hasMany('App\Permissions');
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
