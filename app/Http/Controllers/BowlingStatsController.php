<?php

namespace App\Http\Controllers;

use App\Models\Bowling_Stats;
use Illuminate\Http\Request;

class BowlingStatsController extends Controller
{
    public function index()
    {
        // dd(Bowling_Stats::all());

        return inertia('Bowlings/Index',['bowling' => Bowling_Stats::with('player')->paginate(15) ]);
    }
}
