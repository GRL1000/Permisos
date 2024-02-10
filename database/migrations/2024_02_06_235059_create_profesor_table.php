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
        Schema::create('profesor', function (Blueprint $table) {
            $table->id();
            $table->string('num_empleado');
            $table->string('nombre');
            $table->integer('num_horas');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('puesto_id');
            $table->date('inicio_contrato');
            $table->date('fin_contrato');
            $table->timestamps();
            
            // Llaves foráneas
            $table->foreign('division_id')->references('id')->on('division');
            $table->foreign('puesto_id')->references('id')->on('puesto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor');
    }
};
