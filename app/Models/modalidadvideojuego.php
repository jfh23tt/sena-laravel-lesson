<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class modalidadvideojuego extends Model
{
    protected $table = "modalidadvideojuego";
    protected $fillable = [
        "id_modalidad", 
        "id_videojuego",
      
       
    ];
}

