<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class equiposjugadores extends Model
{
   protected $table = "equiposjugadores";
    protected $fillable = [
        "id_jugadores", 
        "id_equipo",
        "id_torneo",
        
    ];
}

