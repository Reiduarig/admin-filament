<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Tratamiento extends Model
{
    public function paciente(): HasMany
    {
        return $this->belongsTo(Paciente::class);
    }
}
