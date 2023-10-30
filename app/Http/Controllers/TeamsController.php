<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    
    public function index(){
        $message = "Hello World";
        return inertia('Teams',['message'=> $message]);

        }
}
