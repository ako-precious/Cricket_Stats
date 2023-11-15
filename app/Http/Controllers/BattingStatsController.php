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

        // if( $filters['name'] ){
        //   $query->where('name', 'like', '%'.$filters['name'].'%' );
        // }
        if( $filters['matchFormat'] ?? false ){
          $query->where('match_format', '=', $filters['matchFormat'] );
        }
        if( $filters['runsFrom'] ?? false ){
          $query->where('runs', '>=', $filters['runsFrom'] );
        }
        if( $filters['runsTo'] ?? false){
          $query->where('runs', '<=', $filters['runsTo'] );
        }
        return inertia('Battings/Index', [
            'filters' => $filters,
            'battings' => $query->paginate(15)->withQueryString()
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
