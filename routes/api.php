<?php

use Illuminate\Http\Request;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::apiresource('usuarios','UsuarioController');
Route::apiresource('agencias','AgenciaController');
Route::apiresource('zonas','ZonaController');
Route::apiresource('modulos','ModuloController');
Route::apiresource('agenciassuper','AgenciaSuperController');
Route::apiresource('observaciones','ObservacionController');
Route::apiresource('rondas','RondaController');

//Route::post('profe/crear','xontroller@funcion');

// Route::get('zon', 'ZonaController@index');
// Route::get('zon/{article}', 'ZonaController@show');
// Route::post('zon', 'ZonaController@store');
// Route::put('zon/{article}', 'ZonaController@update');
// Route::delete('zon/{article}', 'ZonaController@delete');
// Route::get('obser', ['as' => 'vehiculo.index', 'uses' => 'App2Controller@index2']);
// Route::get('obser/{id}', ['as' => 'vehiculo.show', 'uses' => 'App2Controller@show2']);
