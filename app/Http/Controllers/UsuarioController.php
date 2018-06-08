<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function index()
    {
        $users = Usuario::all();
        return [
            'success' => 'true',
            'data' => $users
               ];
    }

   

    public function store(Request $request)
    {
        $ruser = Usuario::where('email','=', $request->email)
                          ->where('password','=',$request->password)
                          ->where('accesoApp','=','1')
                          ->get();
        if(count($ruser)){
            return [
                            'success' => true,
                            'data' => $ruser
                   ];
        }else{
             return [
                            'success' => false
                    ];

        }
       
                
        
    }

    public function show(Usuario $usuario)
    {
        

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
