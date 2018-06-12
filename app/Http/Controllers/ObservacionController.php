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

        $observaciones = new Observacion($request->all());       

        $ruta_imagen = $request->ruta_imagen;
        $generaridfotos = date('Y_m_d_H_i_s');
         $ruta = public_path().'/wsuploads/';
        $path = $ruta."$generaridfotos.jpg";
        $ruta_imagen_actual = "wsuploads/$generaridfotos.jpg";        
        $observaciones->ruta_imagen = $ruta_imagen_actual;
        $observaciones->save();     
       
        return [
            'success' => true,
            'dataobser' => $observaciones           
               ];
       file_put_contents($path,base64_decode($ruta_imagen));
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
