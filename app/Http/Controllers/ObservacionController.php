<?php

namespace App\Http\Controllers;

use App\Observacion;
use App\Modulo;
use App\Agencia_Super;
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
         $existecodagensuper = Agencia_Super::where('cod_supe', $request->cod_supe)->get();
          // return $existecodagensuper;
         if(json_decode($existecodagensuper, true)){
         
         //  guardar las observaciones
                $observaciones                  = new Observacion($request->all());      
                $ruta_imagen                    = $request->ruta_imagen;
                $generaridfotos                 = date('Y_m_d_H_i_s');        
                $ruta_imagen_actual             = "http://192.81.219.5/wsuploads/$generaridfotos.jpg";        
                $observaciones->ruta_imagen     = $ruta_imagen_actual;
                $observaciones->idmodulo        = $request->idmodulo;
                $observaciones->fecha_supe      = date('Y_m_d'); 
                $observaciones->save();

                $ruta = public_path().'/wsuploads/';
                $path = $ruta."$generaridfotos.jpg";
                file_put_contents($path,base64_decode($ruta_imagen));   
     

                return [  'success'      => true   ];     

                file_put_contents($path,base64_decode($ruta_imagen));
              
         }else{
               // guardar tabla agencia super
                $agenciasuper = new Agencia_Super($request->all());
                $agenciasuper->fecha_agsupe      = date('Y_m_d'); 
                $agenciasuper->save();           
             
              //  guardar las observaciones
                $observaciones                  = new Observacion($request->all());      
                $ruta_imagen                    = $request->ruta_imagen;
                $generaridfotos                 = date('Y_m_d_H_i_s');        
                $ruta_imagen_actual             = "http://192.81.219.5/wsuploads/$generaridfotos.jpg";        
                $observaciones->ruta_imagen     = $ruta_imagen_actual;
                // $observaciones->idmodulo        = $this->capturaridmodulo($request->idmodulo);
                $observaciones->idmodulo        = $request->idmodulo;
                $observaciones->fecha_supe      = date('Y_m_d'); 
                $observaciones->save();

                $ruta = public_path().'/wsuploads/';
                $path = $ruta."$generaridfotos.jpg";
                file_put_contents($path,base64_decode($ruta_imagen));   
     

                return [  'success'      => true   ];     

                file_put_contents($path,base64_decode($ruta_imagen));
       }
    }
    //  public function capturaridmodulo($nombre_modulo)
    // {
    //       $capidmodulo = Modulo::where('nombre_modulo', $nombre_modulo)->first();
    //       if($capidmodulo)
    //       {
    //         return $capidmodulo->idmodulo;        
    //       }else
    //       {
    //       $capidmodulo = Modulo::create([
    //       'nombre_modulo' => $nombre_modulo
    //       ]);
    //         return $capidmodulo->id;        
    //       }
    // }

   
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
