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
    return view('core.standard');
});

// Regestering Static Pages //
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('home', 'PagesController@home');

// Regestering Blog Requests //
//Route::get('blog', 'BlogController@index');

//// BLOG REDIRECTS //
//Route::get('article', 'BlogController@redirect');
//Route::get('articles', 'BlogController@redirect');
//
//Route::get('article/create', 'BlogController@create');
//Route::post('article/store', 'BlogController@store');
//Route::get('article/{slug}', 'BlogController@article');

/**
 * Creating a resource controller for the Articles/Blog.
 */
Route::resource('blog', 'BlogController');

Route::get('user', function () {
    return Auth::user();
});


// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');



