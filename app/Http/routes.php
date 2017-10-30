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
Route::get('/email', function () {
    return view('email');
});

Route::get('auth/google', 'Auth\googleController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\googleController@handleProviderCallback');

Route::auth();

Route::get('/home', 'HomeController@home');
/*
Route::get('/index', 'IndexController@index');
Route::get('/login', 'Auth\AuthController@authenticate');
Route::get('/login', 'Auth\AuthController@showLoginForm');
*/
Route::get('/signup', 'Auth\AuthController@showSignupForm');
Route::any('/logout', 'Auth\AuthController@logout');

