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

Route::get('forward', function () {
//    $model = "Hello";
//    $test = url('blog', [$model]);
//    dd($test);
//    return $test;
    //return Redirect::to('http://www.google.com');
});

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




