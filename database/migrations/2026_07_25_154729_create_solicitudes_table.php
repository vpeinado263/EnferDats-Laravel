<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('institucion');
            $table->string('tipo_institucion')->nullable();
            $table->string('provincia')->nullable();
            $table->string('responsable');
            $table->string('cargo')->nullable();
            $table->string('email');
            $table->string('telefono')->nullable();
            $table->text('objetivos')->nullable(); 
            $table->text('necesidades')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
