<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Camion;
use App\Models\camionModel;
use App\Models\Transporte;
use App\Models\transporteModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        $transportes = new Transporte();
        //$transportes->id='123ABC';
        $transportes->nombre='Compañía 1';
        $transportes->razon_social='Sociedad Anonima';
        $transportes->save();

        $camions = new Camion();
        //$camions->id='1';
        $camions->placa_camion='ABC123';
        $camions->marca='Toyota';
        $camions->color='Blanco';
        $camions->modelo='2023';
        $camions->capacidad_toneladas='2';
        $camions->transporte_id='1';
        $camions->save();
        */
        Transporte::factory(100)->create();
        Camion::factory(100)->create();
    }
}
