<?php
use App\User;
Route::get('/', function () {
      // $usu = new User();
	// $usu->name="alan";
	// $usu->apellidos="ruiz";
	// $usu->telefono="123456";
	// $usu->email="alan@gmail.com";
	// $usu->password=bcrypt('alan');
	// $usu->accesoWeb="1";
	// $usu->accesoApp="1";
	// $usu->save();	
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('sendemail',function(){
//     $data =  array('name' => "Curso laravel",);
//     Mail::send('emails.pruebaemail' , $data, function($message){
//         $message->from('christian922017@gmail.com','curso laravel');
//         $message->to('christian922017@gmail.com')->subject('test2 email curso laravel');
//     });
//     return "Tu mensaje enviado exitosamente";
// });

// Route::post('sendemail', ['as' => 'sendemail', 'uses' => 'CorreosController@sendemail']);


//-------------USER-----------------------------------------------------

//-------------------------------------------------------------------------------------------------------------
