<?php

namespace App\Http\Controllers;
use App\Movie; // Il modello io lo devo importare altrimenti non legge niente, anche se vuoto
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        /* dd($movies); */   // Controllo tramite DD della variabile -> Movie è il mio Model
        /* Ora avvio il return della view presente nella cartella movies(cartella in view).index(file index.blade.php) */
        return view('movies.index', compact('movies'));
    }
}
