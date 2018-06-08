<?php

namespace App\Http\Controllers;

use App\Agencia;
use Illuminate\Http\Request;

class AgenciaController extends Controller
{
    
    public function index()
    {
        $ragencia = Agencia::all();
        return [
        	'success' => 'true',
        	'data' => $ragencia
        	   ];

    }

    public function store(Request $request)
    {
        $agencia = new Agencia($request->all());
        $agencia->save();
        return $agencia;
    }

    
    public function show(Agencia $agencia)
    {
        //
    }

       
    public function update(Request $request, Agencia $agencia)
    {
        //
    }

    
    public function destroy(Agencia $agencia)
    {
        //
    }
}
