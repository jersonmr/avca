<?php

namespace App\Http\Controllers\rrhh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SeleccionController extends Controller
{
    public function index()
    {
        return view('rrhh.backend.captacion.seleccion.list');
    }

    public function obtenerAspirantes(Request $request)
    {
        $sucursal_id = $request->sucursal_id;
        $area_id = $request->area_id;
        $cargo_id = $request->cargo_id;

        $aspirantes = DB::table('sucursales')
            ->join('vacantes', 'sucursales.sucursal_id', '=', 'vacantes.sucursal_id')
            //->join('areas', 'vacantes.area_id', '=', 'areas.area_id')
            ->join('aspirantes', 'vacantes.vacante_id', '=', 'aspirantes.vacante_id')
            ->where([
                ['sucursales.sucursal_id', $sucursal_id],
                ['vacantes.area_id', $area_id],
                ['vacantes.cargo_id', $cargo_id]
            ])            
            //->where([
                //['aspirantes.sucursal_id', '=', $sucursal_id],
                //['vacantes.area_id', '=', $area_id],
                //['vacantes.cargo_id', '=', $cargo_id]
            //])
            ->get();
        return $aspirantes;
    }
}
