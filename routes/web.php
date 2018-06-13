<?php



Route::get('/', function () {
	
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/agencias-supervisadas', 'RutasPanelController@observa')->name('agencias.super');

Route::get('agencia-observaciones/{cod}', 'RutasPanelController@observashow')->name('agencias.obser');


Route::get('sendemail',function(){
	$data =  array('name' => "Curso laravel",); 
	Mail::send('emails.pruebaemail' , $data, function($message){
		$message->from('christian922017@gmail.com','curso laravel');
		$message->to('christian922017@gmail.com')->subject('test2 email curso laravel');
	});
	return "Tu mensaje enviado exitosamente";
});

// Route::get('sendemail', ['as' => 'sendemail', 'uses' => 'HistorialController@newkilo']);