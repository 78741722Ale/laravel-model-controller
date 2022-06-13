<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /* La rotta per la page home è questa */
    public function index() {
        return view('home');
    }
}
