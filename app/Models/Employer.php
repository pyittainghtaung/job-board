<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    use HasFactory;

    // This is one to many relationship
    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }

    // This is one to one relationship with user table style
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
