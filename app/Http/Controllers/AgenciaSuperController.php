<?php

namespace App\Http\Controllers;

use App\Agencia_Super;
use Illuminate\Http\Request;

class AgenciaSuperController extends Controller
{
   
    public function index()
    {
        $agenciasuper = Agencia_Super::All();
        return $agenciasuper;
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show(Agencia_Super $agencia_Super)
    {
        //
    }

   
    public function update(Request $request, Agencia_Super $agencia_Super)
    {
        //
    }

    public function destroy(Agencia_Super $agencia_Super)
    {
        //
    }
}
