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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')

    .js('resources/js/cms/cms.js', 'public/js/cms')
    .sass('resources/sass/cms/cms.scss', 'public/css/cms')

    .js('resources/js/guest/guest.js', 'public/js/guest')
    .sass('resources/sass/guest/guest.scss', 'public/css/guest')

    .js('resources/js/login/login.js', 'public/js/login')
    .sass('resources/sass/login/login.scss', 'public/css/login')

    .sourceMaps();
