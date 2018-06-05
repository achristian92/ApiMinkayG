<?php

namespace App\Http\Controllers;

use App\Ronda;
use Illuminate\Http\Request;

class RondaController extends Controller
{
    
    public function index()
    {
       $rronda = Ronda::all();
        return $rronda;
    }

   
    public function store(Request $request)
    {
         $ronda = new Ronda($request->all());
         $ronda->save();
         return $ronda;
    }

    public function show(Ronda $ronda)
    {
        //
    }

   
    public function update(Request $request, Ronda $ronda)
    {
        //
    }

    
    public function destroy(Ronda $ronda)
    {
        //
    }
}
