<?php

use App\Article;
use App\ArticleCategory;
use App\Meta;

Route::group(['domain' => 'joecurrancodes.dev'], function () {
    Route::get('/', function () {
        return view('core.splash');
    });
    Route::get('/{id}', function () {
        return redirect('/');
    });

});

Route::group(['domain' => 'dev.joecurrancodes.dev'], function () {

    /**
     * Static or General Page Requests.
     */
    Route::get('/', 'PagesController@index');
    Route::get('about', 'PagesController@about');
    Route::get('contact', 'PagesController@contact');
    Route::post('contact', 'PagesController@contactPost');
    Route::get('projects', 'PagesController@projects');
    Route::get('dashboard', 'PagesController@dashboard');

    Route::get('blog/category', function () {
        return redirect('blog');
    });

    Route::get('blog/category/{slug}', function ($slug) {

        $category = ArticleCategory::where('name', $slug)->first();

        if (is_null($category)) {
            return redirect('blog');
        }

        $articles = Article::where('category', $category->id)->published()->listing()->paginate(4);

        $pagecode = '8PWLY8FGtvp2nQ5D';
        $meta = Meta::where('code', $pagecode)->firstOrFail();
        return view('core.article.index', compact('articles', 'meta'));

    });


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
        // VIEW , Array, Closuse


//        $tweets = Twitter::getUserTimeline(['screen_name' => 'jbird608', 'count' => 1, 'format' => 'json']);
//        return $tweets;
        //return Twitter::getHomeTimeline(['count' => 20, 'format' => 'json']);
        //return Twitter::postTweet(['status' => 'Laravel is beautiful', 'format' => 'json']);
        //return Markdown::parse('**Hello** Markdown! *How are you doing?*');
        // returns '<p><strong>Hello</strong> Markdown!<
    });
});






