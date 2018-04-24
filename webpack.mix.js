
let mix = require('laravel-mix');
mix.setPublicPath('public')
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
var tailwindcss = require('tailwindcss');

mix.js('Modules/Core/Resources/assets/js/app.js', 'public/js')
    .sass('Modules/Core/Resources/assets/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.js') ],
    });
