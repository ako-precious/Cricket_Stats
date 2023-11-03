<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Bowling_Stats extends Model
{
    use HasFactory;
    protected $table = 'batting__stats'; 

    public function players(): BelongsTo
    {
        return $this->belongsTo(Players::class, 'player_id');
    }
}
