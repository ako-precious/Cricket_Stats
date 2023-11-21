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
       
     
        return inertia('Index/Index', [
            'highestrunner' => $higestrunner, 'highest_wicket_test' =>  $highest_wicket_test,
            'highest_runner_ODI' => $highest_runner_ODI, 'highest_runner_T20I' => $highest_runner_T20I,
            'highest_runner_First_class' => $highest_runner_First_class, 'highest_wicket_ODI' => $highest_wicket_ODI,
            'highest_wicket_T20I' => $highest_wicket_T20I, 'highest_wicket_First_Class' => $highest_wicket_First_Class
        ]);
    }

    

    public function topBatting(){

        $filters = request('query');

        $topBattingPlayers = Batting_Stats::when($filters, function ($query) use ($filters) {
                $query->where('match_format', $filters);
            })
            ->select('players.long_name as label', 'batting__stats.runs as value')        
            ->join('players', 'batting__stats.player_id', '=', 'players.id')
            ->orderByDesc('batting__stats.runs')
            ->limit(10)
            ->get();
    
        return response()->json($topBattingPlayers);
    }
    public function topBowling(){

        $filters = request('query');

        $topBattingPlayers = Batting_Stats::when($filters, function ($query) use ($filters) {
                $query->where('match_format', $filters);
            })
            ->select('players.long_name as label', 'batting__stats.runs as value')        
            ->join('players', 'batting__stats.player_id', '=', 'players.id')
            ->orderByDesc('batting__stats.runs')
            ->limit(10)
            ->get();
    
        return response()->json($topBattingPlayers);
    }


    public function  compare(Request $request)
    {
     

        $filters =  $request->only([
            'firstName', 'matchFormat', 'secondName'
        ]);
      
        $query =  Batting_Stats::with('player');
        $query2 =  Batting_Stats::with('player');
        
        $bowling_query =  Bowling_Stats::with('player');
        $bowling_query2 =  Bowling_Stats::with('player');


        return inertia('Index/Compare', [
            'filters' => $filters,
            'firstPlayerBatting' => $query
                ->when($filters['firstName'] ?? false, function ($query) use ($filters) {
                    $query->whereHas('player', function ($query) use ($filters) {
                        $query->where('long_name', 'like', '%' . $filters['firstName'] . '%');
                    });
                })
                ->when($filters['matchFormat'] ?? false, function ($query) use ($filters) {
                    $query->where('match_format', $filters['matchFormat']);
                })
                ->first(),
            'secondPlayerBatting' => $query2
                ->when($filters['secondName'] ?? false, function ($query2) use ($filters) {
                    $query2->whereHas('player', function ($query2) use ($filters) {
                        $query2->where('long_name', 'like', '%' . $filters['secondName'] . '%');
                    });
                })
                ->when($filters['matchFormat'] ?? false, function ($query2) use ($filters) {
                    $query2->where('match_format', $filters['matchFormat']);
                })
                ->first(),
            'firstPlayerBowling' => $bowling_query
                ->when($filters['firstName'] ?? false, function ($bowling_query) use ($filters) {
                    $bowling_query->whereHas('player', function ($bowling_query) use ($filters) {
                        $bowling_query->where('long_name', 'like', '%' . $filters['firstName'] . '%');
                    });
                })
                ->when($filters['matchFormat'] ?? false, function ($bowling_query) use ($filters) {
                    $bowling_query->where('match_format', $filters['matchFormat']);
                })
                ->first(),
            'secondPlayerBowling' => $bowling_query2
                ->when($filters['secondName'] ?? false, function ($query) use ($filters) {
                    $query->whereHas('player', function ($query) use ($filters) {
                        $query->where('long_name', 'like', '%' . $filters['secondName'] . '%');
                    });
                })
                ->when($filters['matchFormat'] ?? false, function ($query) use ($filters) {
                    $query->where('match_format', $filters['matchFormat']);
                })
                ->first(),
        ]);
    }
    public function getSuggestions()
    {
        $query = request('query');
        $suggestions = Players::where('long_name', 'like', '%' . $query . '%')->take(6)->pluck('long_name');

        return response()->json($suggestions);
    }
}
