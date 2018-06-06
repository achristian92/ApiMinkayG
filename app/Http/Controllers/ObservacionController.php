<?php

namespace App\Http\Controllers;

use App\Observacion;
use App\Modulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ObservacionController extends Controller
{
    
    public function index()
    {
             return Observacion::all(); 
    }

   
    
    public function store(Request $request)
    {
        //
    }

   
    public function show($observacion)
    {
        
    }

   
    public function update(Request $request, Observacion $observacion)
    {
        //
    }

   
    public function destroy(Observacion $observacion)
    {
        //
    }
}
