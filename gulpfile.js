var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.scripts([
    	'vendor/grunticon.loader.js',
    	'vendor/vue.min.js',
    	'vendor/vue-resource.min.js',
    	'vendor/modernizr.js',
    	'vendor/jquery.js'
    ],'public/js/backend.js')
    .scripts([
    	'vendor/grunticon.loader.js',
    	'vendor/modernizr.js',
    	'vendor/jquery.js'
    ], 'public/js/tool.js')
});
