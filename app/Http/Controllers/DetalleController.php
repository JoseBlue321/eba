<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle;

class DetalleController extends Controller
{

    public function index()
    {
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Detalle::create([
            'entrega_id'=>$request->input('entrega_id'),
            'producto_id'=>$request->input('producto_id'),
            'canastilla_id'=>$request->input('canastilla_id'),
            'cantidad'=>$request->input('cantidad'),
        ]);
        return to_route('entregas.index');
    }

    public function show(string $id)
    {
        
        return view('detalles/index',[$id=>'id']);
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
