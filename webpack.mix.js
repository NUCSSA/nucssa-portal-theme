const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management (this is borrowed from Laravel)
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 | For Details of the configuration, take a look at Laravel-mix project:
 | https://laravel-mix.com/
 */
mix.sass('assets/scss/style.scss', 'dist/css/')
    .sass('assets/scss/style-editor.scss', 'dist/css/')
    .copyDirectory('assets/images/', 'dist/images/')
    // TODO: add csspurge when everything is ready to deploy
    .browserSync({
      proxy: 'wp.localhost',
      files: [ '*.php', 'dist/'],
      open: false,
      ghostMode: false,
    })
    .options({
      processCssUrls: false,
    })
    .sourceMaps(false, 'eval-source-map');
