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
        Schema::create('camion', function (Blueprint $table) {
            //$table->id();
            //$table->integer('id_placa',)->unique();
            $table->integer('id_placa')->primary();
            $table->string('placa_camion', 6);
            $table->string('marca', 45);
            $table->string('color',25);
            $table->date('modelo');
            $table->integer('capacidad_toneladas');
            $table->string('transporte_codigo',45);
            $table->timestamps();
            //$table->string('transporte_codigo',45);
            //$table->foreignId('transporte_codigo')->references('codigo')->on('transporte');
            /*$table->foreignId('codigo_transporte')
                ->nullable()
                ->constrained('transporte')
                ->cascadeOnUpdate()
                ->nullOnDelete();*/

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camion');
    }
};
