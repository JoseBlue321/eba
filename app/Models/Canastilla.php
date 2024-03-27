<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Canastilla extends Model
{
    use HasFactory;

    protected $table = 'canastillas';

    protected $fillable = [
        'codigo',
        'nombre',
        'capacidad',
        'dimension',
        'color',
        'caracteristicas'
    ];

    public function detalles(): HasMany
    {
        return $this->hasMany(Detalle::class,'canastilla_id');
    }
}
