<?php

namespace App\Http\Controllers;

use App\Models\Batting_Stats;
use Illuminate\Http\Request;

class BattingStatsController extends Controller
{
    public function index(Request $request)
    {
        // dd(Players::all());

        return inertia('Battings/Index', [
            'filters' => $request->only([
                'name', 'matchFormat', 'gender', 'runsFrom', 'runsTo'
            ]),
            'battings' => Batting_Stats::with('player')->paginate(15)
        ]);
    }

    public function show()
    {
        $comment = Batting_Stats::find(1);

        dd($comment->player->long_name);
        // dd(Players::all());
        // return inertia('Players/Show', ['player' => $player]);
    }
}
