<?php

namespace App\Http\Controllers;
use Hash;
use App\Usuario;
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
		$usuario= Usuario::find($usuario);	
         	if($usuario){
		return response()->json(['status'=>'ok','data'=>$usuario],200);
		}
		else{
		return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encontro Ningun Usuario'])],404);
   
		}
		

    }

        public function update(Request $request,$usuario)
    {
	   $user_exists = Usuario::find($usuario);
        if (!$user_exists)
        {
        return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encontro Ningun Usuario'])],404);
        }
        // Listado de campos recibidos teóricamente.
        $name=$request->input('name');
        $apellidos=$request->input('apellidos');
        $telefono=$request->input('telefono');
        $email=$request->input('email');
        $password=$request->input('password');
        $accesoWeb=$request->input('accesoWeb');
        $accesoApp=$request->input('accesoApp');


        if ($request->method() === 'PUT')
        {
        // $user = Usuario::find($usuario);
        // $user->update($request->all());
        // return ['updated' => true,'id'=>$usuario];
         //   $passform = $request->password;

       DB::table('users')->where('id', $usuario)->update([
            'name'           => $name,
            'apellidos'      => $apellidos,
       ]);

        return response()->json(['status'=>'ok','data'=>$name], 200);
        }
    else{
        return response()->json(['errors'=>array(['code'=>304,'message'=>'No se ha modificado ningún dato de usuario.'])],304);
    }
    }

    public function destroy(Usuario $usuario)
    {
        //
    }
 public function check(Request $request)
    {
           
      $capturarpassword = Usuario::where('email', '=', $request->email)
            ->where('accesoApp', '=', 'SI')
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
