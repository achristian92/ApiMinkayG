<?php

namespace App\Http\Controllers;
use App\Agencia;
use App\Agencia_Super;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Observacion;
class AgenciaSuperController extends Controller
{
   
    public function index()
    {
        $agencia_supers = DB::table('agencia__supers')
           ->join('users',     'users.id'             ,'=','agencia__supers.idusu')
           ->join('agencias',  'agencias.idagencia'   ,'=','agencia__supers.idagencia')          
           ->select('idagsupe','name','nombre_agencia','jefe_encargado','cod_supe','fecha_agsupe')
           ->get();
            return $agencia_supers;  
    }

    public function store(Request $request)
    {
        
    }

    
    public function show($agencia_Super)
    {
       $user = DB::table('observacions')
        ->join('modulos', 'observacions.idmodulo', '=', 'modulos.idmodulo')
        ->where('cod_supe', $agencia_Super)->get();
        return $user;

    }

   
    public function update(Request $request, Agencia_Super $agencia_Super)
    {
        //
    }

    public function destroy(Agencia_Super $agencia_Super)
    {
        //
    }
}
