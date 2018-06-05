<?php

namespace App\Http\Controllers;

use App\Observacion;
use Illuminate\Http\Request;

class ObservacionController extends Controller
{
    
    public function index()
    {
        $robservaciones = observacion::all();
        return $robservaciones;
    }

   
    
    public function store(Request $request)
    {
        //
    }

   
    public function show(Observacion $observacion)
    {
        //
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
