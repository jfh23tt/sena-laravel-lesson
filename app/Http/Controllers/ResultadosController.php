<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultadosController extends Controller
{
     public function result(Request $request) {
        Resualtados::create([
            "id_torneo" => $request->id_torneo,
            "fecha_fin" => $request->fecha_fin,
            "equipo" => $request->limite_equipos,
            "modalidad" => $request->modalidad,
            "premio"=> $request->premio,
        ]);
        return response()->json([
            "message" => "Resuldados Guardado Exitosamente!"
        ], 201);
    }

}
