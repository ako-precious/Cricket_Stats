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
        $comment = Teams::find($team);
        $data = Players::where('country_team_id', 1)->get() ;
          dd($data);
        return inertia('Teams/Show', ['team' => $team]);
    }
}
