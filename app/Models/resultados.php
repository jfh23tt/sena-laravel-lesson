<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class resultados extends Model
{
    protected $table = "resultados";
    protected $fillable = [
        "id_torneo", 
        "fecha_fin",
        "equipo",
        "modalidad",
         "premio"

    ];
     public function Torneo(){
        return $this->belongsTo(VideoJuego::class, "torneo_id");
    }
}