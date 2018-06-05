<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasPanelController extends Controller
{

	public function __construct(){
		$this ->middleware('auth');
	}


    function observa(){
    	 return view('agencias');
    }
      
}
