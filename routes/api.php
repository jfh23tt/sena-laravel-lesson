<?php

use App\Http\Controllers\jugadoresController;
use App\Http\Controllers\ModalidadController;
use App\Http\Controllers\TorneoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\videojuegoController;
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
Route::post("/Creat_equipo", [EquipoController::class, 'create']);
Route::post("/Create_modalidad", [ModalidadController::class, 'create4']);
Route::post("/Create_videojuego", [videojuegoController::class, 'create']);
Route::post("/Create_resultados", [resultadosController::class, 'result']);
Route::post("/create-tournament", [TorneoController::class, 'createf']);
Route::post("/create_jugadores", [jugadoresController::class, 'another']);
Route::post("/create-tournament/{videojuego}", [TorneoController::class, 'createWithGame']);
Route::get("tournament/{torneo}", [TorneoController::class, "show"]);




