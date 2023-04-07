<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\camionModel;
use App\Models\transporteModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $transporte = new transporteModel();
        $transporte->codigo='abc12345';
        $transporte->nombre='proveedor3';
        $transporte->razon_social='Entre Rios';
        $transporte->save();

        $camion = new camionModel();
        $camion->id_placa='1';
        $camion->placa_camion='abc123';
        $camion->marca='Foton';
        $camion->color='azul';
        $camion->modelo='2023-03-03';
        $camion->capacidad_toneladas='2';
        $camion->transporte_codigo='abc12345';
        $camion->save();
    }
}
