<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'users';

    protected $primaryKey = 'id';

    // public $timestamps = true;

    protected $fillable = [
    	'name',
    	'apellidos',
    	'telefono',
    	'email',
    	'password',
    	'accesoWeb',
    	'accesoApp',
 
    ];
}
