<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipoventa;


class TipoventaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipoventa::create([
            'nombre'=>'VENTA',
        ]);
        Tipoventa::create([
            'nombre'=>'REPOSICION',
        ]);
        Tipoventa::create([
            'nombre'=>'TRASPASO',
        ]);
        Tipoventa::create([
            'nombre'=>'DEGUSTACION',
        ]);
    }
}
