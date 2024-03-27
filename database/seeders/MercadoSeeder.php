<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mercado;

class MercadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mercado::create([
            'nombre'=>'ABIERTO',
        ]);
        Mercado::create([
            'nombre'=>'ACE',
        ]);
        Mercado::create([
            'nombre'=>'SUBCIDIO',
        ]);
    }
}
