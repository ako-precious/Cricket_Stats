<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{

    public function index()
    {

        return inertia('Teams/Index',['teams' => Teams::all() ]);
    }
    public function show(Teams $team)
    {
        dd(Teams::all());
        return inertia('Teams/Show', ['team' => $team]);
    }
}
