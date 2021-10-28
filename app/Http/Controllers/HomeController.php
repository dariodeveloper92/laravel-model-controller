<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Metodi () che riporta la rotta su web.php
    public function home() { 
        $name = 'Movies del Database';
        
        return view('home', compact('name'));
    }

        public function contacts() {
        return view('contacts');
    }

    public function about() {
        return view('about');
    }
}
