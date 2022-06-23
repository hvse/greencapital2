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

 mix.js('resources/js/site.js', 'public/js')
    .js('resources/js/anim_top.js', 'public/js')
    .js('resources/js/bootstrap.js', 'public/js')
    .sass('resources/sass/site.scss', 'public/css')
    .sass('resources/sass/dashboard.scss', 'public/css')
    .sass('resources/sass/old.scss', 'public/css').options({
        processCssUrls: false
    })
    // .sass('resources/sass/carousel.scss', 'public/css')
    .sourceMaps()
    .browserSync('http://localhost:8000');
