<?php

namespace App\Http\Controllers;

use App\Zona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ZonaController extends Controller
{

    public function index()
    {
        $rzona = Zona::all();
        return [
            'data' => $rzona,
        ];
    }

    public function store(Request $request)
    {
        $zona = new Zona($request->all());
        $zona->save();
        return $zona;
    }

    public function show(Zona $zona)
    {

        $filtroagencias = DB::table('agencias')
            ->join('departamentos', 'agencias.id_departamento', '=', 'departamentos.iddepa')
            ->join('zonas', 'zonas.idzona', '=', 'departamentos.idzona')
            ->where('zonas.idzona', $zona->idzona)
            ->select('idagencia','nombre_agencia','direccion')
            ->get();
        return [
            'success' => 'true',
            'data' => $filtroagencias
               ];

    }

    public function update(Request $request, Zona $zona)
    {
        //
    }

    public function destroy(Zona $zona)
    {
        //
    }
}
