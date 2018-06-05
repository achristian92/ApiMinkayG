<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    protected $primaryKey = 'idob';

     protected $fillable = [   
        'cod_supe', 	
    	'idmodulo',
    	'ruta_imagen',
    	'comentario',
    	'fecha_supe',
    	'idusu',
    ];
}
