<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;
    protected $table = 'players';

    public function team(): BelongsTo
    {
        return $this->belongsTo(Teams::class, 'country_team_id' );
    }

    public function battling(): HasMany
    {
        return $this->hasMany(Batting_Stats::class);
    }

    public function bowling(): HasMany
    {
        return $this->hasMany(Bowling_Stats::class);
    }
}
