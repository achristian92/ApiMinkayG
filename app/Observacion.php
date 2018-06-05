<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    protected $primaryKey = 'idob';

     protected $fillable = [    	
    	'idusu',
    	'idagencia',
    	'idronda',
    	'idmodulo',
    	'cod_supe',
    	'ruta_imagen',
    	'comentario',
    	'fecha_supe',
    	
    ];
}
