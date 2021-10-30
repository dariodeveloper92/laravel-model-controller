<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* Nome Tabella del Database */
use App\Movie;

class MovieController extends Controller
{
    // Metodi () che riportano alle rotte su web.php
    public function listMovies() {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }

    public function movieDetail($id) {
        /* Select * FROM movies WHERE id = $id */
        $movie = Movie::where('id', $id)->get();

        return view('dettagli', compact('movie'));
    }
}
