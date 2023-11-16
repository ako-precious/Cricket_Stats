<?php

namespace App\Http\Controllers;

use App\Models\Batting_Stats;
use Illuminate\Http\Request;

class BattingStatsController extends Controller
{
    public function index(Request $request)
    {
        // dd(Players::all());
        $filters =  $request->only([
            'name', 'matchFormat', 'gender', 'runsFrom', 'runsTo'
        ]);
        $query =  Batting_Stats::with('player');

        
        // if( $filters['matchFormat'] ?? false ){
        //   $query->where('match_format', '=', $filters['matchFormat'] );
        // }
        // if( $filters['runsFrom'] ?? false ){
        //   $query->where('runs', '>=', $filters['runsFrom'] );
        // }
        // if( $filters['runsTo'] ?? false){
        //   $query->where('runs', '<=', $filters['runsTo'] );
        // }
        return inertia('Battings/Index', [
            'filters' => $filters,
            'battings' => $query
                ->when($filters['name'] ?? false, function ($query) use ($filters) {
                    $query->whereHas('player', function ($query) use ($filters) {
                        $query->where('long_name', 'like', '%' . $filters['name'] . '%');
                    });
                })
                ->when($filters['gender'] ?? false, function ($query) use ($filters) {
                    $query->whereHas('player', function ($query) use ($filters) {
                        $query->where('gender',  $filters['gender']);
                    });
                })
                ->when($filters['matchFormat'] ?? false, function ($query) use ($filters) {
                    $query->where('match_format', '=', $filters['matchFormat']);
                })
                ->when($filters['runsFrom'] ?? false, function ($query) use ($filters) {
                    $query->where('runs', '>=', $filters['runsFrom']);
                })
                ->when($filters['runsTo'] ?? false, function ($query) use ($filters) {
                    $query->where('runs', '<=', $filters['runsTo']);
                })
                ->paginate(15)
                ->withQueryString()
        ]);
    }

    public function show(Batting_Stats $batting)
    {
        $comment = Batting_Stats::find(1);

        // dd($comment->player->long_name);
        // dd(Players::all());
        return inertia('Battings/Show', ['batting' => $batting]);
    }
}
