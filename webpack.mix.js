const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('src/resources/sass/nhsl.scss', 'src/public/css/nhsl.min.css')
    .js('src/resources/js/nhsl.js', 'src/public/js/nhsl.min.js')
    .js('node_modules/nhsuk-frontend/dist/nhsuk.min.js', 'src/public/js/nhsuk.min.js');
