<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use App\Models\Players;
use Illuminate\Http\Request;

class TeamsController extends Controller
{

    public function index()
    {

        return inertia('Teams/Index',['teams' => Teams::all() ]);
    }
    public function show(Teams $team)
    {
        
       $players = Players::where('country_team_id', $team->id )->orderBy('long_name', 'asc')->with('team')->paginate(15);
        //   dd($players);
        return inertia('Teams/Show', ['team' => $team, 'players' => $players ]);
    }
}
