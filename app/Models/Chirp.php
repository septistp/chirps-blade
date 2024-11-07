<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    // Menambahkan relasi user dengan method belongsTo
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
