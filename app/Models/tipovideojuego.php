<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tipovideojuego extends Model
{
     protected $table = "tipovideojuego";
    protected $fillable = [
        "id_tipovideojuego", 
        "nombre"

    ];
   
}