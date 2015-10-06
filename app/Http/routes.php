<?php

/**
 * Requesting the Homepage.
 */
    Route::get('/', function () {
        return view('core.standard');
    });

/**
 * Static or General Page Requests.
 */
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('projects', 'PagesController@projects');
Route::get('home', 'PagesController@home');

/**
 * Blog or Article Requests.
 */
Route::resource('blog', 'BlogController');

/**
 * User Authentication, Registation & Profiles Requests.
 */
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

/**
 * Testing & Temporary Requests
 */
Route::get('user', function () {
    return Auth::user();
});

Route::get('function', function () {
    return Markdown::parse('**Hello** Markdown! *How are you doing?*');
// returns '<p><strong>Hello</strong> Markdown!<
});







