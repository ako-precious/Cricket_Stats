<?php

use App\Http\Controllers\BattingStatsController;
use App\Http\Controllers\BowlingStatsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\PredictionController;
use App\Models\Players;
use App\Models\Teams;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){

    return inertia('Welcome', [
        
    ]);
} );
Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard');
Route::get('/compare', [DashboardController::class, 'compare']);
Route::get('/api/suggestions', [DashboardController::class, 'getSuggestions']);
Route::get('/top-batting-players', [DashboardController::class, 'topBatting']);
Route::get('/top-bowling-players', [DashboardController::class, 'topBowling']);
Route::post('/predict-runs', [PredictionController::class, 'predict']);
Route::get('/predict-run', [PredictionController::class, 'index']);

Route::resource('teams', TeamsController::class);
Route::resource('players', PlayersController::class);
Route::resource('battings', BattingStatsController::class);
Route::resource('bowlings', BowlingStatsController::class);
