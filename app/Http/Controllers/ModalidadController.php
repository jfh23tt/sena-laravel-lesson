<?php

namespace App\Http\Controllers;
use App\Models\modalidad;
use Illuminate\Http\Request;

class ModalidadController extends Controller
{
    public function create4(Request $request) {
        modalidad::create([
        
            "nombre" => $request->nombre,
            
        ]);
        return response()->json([
            "message" => "Modalidad Guardado Exitosamente!"
        ], 201);
}
}
