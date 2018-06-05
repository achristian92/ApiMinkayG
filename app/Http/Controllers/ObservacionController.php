<?php

namespace App\Http\Controllers;

use App\Observacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ObservacionController extends Controller
{
    
    public function index()
    {
           $observaciones = DB::table('observacions')
           ->join('users',     'users.id'             ,'=','observacions.idusu')
           ->join('agencias',  'agencias.idagencia'   ,'=','observacions.idagencia')
           ->join('modulos',   'modulos.idmodulo'     ,'=','observacions.idmodulo')
           ->join('rondas',    'rondas.idronda'       ,'=','observacions.idronda')
           // ->join('zonas',     'zonas.idzona'         ,'=','observacions.idzona')
           ->select('idusu','name','cod_supe','num_ronda','nombre_agencia','fecha_supe')
           ->get();

            // foreach ($observaciones as $user) {
            // echo $user->idusu;
            
            // $observaciones = Observacion::all();
            return $observaciones;

            

          
    }

   
    
    public function store(Request $request)
    {
        //
    }

   
    public function show(Observacion $observacion)
    {
        //
    }

   
    public function update(Request $request, Observacion $observacion)
    {
        //
    }

   
    public function destroy(Observacion $observacion)
    {
        //
    }
}
