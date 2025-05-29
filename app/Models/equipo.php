<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
   protected $table = "equipo";
    protected $fillable = [
         
        "nombre",
        "lider"
        
       
    ];
}
