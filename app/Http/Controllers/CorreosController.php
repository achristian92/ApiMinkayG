<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Observacion;
use Mail;
use Illuminate\Support\Facades\DB;
class CorreosController extends Controller
{
    function sendemail(Request $id){
        //Validar si existe codigo de la supe y id modulo
    	$obtenerobservaciones = Observacion::where('idmodulo', $id->idmodulo)
    								 ->where('cod_supe',$id->cod_supe)
                     ->select('comentario')   
                     ->limit(3)                                  
    								 ->get();

    	// return $obtenerobservaciones;				

     

      $agen_modu = DB::table('observacions')->where('observacions.cod_supe', $id->cod_supe)
                                                ->where('observacions.idmodulo', $id->idmodulo)                                   
                                                ->join('modulos', 'modulos.idmodulo', '=', 'observacions.idmodulo') 
                                                ->join('agencia__supers', 'agencia__supers.cod_supe', '=', 'observacions.cod_supe') 
                                                ->join('agencias', 'agencias.idagencia', '=', 'agencia__supers.idagencia')
                                                ->select('nombre_agencia','nombre_modulo','observacions.cod_supe','fecha_supe')
                                                ->limit(1) 
                                                ->get();                                         

       // return $agen_modu;
       // return response()->json($agen_modu);


    	if($obtenerobservaciones){
            $data = array(
                "num_obser"       => $obtenerobservaciones,
                "agen_modu"       => $agen_modu,
                "cod_supe"        => $id->cod_supe,

                
            );
            
             Mail::send('emails.welcome', $data , function ($mensaje){                
            $mensaje->to('cristian_15_12_3@hotmail.com','Area Sistemas Minkay')
                    ->from('cristian_15_12_3@hotmail.com',"MinkayG-Observaciones" )
                    ->subject("Nuevas Observaciones encontradas!!");
            });
             return [
            'success' => 'true'           
               ];      
              
    	}else{
    		 return [
            'success' => 'false'           
               ];   
    	}

    }
}