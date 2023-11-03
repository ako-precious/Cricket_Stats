<?php

namespace App\Http\Controllers;

use App\Models\Batting_Stats;
use Illuminate\Http\Request;

class BattingStatsController extends Controller
{
    public function index()
    {
        // dd(Players::all());

        return inertia('Battings/Index',['battings' => Batting_Stats::with('player')->paginate(15) ]);
    }

    public function show()
    {
        $comment = Batting_Stats::find(1);
 
          dd($comment->player->long_name);
        // dd(Players::all());
        // return inertia('Players/Show', ['player' => $player]);
    }
}

// Alter table [CricketStats].[dbo].[battling__stats] Alter Column player_id bigint
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column matches int
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column innings int
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column notouts int
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column runs bigint
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column high_score int
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column average float(2)
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column balls_faced int
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column strike_rate float(2)
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column hundreds int
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column fifties int
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column fours int
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column sixes int
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column catches int
// Alter table [CricketStats].[dbo].[battling__stats] Alter Column stumps int