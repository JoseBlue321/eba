<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entrega;

class EntregaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entrega=Entrega::create([
            'codigo'=>'111',
            'fecha_emision'=>'2023/01/10',
            'fecha_entrega'=>'2023/01/15',
            'destino'=>'GAM SUCRE',
            'origen_id'=>1,
            'transportadora_id'=>1,
            'departamento_id'=>1,
            'tipoventa_id'=>1,
            'mercado_id'=>1,
        ]);
        Entrega::create([
            'codigo'=>'222',
            'fecha_emision'=>'2023/02/10',
            'fecha_entrega'=>'2023/02/15',
            'destino'=>'GAM QUIABAYA',
            'origen_id'=>2,
            'transportadora_id'=>2,
            'departamento_id'=>2,
            'tipoventa_id'=>2,
            'mercado_id'=>2,
        ]);
    }
}
