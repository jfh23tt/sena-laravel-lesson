<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoVideojuego;
use App\Models\VideoJuego;
class VideoJuegoController extends Controller
{
    public function create(Request $request){
      
        $game = new VideoJuego();
        $game->nombre = $request->nombre;
        $tipo = TipoVideojuego::find($request->tipo_id);
        $game->tipo()->associate($tipo);
        $game->save();
       
       $game->modalidades()->attach( [$request->modalidadId]);
       $game->save();
       return response()->json([
        "message" => "Guardado exitosamente"
        ],201);
    }

    public function getAll(VideoJuego $request){
        return response()->json([
            "data" => $request->get(),
            "message" => "Consulta exitosa"
        ],200);
    }

     public function update(Request $request, VideoJuego $videojuego){
        $videojuego->nombre = $request->nombre;
        $tipo = TipoVideojuego::find($request->tipo_id);
        $videojuego->tipo()->associate($tipo);
        $videojuego->save();
       
       $videojuego->modalidades()->attach( [$request->modalidadId]);
       $videojuego->save();
       return response()->json([
        "message" => "Actualizado exitosamente"
        ],201);
    }
    
     public function destroy( VideoJuego $videojuego) {
        $videojuego->delete();
         return response()->json([
            "message" => "Video juego eliminado Exitosamente!"
        ], 200);
     
    }

}


