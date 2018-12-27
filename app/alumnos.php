<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    protected $table = 'alumnos';

    protected $fillable = [
    	'id',
		'nombre',
		'apPat',
		'apMat',
		'sexo',
		'email',
		'telC',
		'telP',
		'fechaNac',
		'status'
    ];
}
