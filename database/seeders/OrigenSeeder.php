<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Origen;

class OrigenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Origen::create([
            'nombre'=>'ACHACACHI',
        ]);
        Origen::create([
            'nombre'=>'CHALLAPATA',
        ]);
        Origen::create([
            'nombre'=>'CARANAVI',
        ]);
        Origen::create([
            'nombre'=>'SAN LORENZO',
        ]);
        Origen::create([
            'nombre'=>'VALLE SACTA',
        ]);
        Origen::create([
            'nombre'=>'VILLA 14 SEPTIEMBRE',
        ]);
        Origen::create([
            'nombre'=>'IVIRGARZAMA',
        ]);
        Origen::create([
            'nombre'=>'SAN ANDRES',
        ]);
        Origen::create([
            'nombre'=>'ALMACEN VILLA FATIMA',
        ]);
        Origen::create([
            'nombre'=>'MAQUILA QUILLACOLLO
            ',
        ]);
    }
}
