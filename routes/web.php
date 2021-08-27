<?php

// use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', 'MoviesControll@index')->name('movies.index');
// Route::get('/movies/{movie}',' MoviesController@show')->name('movies.index');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'index');
Route::view('/movie', 'show');
