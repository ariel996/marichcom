<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sortie extends Model
{
    use HasFactory;

    protected $guarderd = [];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
