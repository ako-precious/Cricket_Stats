<?php

namespace App\Http\Controllers;

use App\Models\Bowling_Stats;
use Illuminate\Http\Request;

class BowlingStatsController extends Controller
{
    public function index(Request $request)
    {
        // dd(Players::all());
        $filters =  $request->only([
            'name', 'matchFormat', 'gender', 'wicketsFrom', 'wicketsTo'
        ]);
        $query =  Bowling_Stats::with('player');

        return inertia('Bowlings/Index', [
            'filters' => $filters,
            'bowlings' => $query
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
                    $query->where('match_format', $filters['matchFormat']);
                })
                ->when($filters['wicketsFrom'] ?? false, function ($query) use ($filters) {
                    $query->where('wickets', '>=', $filters['wicketsFrom']);
                })
                ->when($filters['wicketsTo'] ?? false, function ($query) use ($filters) {
                    $query->where('wickets', '<=', $filters['wicketsTo']);
                })
                ->paginate(15)
                ->withQueryString()
        ]);
      }

    public function show(Bowling_Stats $bowling)
    {
        // $comment = bowlings::find(53826);
       
        //   dd($comment);
        return inertia('bowlings/Show', ['bowling' => $bowling,]);
    }
}

