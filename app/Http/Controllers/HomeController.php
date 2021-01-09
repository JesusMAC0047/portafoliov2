<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Portafolio JA";
    
        return view('home')->with(compact('title'));;
    }
}