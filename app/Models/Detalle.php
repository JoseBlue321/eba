<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detalle extends Model
{
    use HasFactory;
    protected $table = 'detalles';

    protected $fillable = [
        'entrega_id',
        'producto_id',
        'canastilla_id',
        'cantidad',
    ];


    public function canastillas(): BelongsTo
    {
        return $this->belongsTo(Canastilla::class,'canastilla_id');
    }
}
