<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $message = "Hello World";
        return inertia('Index/Index',['message'=> $message]);

        }
}
