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

        $aspirantes = DB::table('aspirantes')
            ->join('vacantes', 'aspirantes.vacante_id', '=', 'vacantes.vacante_id')
            ->where('vacantes.sucursal_id', $sucursal_id)
            //->where([
                //['aspirantes.sucursal_id', '=', $sucursal_id],
                //['vacantes.area_id', '=', $area_id],
                //['vacantes.cargo_id', '=', $cargo_id]
            //])
            ->get();
        return $aspirantes;
    }
}
