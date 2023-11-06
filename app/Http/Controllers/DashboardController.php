<?php

namespace App\Http\Controllers;
use App\Models\Bowling_Stats;
use App\Models\Batting_Stats;
use App\Models\Teams;
use App\Models\Players;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // HIGHEST SCORER IN MEN'S TEST CRICKET

        $higestrunner = Batting_Stats::with('player')->where('match-format', 'Tests')->orderBy('runs', 'desc')->first() ;
        $highest_wicket_test = Bowling_Stats::with('player')->where('match_format', 'Tests')->orderBy('wickets', 'desc')->first() ;
        // dd($higestrunner);
        return inertia('Index/Index',['highestrunner'=> $higestrunner, 'highest_wicket_test' =>  $highest_wicket_test]);

        }
}
