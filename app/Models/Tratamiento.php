<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Casts\PrecioCast;

class Tratamiento extends Model
{
    protected $casts = [
        'preciop' => PrecioCast::class,
    ];

    public function paciente(): HasMany
    {
        return $this->belongsTo(Paciente::class);
    }
}
