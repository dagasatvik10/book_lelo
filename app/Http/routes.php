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
// Index Page
Route::get('/', function () {
    return view('welcome');
});
// Registration and login routes located in auth() function in Router.php
Route::auth();

// Home Page after login
Route::get('/home', 'HomeController@index');

// Edit User details
Route::get('edit_profile','HomeController@editProfile');
Route::post('edit_profile','HomeController@updateProfile');

