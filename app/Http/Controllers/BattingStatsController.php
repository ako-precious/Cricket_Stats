<?php

namespace App\Http\Controllers;

use App\Models\Batting_Stats;
use Illuminate\Http\Request;

class BattingStatsController extends Controller
{
    public function index()
    {
        dd(Batting_Stats::all());

        return inertia('Battings/Index',['battings' => Batting_Stats::orderBy('long_name', 'asc')->with('team')->paginate(15) ]);
    }
}
