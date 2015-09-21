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

// Regesting Home Page //
Route::get('/', function () {
    return view('page.home');
});

// Regestering Standard Pages //
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');


// Regestering Blog Requests //
Route::get('blog', 'BlogController@index');
Route::get('article/{slug}', 'BlogController@article');



