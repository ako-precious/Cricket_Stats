<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        dd(Players::all());
        return inertia('Players/Index',['Players' => Players::all() ]);
    }
    // public function show(Players $player)
    // {
    //     dd(Players::all());
    //     return inertia('Players/Show', ['player' => $player]);
    // }
}
