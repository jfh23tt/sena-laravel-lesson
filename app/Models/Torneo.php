<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

 class Torneo extends Model
{
     protected $table = "Torneo";
    protected $fillable = [
      
        "nombre", 
         "fecha_inicio",
         "fecha_fin",
        "modalidad",
        "premio"
    ];

    public function videojuego(){
        return $this->belongsTo(VideoJuego::class, "videojuego_id");
    }
    
    
   
}
