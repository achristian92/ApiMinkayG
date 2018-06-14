<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agencia_Super extends Model
{
    protected $primaryKey = 'idagsupe';

     protected $fillable = [    	
    	'idusu',
    	'idagencia',    	
    	'cod_supe',
    	'jefe_encargado',
    	'fecha_agsupe'
    ];
}
