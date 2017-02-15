<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('movies', 'MoviesController');

Route::resource('peoples', 'PeoplesController');

Route::resource('proffessions', 'ProffessionsController');

Route::resource('genres', 'GenresController');

Route::resource('moviePeoples', 'MoviePeoplesController');

Route::resource('movieGenres', 'MovieGenresController');

Route::resource('movieReviews', 'MovieReviewsController');

Route::resource('movieLanguages', 'MovieLanguageController');