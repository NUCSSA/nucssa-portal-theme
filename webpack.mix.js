const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')('./tailwind.config.js');
const purgecssWordpress = require('purgecss-with-wordpress');
const purgecssFlickity = {
  whitelist: ['dot'],
  whitelistPatterns: [/^flickity/, ],
}
const purgecss = require('@fullhuman/postcss-purgecss')({
  content: [
    './*.php',
    'inc/**/*.php',
    'assets/js/**/*.js',
    'assets/js/**/*.jsx',
    'views/**/*.twig',
  ],
  whitelist: [...purgecssWordpress.whitelist, ...purgecssFlickity.whitelist],
  whitelistPatterns: [...purgecssWordpress.whitelistPatterns, ...purgecssFlickity.whitelistPatterns],
  defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
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
mix.webpackConfig({
  externals: {
    '@wordpress/element': ['wp', 'element'],
    '@wordpress/plugins': ['wp', 'plugins'],
    '@wordpress/blocks': ['wp', 'blocks'],
    '@wordpress/edit-post': ['wp', 'editPost'],
    '@wordpress/i18n': ['wp', 'i18n'],
    '@wordpress/editor': ['wp', 'editor'],
    '@wordpress/components': ['wp', 'components'],
    '@wordpress/blob': ['wp', 'blob'],
    '@wordpress/data': ['wp', 'data'],
    '@wordpress/html-entities': ['wp', 'htmlEntities'],
    '@wordpress/compose': ['wp', 'compose'],
    'jquery': ['window', 'jQuery'],
  }
})
.sass('assets/scss/style.scss', 'dist/css/')
.sass('assets/scss/style-editor.scss', 'dist/css/')
.react('assets/js/gutenberg/editor-extension/featured-posts.js', 'dist/js/featured-posts.js')
.js('assets/js/main.js', 'dist/js/main.js')
.copyDirectory('assets/images/', 'dist/images/')
.browserSync({
  proxy: 'wp.localhost',
  files: [ '*.php', '*.twig', '*.js', 'dist/', 'inc/', 'views/'],
  open: 'ui',
  ghostMode: false, // mirror clicks, scrolls & form inputs on all connected devices
})
.options({
  processCssUrls: false,
  postCss,
})
.sourceMaps(false, 'eval-source-map');
