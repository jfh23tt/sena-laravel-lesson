<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalidadVideojuegoController extends Controller
{
    public function result(Request $request) {
        ModalidadVideojuego::create([
            "id_Videojuego" => $request->id_Videojuego,
            "id_modalidad" => $request->id_modalidad,
            
        ]);
        return response()->json([
            "message" => "ModalidadVideojuego Guardado Exitosamente!"
        ], 201);
    }
}
