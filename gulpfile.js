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
  // CSS
    // =======================
    // =======================
    mix.copy('resources/assets/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
    mix.copy('resources/assets/css/bootswatch.bootstrap.min.css', 'public/css/bootswatch.bootstrap.min.css');
    mix.copy('resources/assets/css/cyborg.bootswatch.bootstrap.min.css', 'public/css/cyborg.bootswatch.bootstrap.min.css');
    // Cache Busting
    mix.version([
    	'css/bootstrap.min.css',
    	'css/bootswatch.bootstrap.min.css',
    	'css/cyborg.bootswatch.bootstrap.min.css'
    ]);
    // End CSS
    // =======================
    // =======================


    // JS 
    // =======================
    // =======================
    // Copy Jquery into publici js
    mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
    // copy main js 
    mix.copy('resources/assets/js/app.js', 'public/js/app.js');
    // Cache Busting JS
    mix.version([
    	'js/jquery.min.js',
    	'js/app.js'
    ]);
    // End JS
    // =======================
    // =======================

});
