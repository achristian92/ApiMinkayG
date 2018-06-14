<?php

namespace App\Http\Controllers;
use App\Agencia;
use App\Agencia_Super;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Observacion;
class AgenciaSuperController extends Controller
{
   
    public function index()
    {
        $agencia_supers = DB::table('agencia__supers')
           ->join('users',     'users.id'             ,'=','agencia__supers.idusu')
           ->join('agencias',  'agencias.idagencia'   ,'=','agencia__supers.idagencia')          
           ->select('idagsupe','name','nombre_agencia','jefe_encargado','cod_supe','fecha_agsupe')
           ->get();

           return $agencia_supers;
              
             
    }

    public function store(Request $request)
    {
        // $agenciasuper = new Agencia_Super($request->all());
        // $agenciasuper->save();
        // return [
        //     'success' => true,
        //     'data' => $agenciasuper           
        //        ];
      // guardar tabla agencia super
                $agenciasuper = new Agencia_Super($request->all());
                $agenciasuper->save();           
               return [  'success'      => true   ];  
              //  guardar las observaciones
                // $observaciones                  = new Observacion($request->all());      
                // $ruta_imagen                    = $request->ruta_imagen;
                // $generaridfotos                 = date('Y_m_d_H_i_s');        
                // $ruta_imagen_actual             = "wsuploads/$generaridfotos.jpg";        
                // $observaciones->ruta_imagen     = $ruta_imagen_actual;
                // // $observaciones->idmodulo        = $this->capturaridmodulo($request->idmodulo);
                // $observaciones->idmodulo        = $request->idmodulo;
                // $observaciones->fecha_supe      = date('Y_m_d'); 
                // $observaciones->save();

                // $ruta = public_path().'/wsuploads/';
                // $path = $ruta."$generaridfotos.jpg";
                // file_put_contents($path,base64_decode($ruta_imagen));   
     

                // return [  'success'      => true   ];     

                // file_put_contents($path,base64_decode($ruta_imagen));
    }

    
    public function show($agencia_Super)
    {
       $user = DB::table('observacions')
        ->join('modulos', 'observacions.idmodulo', '=', 'modulos.idmodulo')
        ->where('cod_supe', $agencia_Super)->get();
        return $user;

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
