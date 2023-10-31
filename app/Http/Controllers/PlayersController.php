<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        // dd(Players::all());

        return inertia('Players/Index',['players' => Players::orderBy('long_name', 'asc')->paginate(15) ]);
    }
    // public function show(Players $player)
    // {
    //     dd(Players::all());
    //     return inertia('Players/Show', ['player' => $player]);
    // }
}
