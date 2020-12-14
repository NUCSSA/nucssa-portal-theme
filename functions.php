<?php
include_once __DIR__ . '/vendor/autoload.php';

/**
 * Timber Setup
 */
use Timber\Timber;
use nucssa_theme\Scripts;
use nucssa_theme\ThemeSetup;
use nucssa_theme\TimberMods;
use nucssa_theme\SearchHighlight;

Timber::$dirname = 'views'; // Find .twig files inside views/
Timber::$autoescape = true;
add_action( 'timber/context', [TimberMods::class, 'udpateContext'] );


/**
 * Others
 */
add_filter('show_admin_bar', '__return_false'); // remove admin bar
add_action('after_setup_theme', [ThemeSetup::class, 'init']);     // add theme support
add_action('wp_enqueue_scripts', [Scripts::class, 'init']);  // enqueue styles and scripts
add_filter('the_title', [SearchHighlight::class, 'titleHighlight']);
add_filter('the_excerpt', [SearchHighlight::class, 'contentHighlight']);
add_filter('the_content', [SearchHighlight::class, 'contentHighlight']);
add_action('enqueue_block_assets', [Scripts::class, 'blockAssets']);
add_action('enqueue_block_editor_assets', [Scripts::class, 'blockEditorAssets']);
