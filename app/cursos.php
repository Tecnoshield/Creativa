<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    protected $table = 'cursos';

    protected $fillable = [
    	'id',
		'nombre',
		'fechaInicio',
		'duracion',
		'costo',
		'costoMen',
		'idMaestro',
		'status'
    ];
}
