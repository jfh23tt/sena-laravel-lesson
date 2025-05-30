<?php

use App\Http\Controllers\ResultadosTorneoController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\ModalidadController;
use App\Http\Controllers\TipoVideojuegoController;
use App\Http\Controllers\TorneoController;
use App\Http\Controllers\VideoJuegoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/sena', function (Request $request) {
    $mensaje = "Hola Mundo";
    return response([
        "saludo" => $mensaje
    ]);
});

Route::post("/create-tournament", [TorneoController::class, 'create']);

Route::post("/create-tournament/{videojuego}", [TorneoController::class, 'createWithGame']);
Route::get("tournament/{torneo}", [TorneoController::class, "show"]);
Route::post("/equipos",[TorneoController::class,'create']);
Route::post("/crearequipos", [EquipoController::class,"create"]);
Route::post("/crearjugador", [JugadoresController::class,"create"]);
Route::get("/listar-equipos", [EquiposController::class,"getAll"]);
Route::put("/actulizar-equipo/{equipo}", [EquipoController::class,"update"]);
Route::delete("/eliminar-equipo/{equipo}", [EquipoController::class,"destroy"]);
Route::put("/actualizar-jugador/{jugador}", [JugadoresController::class,"update"]);
Route::get("/listar-jugadores", [JugadoresController::class,"getAll"]);
Route::delete("/eliminar-jugador/{jugador}",[JugadoresController::class,"destroy"]);
Route::post("/crear-modalidad",[ModalidadController::class,"create"]);
Route::get("/listar-modalidades",[ModalidadController::class,"getAll"]);
Route::put("/actualizar-modalidad/{modalidad}",[ModalidadController::class,"update"]);
Route::delete("/eliminar-modalidad/{modalidad}",[ModalidadController::class,"destroy"]);
Route::post("/creartipo", [TipoVideojuegoController::class,"create"]);
Route::get("/listar-tipo",[TipoVideojuegoController::class,"getAll"]);
Route::put("/actualizar-tipo/{videojuego}",[TipoVideojuegoController::class,"update"]);
Route::delete("/eliminar-tipo/{videojuego}",[TipoVideojuegoController::class,"destroy"]);
Route::post("/creategame", [VideoJuegoController::class,"create"]);
Route::put("/actualizar-videojuego/{videojuego}",[VideoJuegoController::class,"update"]);
Route::delete("/eliminar-videojuego/{videojuego}",[VideoJuegoController::class,"destroy"]);
Route::post("/crear-resultado",[ResultadosTorneoController::class,"create"]);
Route::get("/obtener-resultado/{resultado}",[ResultadosTorneoController::class,"show"]);
Route::delete("/eliminar-resultado/{resultado}",[ResultadosTorneo::class,"show"]);
/*
Route::post("/Creat_equipo", [EquipoController::class, 'create']);
Route::post("/Create_modalidad", [ModalidadController::class, 'create4']);
Route::post("/Create_videojuego", [videojuegoController::class, 'create']);
Route::post("/Create_resultados", [ResultadosTorneoController::class, 'result']);
Route::post("/create-tournament", [TorneoController::class, 'createf']);
Route::post("/create_jugadores", [jugadoresController::class, 'another']);
Route::post("/create-tournament/{videojuego}", [TorneoController::class, 'createWithGame']);
Route::get("tournament/{torneo}", [TorneoController::class, "show"]);*/




