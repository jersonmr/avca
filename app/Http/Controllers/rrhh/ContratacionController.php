<?php

namespace App\Http\Controllers\rrhh;

use App\Models\rrhh\Aspirante;
use App\Models\rrhh\Cargo;
use App\Models\rrhh\Departamento;
use App\Models\rrhh\Profesion;
use App\Models\rrhh\Sucursal;
use App\Models\rrhh\TabuladorSalarial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ContratacionController extends Controller
{
    public function formContratacion()
    {
        return view('rrhh.backend.captacion.contratacion');
    }

    public function obtenerAspiranteInfo($aspirante_id)
    {
        $aspirante = Aspirante::findOrFail($aspirante_id);

        return $aspirante;
    }

    public function obtenerEstados()
    {
        $estados = Storage::get('public/json/venezuela.json');
        return $estados;
    }

    public function obtenerProfesiones(Request $request)
    {
        $profesiones = Profesion::where('nivel_academico', $request->nivel_academico)->get();
        return response()->json($profesiones);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function obtenerSucursales()
    {
        $data = Sucursal::all();
        return response()->json($data);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function obtenerDepartamentos()
    {
        $data = Departamento::all();
        return response()->json($data);
    }

    public function obtenerCargos()
    {
        $cargos = Cargo::all();
        return response()->json($cargos);
    }

    public function obtenerTabuladorSalarial(Request $request)
    {
        $tabulador = TabuladorSalarial::where('tabulador_salarial_id', $request->tabulador_salarial_id)->get();
        return response()->json($tabulador);
    }

    public function obtenerBancos()
    {
        $bancos = Storage::get('public/json/bancos.json');
        return $bancos;
    }
}
