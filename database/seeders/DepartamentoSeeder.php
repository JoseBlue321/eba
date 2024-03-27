<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departamento::create([
            'nombre'=>'LA PAZ'
        ]);
        Departamento::create([
            'nombre'=>'COCHABAMBA'
        ]);
        Departamento::create([
            'nombre'=>'SANTA CRUZ'
        ]);
        Departamento::create([
            'nombre'=>'SUCRE'
        ]);
        Departamento::create([
            'nombre'=>'TARIJA'
        ]);
        Departamento::create([
            'nombre'=>'ORURO'
        ]);
        Departamento::create([
            'nombre'=>'POTOSI'
        ]);
        Departamento::create([
            'nombre'=>'BENI'
        ]);
        Departamento::create([
            'nombre'=>'PANDO'
        ]);
    }
}
