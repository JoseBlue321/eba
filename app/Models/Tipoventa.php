<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipoventa extends Model
{
    use HasFactory;

    protected $table = 'tipoventas';

    protected $fillable = [
        'name'
    ];

    public function entregas(): HasMany
    {
        return $this->HasMany(Entrega::class,'tipoventa_id');
    }
}
