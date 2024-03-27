<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            OrigenSeeder::class,
            TransporteSeeder::class,
            DepartamentoSeeder::class,
            TipoventaSeeder::class,
            MercadoSeeder::class,
            EntregaSeeder::class,
            CanastillaSeeder::class,
            DetalleSeeder::class,
        ]);
    }
}
