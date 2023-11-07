<?php

namespace App\Http\Controllers;

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
 
        //   dd($comment->team->long_name);
        // dd($player);
        return inertia('Players/Show', ['player' => $player->with('batting','bowling','team')]);
    }
}
