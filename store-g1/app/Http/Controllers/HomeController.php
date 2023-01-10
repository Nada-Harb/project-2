<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //actions
    public function index()
    {
        return view('front.index');
    }

    public function show($name)
    {
        if( !View::exists("front.pages.$name"))
        {
            abort(404);
        }
        return view("front.pages.$name");
    }

    
}
