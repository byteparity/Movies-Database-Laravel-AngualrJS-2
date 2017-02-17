<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::post('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');*/

Route::group(['namespace' => 'api'], function () {
    // Controllers Within The "api" Namespace
    //Route::resource('users', 'UserAPIController');
    
    //Route::post('loginuser', 'AuthenticateController@authenticate');
	//Route::post('contactmail', 'SendmailController@sendContactUsMail');

    //Route::get('getuser', 'AuthenticateController@getAuthenticatedUser');
    
    Route::resource('movies', 'MoviesAPIController');

    Route::resource('peoples', 'PeoplesAPIController');

    Route::resource('proffessions', 'ProffessionsAPIController');

    Route::resource('genres', 'GenresAPIController');

    Route::resource('movie_peoples', 'MoviePeoplesAPIController');

    Route::resource('movie_genres', 'MovieGenresAPIController');

    Route::resource('movie_reviews', 'MovieReviewsAPIController');

    Route::resource('movie_languages', 'MovieLanguageAPIController');
});




