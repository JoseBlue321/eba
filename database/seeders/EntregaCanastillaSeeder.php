<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Detalle;

class DetalleSeeder extends Seeder
{
    public function run(): void
    {
        EntregaCanastilla::create([
            'entrega_id'=>1,
            'canastilla_id'=>2,
            'cantidad'=>2,
        ]);
        EntregaCanastilla::create([
            'entrega_id'=>1,
            'canastilla_id'=>1,
            'cantidad'=>3,
        ]);
        EntregaCanastilla::create([
            'entrega_id'=>2,
            'canastilla_id'=>4,
            'cantidad'=>3,
        ]);
        EntregaCanastilla::create([
            'entrega_id'=>1,
            'canastilla_id'=>5,
            'cantidad'=>5,
        ]);
        EntregaCanastilla::create([
            'entrega_id'=>2,
            'canastilla_id'=>6,
            'cantidad'=>4,
        ]);
    }
}
