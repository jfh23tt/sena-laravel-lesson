<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipovideojuegoController extends Controller
{
     public function create(Request $request) {
        Tipovideojuego::create([
            "id_videojuego" => $request->id_videojuego,
            "nombre" => $request->nombre,
             
         
         
         
        
        
        ]);
        return response()->json([
            "message" => "Torneo Guardado Exitosamente!"
        ], 201);
    }
}
