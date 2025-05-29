<?php

namespace App\Http\Controllers;
use App\Models\jugadores;
use Illuminate\Http\Request;

class jugadoresController extends Controller
{
   
    public function another(Request $request) {
        jugadores::create([
            "nombre" => $request->nombre,
            "nick" => $request->nick,
            "correo" => $request->correo,
            "telefono"=> $request->telefono,
            "pais" => $request->pais,
            

        ]);
        return response()->json([
            "message" => "jugadores Guardado Exitosamente!"
        ], 201);
    }
}