<?php

namespace App\Http\Controllers;

use App\Models\Batting_Stats;
use Illuminate\Http\Request;

class BattingStatsController extends Controller
{
    public function index()
    {
        // dd(Batting_Stats::all());
        $comment = Batting_Stats::find(53826);
 
        dd($comment->player->long_name);

        return inertia('Battings/Index',['battings' => Batting_Stats::with('players')->paginate(15) ]);
    }
}
