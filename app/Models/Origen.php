<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Origen extends Model
{
    use HasFactory;

    protected $table = 'origenes';

    protected $fillable = [
        'nombre'
    ];

    public function entregas(): HasMany
    {
        return $this->hasMany(Entrega::class,'origen_id');
    }
}
