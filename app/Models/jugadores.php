<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jugadores extends Model
{
protected $table = "jugadores";
    protected $fillable = [
        "nombre", 
        "nick",
        "correo",
        "telefono",
        "pais"
       
    ];
}
