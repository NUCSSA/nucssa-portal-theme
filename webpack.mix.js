const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')('./tailwind.config.js');
const purgecssWordpress = require('purgecss-with-wordpress');
const purgecss = require('@fullhuman/postcss-purgecss')({
  content: [
    './*.php',
    'inc/**/*.php',
    'assets/js/**/*.js',
    'assets/js/**/*.jsx',
    'views/**/*.twig',
  ],
  whitelist: purgecssWordpress.whitelist,
  whitelistPatterns: purgecssWordpress.whitelistPatterns,
});

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
const postCss = mix.inProduction() ? [tailwindcss, purgecss] : [tailwindcss];
mix.sass('assets/scss/style.scss', 'dist/css/')
    .sass('assets/scss/style-editor.scss', 'dist/css/')
    .copyDirectory('assets/images/', 'dist/images/')
    .browserSync({
      proxy: 'wp.localhost',
      files: [ '*.php', 'dist/'],
      open: false,
      ghostMode: false,
    })
    .options({
      processCssUrls: false,
      postCss,
    })
    .sourceMaps(false, 'eval-source-map');
