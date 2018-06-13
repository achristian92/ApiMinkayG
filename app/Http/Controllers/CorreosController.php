<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Observacion;
class CorreosController extends Controller
{
    function sendemail(Request $id){


    	$condcod_supe = Observacion::where('idmodulo', $id->idmodulo)
    								 ->where('cod_supe',$id->cod_supe)
    								 ->first();
    								 

    	$succes = "true";
    	if($condcod_supe){
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