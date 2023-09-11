<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsistenciaPostRequest;
use App\Models\Asistencia;
use Illuminate\Http\Request;

class RegistroAsistenciaController extends Controller
{
    public function index(){
        $asistencia= Asistencia::all();
        return response()->json($asistencia);
    }

    public function store(AsistenciaPostRequest $request){
        $validator = $request->validated();

        $asistencia = new Asistencia([
            'nombres' => $validator['nombres'],
            'apellidos' => $validator['apellidos'],
            'codAlumno' => $validator['codAlumno'],
            'idCurso' => $validator['idCurso'],
            'fecha' => $validator['fecha'],
            'nombreCurso' => $validator['nombreCurso'],
            'coordX' => $validator['coordX'],
            'coordY' => $validator['coordY']
        ]);
        $asistencia->save();
        return response()->json($asistencia);
    }
}
