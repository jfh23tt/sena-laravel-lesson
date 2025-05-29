<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\videoJuego;
class videojuegoController extends Controller
{
    public function create(Request $request) {
        videoJuego::create([
            "id_videoJuego" => $request->id_videojuego,
            "nombre" => $request->nombre,
              "id_modalidad" => $request->id_modalidad,
         
         
         
        
        
        ]);
        return response()->json([
            "message" => "Video juego Guardado Exitosamente!"
        ], 201);
    }
}

