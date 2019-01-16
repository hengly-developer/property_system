const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');*/

mix.combine([
        'resources/peper/js/bootstrap.min.js',
        'resources/peper/js/bootstrap-notify.js',
        'resources/peper/js/paper-dashboard.js'
    ], 'public/js/app.js')
    .combine([
        'resources/peper/css/bootstrap.min.css',
        'resources/peper/css/animate.css',
        'resources/peper/css/paper-dashboard.css',
        'resources/peper/css/themify-icons.css',
        'resources/css/property.css'
    ], 'public/css/app.css');
