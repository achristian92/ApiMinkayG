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
    	$condcod_supe = Observacion::where('idmodulo', $id->idmodulo)
    								 ->where('cod_supe',$id->cod_supe)                                     
    								 ->first();
    								 
      $nombre_agencia = DB::table('agencia__supers')->where('agencia__supers.cod_supe', $id->cod_supe)                                 
                                                ->join('agencias', 'agencias.idagencia', '=', 'agencia__supers.idagencia')       
                                                ->select('nombre_agencia') 
                                                ->get();

      // $nombre_modulo = DB::table('observacions')->where('observacions.cod_supe', $id->cod_supe)
      //                                           ->where('observacions.idmodulo', $id->idmodulo)                                   
      //                                           ->join('modulos', 'modulos.idmodulo', '=', 'observacions.idmodulo')       
      //                                           ->select('nombre_modulo') 
      //                                           ->get();                                         

           
    	if($condcod_supe){
            $data = array(
                "cod_supe"       =>  $id->cod_supe,
                "nombre_agencia" =>  $nombre_agencia
                // "nombre_modulo" =>  $nombre_modulo,
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