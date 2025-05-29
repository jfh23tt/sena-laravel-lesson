<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquiposjugadoresController extends Controller
{
    
    public function another(Request $request) {
        Equiposjugadores::create([
            "id_jugadores" => $request->id_jugadores,
            "id_equipop" => $request->id_equipop,
            "id_torneo" => $request->id_torneo,
           
            

        ]);
        return response()->json([
            "message" => "Equiposjugadores Guardado Exitosamente!"
        ], 201);
    }
}
