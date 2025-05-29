<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Torneo;
class TorneoController extends Controller
{
    public function createf(Request $request) {
        Torneo::create([
            "nombre" => $request->nombre,
            "fecha_inicio" => $request->fecha_inicio,
             "fecha_fin" => $request->fecha_fin,
            "modalidad" => $request->modalidad,
            "premio" => $request->premio,
            
         
         
         
        
        
        ]);
        return response()->json([
            "message" => "Torneo Guardado Exitosamente!"
        ], 201);
    }

    public function createWithGame(Request $request, $idVideoJuego){
        $videojuego = VideoJuego::find($idVideoJuego);
        $torneo = new Torneo();
        $torneo->nombre = $request->nombre;
        $torneo->premio = $request->premio;
        $torneo->limite_equipos = $request->limite_equipos;
        $torneo->modalidad = $request->modalidad;
        $torneo->videojuego()->associate($videojuego);
        $torneo->save();
        $torneo->Resultados()->associate($Resultado);
        return response()-> json([
            "message"=> "Torneo creado con video juego exitosamente"
            ],201);

    }

    public function index() {
        return response()->json([
            "data" => Torneo::with('videojuego')->get(),
            "message" => "Lista de torneos obtenida exitosamente"
        ]);
    }

    public function show(Torneo $torneo) {
        return response()->json([
            "data" => $torneo->load('videojuego'),
            "message" => "Torneo obtenido exitosamente"
        ]);
    }
public function resultados(Resultados $torneo) {
        return response()->json([
            "data" => $torneo->load('Resultados'),
            "message" => "Resultados obtenido exitosamente"
        ]);
    }
        
}
