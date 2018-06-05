<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function index()
    {
        $rusuarios = Usuario::all();
        $rusuarios["success"]=true;
        return $rusuarios;
    }

   

    public function store(Request $request)
    {
        $usuario = new Usuario($request->all());
        $usuario->save();
        $usuario["success"]=true;
        return $usuario;
    }

    public function show(Usuario $usuario)
    {
        //
    }

    
    
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    public function destroy(Usuario $usuario)
    {
        //
    }
}
