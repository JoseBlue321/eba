<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function entregas():BelongsToMany
    {
        return $this->belongsToMany(Entrega::class)->withPivot('cantidad');
    }
}
