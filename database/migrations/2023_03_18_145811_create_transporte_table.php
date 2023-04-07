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
        Schema::create('transporte', function (Blueprint $table) {
            //$table->id();
            //$table->string('codigo')->unique();
            $table->String('codigo',45)->primary()->unique();
            $table->string('nombre', 105);
            $table->string('razon_social',175);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transporte');
    }
};
