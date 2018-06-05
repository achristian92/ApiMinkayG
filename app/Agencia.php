<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
	protected $primaryKey = 'idagencia';

     protected $fillable = [    	
    	'nombre_agencia',
    	'direccion',
    	
    ];
}
