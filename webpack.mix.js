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

/* FRONT */
mix.js("resources/front/js/app.js", "public/front/js")
    .js("resources/front/js/theme/jquery-1.11.0.min.js", "public/front/js/theme")
    .js("resources/front/js/theme/imagezoom.js", "public/front/js/theme")
    .js("resources/front/js/theme/jquery.easydropdown.js", "public/front/js/theme")
    .js("resources/front/js/theme/jquery.flexslider.js", "public/front/js/theme")
    .js("resources/front/js/theme/memenu.js", "public/front/js/theme")
    .js("resources/front/js/theme/responsiveslides.min.js", "public/front/js/theme")
    .js("resources/front/js/theme/simpleCart.min.js", "public/front/js/theme")
    .postCss('resources/front/css/app.css', 'public/front/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]).css('resources/front/css/theme/style.css', 'public/front/css/theme')
    .css('resources/front/css/theme/flexslider.css', 'public/front/css/theme')
    .css('resources/front/css/theme/memenu.css', 'public/front/css/theme')
    .css('resources/front/css/theme/bootstrap.css', 'public/front/css/theme');

mix.copyDirectory("resources/front/fonts", "public/front/fonts");
mix.copyDirectory("resources/front/images", "public/front/images");

/* BACK|ADMIN */
mix.copyDirectory("resources/back", "public/back");
