<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Decodeur extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function client(): BelongsToMany
    {
        return $this->belongsToMany(Client::class);
    }
}
