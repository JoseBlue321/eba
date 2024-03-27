<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Canastilla;

class CanastillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Canastilla::create([
            'codigo'=>1,
            'nombre'=>'canastillo estandar celeste',
            'capacidad'=>'30 litros',
            'dimension'=>'Largo 59 [cm], ancho 39,5 [cm], alto 24 [cm]*± 2[cm].',
            'color'=>'celeste',
            'caracteristicas'=>'Adquisición el 2022
            Fabricación en polietileno de alta densidad, materia prima 100% virgen
            Resistencia al frio de hasta -15°C y al calor hasta 60°C
            Serigrafía de alto relieve con la leyenda “Prohibida su venta” y el logo de la empresa EBA
            ',
        ]);
        Canastilla::create([
            'codigo'=>2,
            'nombre'=>'canastillo estandar',
            'capacidad'=>'30 litros',
            'dimension'=>'Largo 59 [cm], ancho 39,5 [cm], alto 24 [cm]*± 2[cm].',
            'color'=>'varios',
            'caracteristicas'=>'Fabricación en polietileno de alta densidad, materia prima 100% virgen
            Resistencia al frio de hasta -15°C y al calor hasta 60°C',
        ]);
        Canastilla::create([
            'codigo'=>3,
            'nombre'=>'canastillo multicolor',
            'capacidad'=>'30 litros',
            'dimension'=>'Largo 54,5 [cm], ancho 36 [cm], alto 30 [cm]*± 2[cm].',
            'color'=>'varios',
            'caracteristicas'=>'Identificativo LACTEOSBOL letras perforadas.',
        ]);
        Canastilla::create([
            'codigo'=>4,
            'nombre'=>'canastillo multiuse negro',
            'capacidad'=>'21 litros',
            'dimension'=>'Largo 51,5 [cm], ancho 29,5 [cm], alto 26,5 [cm]*± 2[cm].',
            'color'=>'negro',
            'caracteristicas'=>'fabricado con materia reciclado',
        ]);
        Canastilla::create([
            'codigo'=>5,
            'nombre'=>'caja lechera',
            'capacidad'=>'20 litros',
            'dimension'=>'Largo 40 [cm], ancho 33,5 [cm], alto 25,5 [cm]*± 2[cm].',
            'color'=>'variado',
            'caracteristicas'=>'Fabricación en polietileno de alta densidad
            Serigrafía del logo LACTEOSBOL y EBA color blanco ',
        ]);
        Canastilla::create([
            'codigo'=>6,
            'nombre'=>'caja lechera negra',
            'capacidad'=>'20 litros',
            'dimension'=>'Largo 40 [cm], ancho 33,5 [cm], alto 25,5 [cm]*± 2[cm].',
            'color'=>'negro',
            'caracteristicas'=>'Fabricado con material reciclado 
            Serigrafía del logo de EBA color blanco',
        ]);
        Canastilla::create([
            'codigo'=>7,
            'nombre'=>'bandeja lechera',
            'capacidad'=>'25 litros',
            'dimension'=>'Largo 50 [cm], ancho 40 [cm], alto 28 [cm]*± 3[cm].',
            'color'=>'celeste',
            'caracteristicas'=>'Fabricación en polietileno de alta densidad.
            Serigrafía del logo LACTEOSBOL PROHIBIDA SU VENTA color azul.',
        ]);
        Canastilla::create([
            'codigo'=>8,
            'nombre'=>'canastillo estandar negro',
            'capacidad'=>'30 litros',
            'dimension'=>'Largo 59 [cm], ancho 39,5 [cm], alto 24 [cm]*± 2[cm].',
            'color'=>'negro',
            'caracteristicas'=>'',
        ]);
        Canastilla::create([
            'codigo'=>9,
            'nombre'=>'canastillo estandar plomo',
            'capacidad'=>'30 litros',
            'dimension'=>'Largo 59 [cm], ancho 39,5 [cm], alto 24 [cm]*± 2[cm].',
            'color'=>'plomo',
            'caracteristicas'=>'',
        ]);
    }
}
