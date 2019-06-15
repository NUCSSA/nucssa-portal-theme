<?php
add_action('after_setup_theme', 'nucssa_theme_setup');     // add theme support
add_action('wp_enqueue_scripts', 'nucssa_theme_scripts');  // enqueue styles and scripts
add_action('enqueue_block_assets', 'nucssa_theme_block_assets');
add_action('enqueue_block_editor_assets', 'nucssa_theme_block_editor_assets');

function nucssa_theme_setup() {
  add_theme_support('automatic-feed-links'); // enable RSS feed detection to head
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(439, 292);
  register_nav_menus([
    'header' => 'Header Nav',
    'footer' => 'Footer Menu'
  ]);
  add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ]);
  add_theme_support('custom-logo'); // https://codex.wordpress.org/Theme_Logo

  /**
   * Theme Supports for Block Editor
   * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/
   */
  add_theme_support('wp-block-styles'); // https://make.wordpress.org/core/2018/06/05/whats-new-in-gutenberg-5th-june/
  add_theme_support('align-wide'); // Add support for full and wide align images.
  add_theme_support('editor-styles'); add_editor_style('style-editor.css'); // Add support for custom editor styles.
  add_theme_support('responsive-embeds');
  add_theme_support('editor-font-sizes', [
    ['name' => 'Small', 'size' => 12, 'shortName' => 'S', 'slug' => 'small'],
    ['name' => 'Normal', 'size' => 16, 'shortName' => 'N', 'slug' => 'normal'],
    ['name' => 'Large', 'size' => 20, 'shortName' => 'L', 'slug' => 'large'],
    ['name' => 'Huge', 'size' => 30, 'shortName' => 'XL', 'slug' => 'huge'],
  ]);
  add_theme_support('editor-color-palette', [
    ['name' => 'NUCSSA Red ❤️', 'slug' => 'nucssa-red', 'color' => '#D92110'],
    ['name' => 'Title', 'slug' => 'title', 'color' => '#D92110'],
    ['name' => 'Tooltip-1', 'slug' => 'tooltip-1', 'color' => '#601C16'],
    ['name' => 'Tooltip-2', 'slug' => 'tooltip-2', 'color' => '#43425D'],
    ['name' => 'Black', 'slug' => 'black', 'color' => '#000'],
    ['name' => 'White', 'slug' => 'white', 'color' => '#fff'],
  ]);
}

function nucssa_theme_scripts() {
  wp_enqueue_style('nucssa-theme-style', get_stylesheet_uri());
}

function nucssa_theme_block_assets(){

}

function nucssa_theme_block_editor_assets() {

}
