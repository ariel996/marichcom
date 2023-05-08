<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

    public function decodeur(): BelongsToMany
    {
        return $this->belongsToMany(Decodeur::class)->withPivot(['date', 'montant', 'motif']);
    }

    public function entries(): HasMany
    {
        return $this->hasMany(Entry::class);
    }

    public function sorties(): HasMany
    {
        return $this->hasMany(Sortie::class);
    }
}
