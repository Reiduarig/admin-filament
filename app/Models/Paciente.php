<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Paciente extends Model
{
    public function pacientes(): HasMany
    {
        return $this->belongsTo(Cliente::class);
    }

    public function tratamientos(): HasMany
    {
        return $this->hasMany(Tratamiento::class);
    }
}
