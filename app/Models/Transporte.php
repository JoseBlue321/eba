<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transporte extends Model
{
    use HasFactory;

    protected $table = 'transportadoras';

    protected $fillable = [
        'name'
    ];

    public function entregas(): HasMany
    {
        return $this->HasMany(Entrega::class,'transportadora_id');
    }
}
