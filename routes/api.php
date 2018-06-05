<?php

use Illuminate\Http\Request;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::resource('usuarios','UsuarioController');
Route::resource('agencias','AgenciaController');
Route::resource('zonas','ZonaController');
Route::resource('modulos','ModuloController');
Route::resource('observaciones','ObservacionController');
Route::resource('rondas','RondaController');

//Route::post('profe/crear','xontroller@funcion');