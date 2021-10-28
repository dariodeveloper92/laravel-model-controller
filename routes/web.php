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
/* Home */
Route::get('/', 'HomeController@home')->name('pagina-home');

/* Movies */
Route::get('/movies', 'MovieController@listMovies')->name('pagina-movies');

/* Dettagli */
Route::get('/movie-detail/{id}','MovieController@movieDetail')->name('pagina-dettaglio');

/* Contacts */
Route::get('/contacts', 'HomeController@contacts')->name('pagina-contatti');

/* About */
Route::get('/about', 'HomeController@about')->name('pagina-about');
