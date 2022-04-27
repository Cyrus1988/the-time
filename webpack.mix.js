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

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/theme/jquery-1.11.0.min.js", "public/js/theme")
    .js("resources/js/theme/imagezoom.js", "public/js/theme")
    .js("resources/js/theme/jquery.easydropdown.js", "public/js/theme")
    .js("resources/js/theme/jquery.flexslider.js", "public/js/theme")
    .js("resources/js/theme/memenu.js", "public/js/theme")
    .js("resources/js/theme/responsiveslides.min.js", "public/js/theme")
    .js("resources/js/theme/simpleCart.min.js", "public/js/theme")
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]).css('resources/css/theme/style.css', 'public/css/theme')
    .css('resources/css/theme/flexslider.css', 'public/css/theme')
    .css('resources/css/theme/memenu.css', 'public/css/theme')
    .css('resources/css/theme/bootstrap.css', 'public/css/theme');

mix.copyDirectory("resources/fonts", "public/fonts");
mix.copyDirectory("resources/images", "public/images");
