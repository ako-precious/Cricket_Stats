<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;
    protected $table = 'players';

    public function team(): BelongsTo
    {
        return $this->belongsTo(Teams::class, 'country_team_id' );
    }
}
