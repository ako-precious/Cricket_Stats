<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Batting_Stats extends Model
{
    use HasFactory;

    protected $table = 'battling__stats';

    public function player(): BelongsTo
    {
        return $this->belongsTo(Players::class, 'player_id' );
    }
}
