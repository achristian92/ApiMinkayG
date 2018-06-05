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