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

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entregas = Entrega::all();
        $canastillas = Canastilla::all();
        return view('entregas/index',[
            'entregas'=>$entregas,
            'canastillas'=>$canastillas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $origen = Origen::all();
        $transportadora = Transporte::all();
        $departamento = Departamento::all();
        $tipoventa = Tipoventa::all();
        $mercado = Mercado::all();
        return view('entregas/create',[
            'origenes'=>$origen,
            'transportadoras'=>$transportadora,
            'departamentos'=>$departamento,
            'tipoventas'=>$tipoventa,
            'mercados'=>$mercado,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'=>['required','integer'],
            'fecha_emision',
            'fecha_entrega',
            'destino',
            'origen_id',
            'transportadora_id',
            'departamento_id',
            'tipoventa_id',
            'mercado_id'
        ]);
        $entrega = Entrega::create([
            'codigo'=>$request->input('codigo'),
            'fecha_emision'=>$request->input('fecha_emision'),
            'fecha_entrega'=>$request->input('fecha_entrega'),
            'destino'=>$request->input('destino'),
            'origen_id'=>$request->input('origen_id'),
            'transportadora_id'=>$request->input('transportadora_id'),
            'departamento_id'=>$request->input('departamento_id'),
            'tipoventa_id'=>$request->input('tipoventa_id'),
            'mercado_id'=>$request->input('mercado_id'),
        ]);
        //$entrega->productos()->attach($request->input('producto_id'));
        return to_route('entregas.index'); 
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
