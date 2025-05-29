<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->string('id_torneo');
            $table->string('fecha_fin');
            $table->string('equipo');
            $table->string('modalidad');
            $table->string('premio');
            $table->timestamps();
        });
         
           
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
