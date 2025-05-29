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
        Schema::create('Torneo', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("fecha_inicio");
            $table->string("fecha_fin");
            $table->string("modalidad");
            $table->string("premio");
            $table->timestamps();
           
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneos');
    }
};
