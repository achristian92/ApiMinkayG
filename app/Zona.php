<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
	 protected $table = 'zonas';

   	protected $primaryKey = 'idzona';

  

   

     protected $fillable = [   
     	'idzona', 	
    	'nombre_zona',
    	
    ];
}
