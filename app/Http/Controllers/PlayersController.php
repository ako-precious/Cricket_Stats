<?php

namespace App\Http\Controllers;

use App\Models\Batting_Stats;
use App\Models\Bowling_Stats;
use App\Models\Players;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        // dd(Players::all());

        return inertia('Players/Index',['players' => Players::orderBy('long_name', 'asc')->with('team')->paginate(15) ]);
    }
    public function show(Players $player)
    {
        // $comment = Players::find(53826);
        $batting = Batting_Stats::with('player')->where('player_id', $player->id )->orderBy('runs', 'desc') ;
       

        $bowling = Bowling_Stats::with('player')->where('player_id', $player->id)->orderBy('wickets', 'desc') ;
        // dd($player->team->flag_url);
 
        //   dd($comment);
        return inertia('Players/Show', ['player' => $player, 'batting'=> $batting, 'bowling' => $bowling ]);
    }
}
