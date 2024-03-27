<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entrega extends Model
{
    use HasFactory;

    protected $table = 'entregas';

    protected $fillable = [
        'codigo',
        'fecha_emision',
        'fecha_entrega',
        'destino',
        'origen_id',
        'transportadora_id',
        'departamento_id',
        'tipoventa_id',
        'mercado_id'
    ];

    public function origenes(): BelongsTo
    {   return $this->BelongsTo(Origen::class,'origen_id');   }

    public function transportadoras(): BelongsTo
    {   return $this->BelongsTo(Transporte::class,'transportadora_id');   }

    public function departamentos(): BelongsTo
    {   return $this->BelongsTo(Departamento::class,'departamento_id');   }

    public function tipoventas(): BelongsTo
    {   return $this->BelongsTo(Tipoventa::class,'tipoventa_id');   }

    public function mercados(): BelongsTo
    {   return $this->BelongsTo(Mercado::class,'mercado_id');   }

    public function detalles():HasMany
    {
        return $this->hasMany(Detalle::class,'entrega_id');
    }
}
