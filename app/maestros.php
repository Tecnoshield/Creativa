<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maestros extends Model
{
    protected $table = 'maestros';

    protected $fillable = [
    	'id'
		'nombre',
		'apPat',
		'apMat',
		'telC',
		'telP',
		'comentarios',
		'status',
    ];
}
