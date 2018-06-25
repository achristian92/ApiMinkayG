<?php

namespace App\Http\Controllers;
use Hash;
use App\Usuario;
// use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{

    public function index(Request $request)
    {
        // if ($request->isJson()) {
      //  $users = Usuario::all();
       // return response()->json($users, 200);
        // }
        // return response()->json(['error' => 'No Autorizado'], 401, []);
	return response()->json(['status'=>'ok','data'=>Usuario::all()], 200);

    }

    public function store(Request $request)
    {
	if (!$request->input('name') || !$request->input('apellidos') || !$request->input('telefono')|| !$request->input('email')|| !$request->input('password')|| !$request->input('accesoWeb')|| !$request->input('accesoApp'))
	{
	
	return response()->json(['errors'=>array(['code'=>422,'message'=>'Faltan datos necesarios'])],422);

	}
	else{
	$usu = new Usuario($request->all());  
	$usu->save();
	return response()->json(['status'=>'ok','data'=>$usu], 201);	
	}
      
    }

    public function show(Usuario $usuario)
    {
        // return $usuario->id;
        // $datosusu = Usuario::find($usuario->id);
        // return $datosusu;
        $usuarios = DB::table('users')
            ->where('id', $usuario->id)->get();
        return $usuarios;
    }

    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    public function destroy(Usuario $usuario)
    {
        //
    }
 public function check(Request $request)
    {
           
      $capturarpassword = Usuario::where('email', '=', $request->email)
            ->where('accesoApp', '=', '1')
            ->select('password')
            ->first();
        if($capturarpassword){
            if (Hash::check($request->password, $capturarpassword->password)) {
                            $ruser = Usuario::where('email','=', $request->email)
                             ->select('id','name')
                             ->get();

                            return [
                            'success' => true,
                            'data' => $ruser
                            ];
            } else {
            return [
                            "success" => false
                    ];    
        }    
        }else{
            return [
                            "success" => false
                    ];    
        }    
    }


}
