<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transporte;

class TransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transporte::create([
            'nombre'=>'IRENE',
        ]);
        Transporte::create([
            'nombre'=>'KAPAC',
        ]);
        Transporte::create([
            'nombre'=>'CANCHARI',
        ]);
        Transporte::create([
            'nombre'=>'BUSTOS',
        ]);
        Transporte::create([
            'nombre'=>'FLORES',
        ]);
        
    }
}
