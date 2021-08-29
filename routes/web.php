<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test2');
});

// Route::get('/', 'MoviesController@index')->name('movies.index');
// Route::get('/movies/{movie}',' MoviesController@show')->name('movies.show');

// Route::view('/', 'index');
// Route::view('/movie', 'show');


