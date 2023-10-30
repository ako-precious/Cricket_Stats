<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    
    public function index(){
        dd(Teams::all());
        return inertia('Teams/Index',['Teams' => Teams::all() ]);

        }
}
