<?php

namespace App\Http\Controllers;

use App\Models\Bowling_Stats;
use Illuminate\Http\Request;

class BowlingStatsController extends Controller
{
    public function index()
    {
        // dd(Bowling_Stats::all());

        return inertia('Bowlings/Index',['bowlings' => Bowling_Stats::with('player')->paginate(15) ]);
    }

    public function show(Bowling_Stats $bowling)
    {
        // $comment = bowlings::find(53826);
       
        // dd($bowling->team->flag_url);
    
        //   dd($comment);
        return inertia('bowlings/Show', ['bowling' => $bowling, ]);
    }
}

