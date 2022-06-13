<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        /* dd($movies); */   // Controllo tramite DD della variabile -> Movie è il mio Model
        /* Ora avvio il return della view */
        return view('movies.index', compact('movies'));
    }
}
