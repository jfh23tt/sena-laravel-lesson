<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
     public function create(Request $request) {
        Equipo::create([
    
            "nombre" => $request->nombre,
              "lider" => $request->lider,
         
         
         
        
        
        ]);
        return response()->json([
            "message" => "equipo Guardado Exitosamente!"
        ], 201);
    }
}
