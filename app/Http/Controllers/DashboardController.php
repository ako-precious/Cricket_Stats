<?php

namespace App\Http\Controllers;

use App\Models\Bowling_Stats;
use App\Models\Batting_Stats;
use App\Models\Teams;
use App\Models\Players;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // HIGHEST SCORER IN MEN'S TEST CRICKET

        $higestrunner = Batting_Stats::with('player')->where('match_format', 'Tests')->orderBy('runs', 'desc')->first();
        $highest_runner_ODI = Batting_Stats::with('player')->where('match_format', 'ODI')->orderBy('runs', 'desc')->first();
        $highest_runner_T20I = Batting_Stats::with('player')->where('match_format', 'T20I')->orderBy('runs', 'desc')->first();
        $highest_runner_First_class = Batting_Stats::with('player')->where('match_format', 'First-Class')->orderBy('runs', 'desc')->first();


        $highest_wicket_test = Bowling_Stats::with('player')->where('match_format', 'Tests')->orderBy('wickets', 'desc')->first();
        $highest_wicket_ODI = Bowling_Stats::with('player')->where('match_format', 'ODI')->orderBy('wickets', 'desc')->first();
        $highest_wicket_T20I = Bowling_Stats::with('player')->where('match_format', 'T20I')->orderBy('wickets', 'desc')->first();
        $highest_wicket_First_Class = Bowling_Stats::with('player')->where('match_format', 'First-Class')->orderBy('wickets', 'desc')->first();
        // dd($higestrunner);
        return inertia('Index/Index', [
            'highestrunner' => $higestrunner, 'highest_wicket_test' =>  $highest_wicket_test,
            'highest_runner_ODI' => $highest_runner_ODI, 'highest_runner_T20I' => $highest_runner_T20I,
            'highest_runner_First_class' => $highest_runner_First_class, 'highest_wicket_ODI' => $highest_wicket_ODI,
            'highest_wicket_T20I' => $highest_wicket_T20I, 'highest_wicket_First_Class' => $highest_wicket_First_Class
        ]);
    }

    public function  compare(Request $request)
    {
        $filters =  $request->only([
            'firstName', 'matchFormat', 'secondName'
        ]);



        if ($filters['firstName'] ?? false) {
            $firstPlayer = Players::where('long_name', 'like', '%' . $filters['firstName'] . '%')->first();;
        }

        if ($filters['secondName'] ?? false) {
            $secondPlayer = Players::where('long_name', 'like', '%' . $filters['secondName'] . '%')->first();;
        }

        if ($filters['matchFormat'] ?? false) {
            $secondPlayer = Batting_Stats::where('match_format', '=', $filters['matchFormat']); 
        }
        
        
      

        dd($secondPlayer);
        // $firstPlayer = Players::when( $filters['matchFormat'] ?? false,
        // fn ($query, $value) => $query->where('match_format', '=', $value))

        return inertia('Index/Compare', ['filters' => $filters,]);
    }
}
