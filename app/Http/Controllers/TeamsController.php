<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    
    public function index(){
        
        return inertia('Teams/Index',['Teams'=> Teams::all() ]);

        }
}
