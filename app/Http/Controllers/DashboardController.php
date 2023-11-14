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

        $higestrunner = Batting_Stats::with('player')->where('match_format', 'Tests')->orderBy('runs', 'desc')->first() ;
        $highest_runner_ODI = Batting_Stats::with('player')->where('match_format', 'ODI')->orderBy('runs', 'desc')->first() ;
        $highest_runner_T20I = Batting_Stats::with('player')->where('match_format', 'T20I')->orderBy('runs', 'desc')->first() ;
        $highest_runner_First_class = Batting_Stats::with('player')->where('match_format', 'First-Class')->orderBy('runs', 'desc')->first() ;
       

        $highest_wicket_test = Bowling_Stats::with('player')->where('match_format', 'Tests')->orderBy('wickets', 'desc')->first() ;
        $highest_wicket_ODI = Bowling_Stats::with('player')->where('match_format', 'ODI')->orderBy('wickets', 'desc')->first() ;
        $highest_wicket_T20I = Bowling_Stats::with('player')->where('match_format', 'T20I')->orderBy('wickets', 'desc')->first() ;
        $highest_wicket_First_Class = Bowling_Stats::with('player')->where('match_format', 'First-Class')->orderBy('wickets', 'desc')->first() ;
        // dd($higestrunner);
        return inertia('Index/Index',['highestrunner'=> $higestrunner, 'highest_wicket_test' =>  $highest_wicket_test, 
        'highest_runner_ODI'=> $highest_runner_ODI, 'highest_runner_T20I' => $highest_runner_T20I,
        'highest_runner_First_class'=>$highest_runner_First_class, 'highest_wicket_ODI' => $highest_wicket_ODI,
         'highest_wicket_T20I' => $highest_wicket_T20I, 'highest_wicket_First_Class' => $highest_wicket_First_Class ]);

        }

        public function  compare(){
            return inertia('Index/Compare',[]);
        }
}
