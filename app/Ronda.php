<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ronda extends Model
{
    protected $primaryKey = 'idronda';

     protected $fillable = [    	
    	'num_ronda',
    	'estadoronda',
    	
    ];
}
