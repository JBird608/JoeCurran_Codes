var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    /**
     * Compile SASS files to CSS files.
     * Stored in public/css
     */
    mix.sass([
        'core_eagle.scss'
    ], 'public/assets');

    /**
     * Merge all assets files with core_eagle stylesheet.
     * Stored in public/css as final.css
     */
    mix.styles([
        'fonts/font-awesome.css',
        'fonts/core_rhino.css',
        'foundation/css/foundation.css',
        'app.css'
    ], 'public/css/final.css', 'public/assets');
    /**
     * Create cache version of the css file for production.
     * This allows for broswer cache and updates.
     * Stored in public/build/css
     *
     * Route added to doc_open using {{ elixir('css/final.css') }}.
     */
    mix.version('public/css/final.css');

    /**
     * Move font files over to build folder.
     * Moved public/assets/fonts -> public/build/css
     */
    mix.copy('public/assets/fonts', 'public/build/css');

    /**
     * Runs all of the test files.
     * Stored in 'tests'.
     */
    /** mix.phpUnit(); */
});


