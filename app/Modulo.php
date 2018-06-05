<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $primaryKey = 'idmodulo';

     protected $fillable = [    	
    	'nombre_modulo',
    	
    ];
}
