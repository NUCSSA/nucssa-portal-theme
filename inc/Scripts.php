<?php

namespace nucssa_theme\inc;

class Scripts {
  public static function init(){
    self::frontendStyles();
    self::frontendScripts();
    if (WP_DEBUG) self::browserSync();
  }

  public static function blockAssets() {
    $fpath = NUCSSA_THEME_DIR_PATH . '/dist/css/style-shared.css';
    $furl = NUCSSA_THEME_DIR_URL . '/dist/css/style-shared.css';
    $version = filemtime($fpath);
    wp_enqueue_style('nucssa_theme_block_shared_assets', $furl, [], $version);
  }

  public static function blockEditorAssets() {
    $fpath = NUCSSA_THEME_DIR_PATH . '/dist/css/style-editor.css';
    $furl = NUCSSA_THEME_DIR_URL . '/dist/css/style-editor.css';
    $version = filemtime($fpath);
    wp_enqueue_style( 'nucssa_theme_block_editor_assets', $furl, [], $version);
  }


  private static function frontendStyles() {
    $fpath = NUCSSA_THEME_DIR_PATH . '/dist/css/style.css';
    $furl = NUCSSA_THEME_DIR_URL . '/dist/css/style.css';
    $version = filemtime($fpath);
    wp_enqueue_style('nucssa_theme_frontend', $furl, [], $version);
  }
  private static function frontendScripts() {
    $fpath = NUCSSA_THEME_DIR_PATH . '/dist/js/main.js';
    $furl = NUCSSA_THEME_DIR_URL . '/dist/js/main.js';
    $version = filemtime($fpath);
    wp_enqueue_script( 'nucssa_theme_frontend', $furl, ['jquery'], $version );
  }
  private static function browserSync() {
    add_action('wp_print_scripts', function() {
      echo '<script async="" src="http://wp.localhost:3000/browser-sync/browser-sync-client.js"></script>';
    });
  }
}