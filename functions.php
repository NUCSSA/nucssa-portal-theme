<?php
include_once __DIR__ . '/vendor/autoload.php';

/**
 * Timber Setup
 */
use Timber\Timber;
Timber::$dirname = 'views'; // Find .twig files inside views/
Timber::$autoescape = true;
add_action( 'timber/context', ['nucssa_theme\inc\TimberMods', 'udpateContext'] );


/**
 * Others
 */
add_filter('show_admin_bar', '__return_false'); // remove admin bar
add_action('after_setup_theme', ['nucssa_theme\inc\ThemeSetup', 'init']);     // add theme support
add_action('wp_enqueue_scripts', ['nucssa_theme\inc\Scripts', 'init']);  // enqueue styles and scripts
add_filter('the_title', ['nucssa_theme\inc\SearchHighlight', 'titleHighlight']);
add_filter('the_excerpt', ['nucssa_theme\inc\SearchHighlight', 'contentHighlight']);
add_filter('the_content', ['nucssa_theme\inc\SearchHighlight', 'contentHighlight']);
// add_action('enqueue_block_assets', 'nucssa_theme_block_assets');
// add_action('enqueue_block_editor_assets', ['nucssa_theme\inc\BlockEditorAssets', 'init']);
