<?php

namespace App\Http\Controllers;

use App\Observacion;
use App\Modulo;
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


        $observaciones                  = new Observacion($request->all());      
        $ruta_imagen                    = $request->ruta_imagen;
        $generaridfotos                 = date('Y_m_d_H_i_s');        
        $ruta_imagen_actual             = "wsuploads/$generaridfotos.jpg";        
        $observaciones->ruta_imagen     = $ruta_imagen_actual;
        $observaciones->idmodulo        = $this->capturaridmodulo($request->idmodulo);
        $observaciones->fecha_supe      = date('Y_m_d'); 

        $observaciones->save();

        $ruta = public_path().'/wsuploads/';
        $path = $ruta."$generaridfotos.jpg";
        file_put_contents($path,base64_decode($ruta_imagen));
       
        return [
            'success'      => true                          
               ];
    }
     public function capturaridmodulo($nombre_modulo)
    {
          $capidmodulo = Modulo::where('nombre_modulo', $nombre_modulo)->first();
          if($capidmodulo)
          {
            return $capidmodulo->idmodulo;        
          }else
          {
          $capidmodulo = Modulo::create([
          'nombre_modulo' => $nombre_modulo
          ]);
            return $capidmodulo->id;        
          }
    }

   
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
