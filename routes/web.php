<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/* La Rintraccio grazie al page controller */
Route::get('/', 'PageController@index')->name('home');
/* Alla rotta /movies, collego il suo controller. Avrà un nome, ovvero:
movies => nome cartella
index => nome file php  */
Route::get('/movies', 'MovieController@index')->name('movies.index');
