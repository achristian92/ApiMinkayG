<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
   protected $primaryKey = 'idzona';

     protected $fillable = [    	
    	'nombre_zona',
    	
    ];
}
