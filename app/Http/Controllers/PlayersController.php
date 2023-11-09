<?php

namespace App\Http\Controllers;

use App\Models\Batting_Stats;
use App\Models\Bowling_Stats;
use App\Models\Teams;
use App\Models\Players;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        // dd(Players::all());
        // dd(($routeName));
        return inertia('Players/Index',['players' => Players::orderBy('long_name', 'asc')->with('team')->paginate(15), ]);
    }
    public function show(Players $player)
    {
        // $comment = Players::find(53826);
        $battings = Batting_Stats::with('player')->where('player_id', $player->id )->orderBy('runs', 'desc')->get() ;
       
        $team = Teams::where('id', $player->country_team_id )->first();

        $bowlings = Bowling_Stats::with('player')->where('player_id', $player->id)->orderBy('wickets', 'desc')->get() ;
        // dd($team);
 
        //   dd(  $battings);
        return inertia('Players/Show', ['player' => $player, 'battings'=> $battings, 'bowlings' => $bowlings, 'team' => $team ]);
    }
}
