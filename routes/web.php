<?php

use App\Http\Controllers\BattingStatsController;
use App\Http\Controllers\BowlingStatsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PredictionController;
use App\Models\Players;
use App\Models\Teams;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {

  // dd(Auth::user());


  return inertia('Welcome', ['user' => Auth::user()]);
})->name('welcome');
Route::get('/case-study', function () {

  // dd(Auth::user());
  
  
  return inertia('CaseStudy', ['user' => Auth::user()]);
})->name('case-study');


Route::get('/quiz', function () {

  // dd(Auth::user());
  return inertia('Quiz', ['user' => Auth::user()]);
})->name('quiz');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard')->middleware('auth');
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


Route::get('login', [AuthController::class, 'create'])
  ->name('login');

// Route::get('lo', [AuthController::class, 'create'])
//   ->name('login');

Route::post('login', [AuthController::class, 'store'])
  ->name('login.store');

Route::delete('logout', [AuthController::class, 'destroy'])
  ->name('logout');


Route::get('register', [AuthController::class, 'register'])
  ->name('register');

Route::post('register', [AuthController::class, 'storeRegistration'])
  ->name('register.store');
