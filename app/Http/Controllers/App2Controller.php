<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Observacion;
class App2Controller extends Controller
{
     public function index2()
    {
               return Observacion::all(); 
    }

    public function show2($id)
    {
       return Observacion::find('5');
    }
}
