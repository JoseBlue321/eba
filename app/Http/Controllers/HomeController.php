<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrega;
use App\Models\Origen;
use App\Models\Transporte;
use App\Models\Departamento; 
use App\Models\Tipoventa; 
use App\Models\Mercado; 
use App\Models\Canastilla;

class HomeController extends Controller
{
    //************Index Entregas************ */
    public function entrega(){
        $entregas = Entrega::all();
        //$canastillas = Canastilla::all();
        return view('entrega',[
            'entregas'=>$entregas,
            //'canastillas'=>$canastillas,
        ]);
    }

    //****************Create Entregas******************* */
    public function create()
    {
        $origen = Origen::all();
        $transportadora = Transporte::all();
        $departamento = Departamento::all();
        $tipoventa = Tipoventa::all();
        $mercado = Mercado::all();
        $canastillas = Canastilla::all();
        return view('entregas/create',[
            'origenes'=>$origen,
            'transportadoras'=>$transportadora,
            'departamentos'=>$departamento,
            'tipoventas'=>$tipoventa,
            'mercados'=>$mercado,
            'canastillas'=>$canastillas,
        ]);
    }
    
    




    public function devolucion(){
        return view('devolucion');
    } 
    public function reporte(){
        return view('reporte');
    } 
}
