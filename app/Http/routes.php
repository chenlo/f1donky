<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/rules', function () {
    return view('rules');
});

Route::get('/drivers', function () {
	$drivers = F1donky\Driver::all();
    return view('drivers.index')->with('drivers', $drivers);
});

Route::get('/standings', 'BetController@standings');

Route::resource('races', 'RaceController');

Route::resource('bets', 'BetController');

Route::get('/home', 'HomeController@index');

Route::auth();