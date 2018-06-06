<?php



Route::get('/', function () {
	
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/agencias-supervisadas', 'RutasPanelController@observa')->name('agencias.super');

Route::get('agencia-observaciones/{cod}', 'RutasPanelController@observashow')->name('agencias.obser');

