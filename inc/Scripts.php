<?php

namespace nucssa_theme\inc;

class Scripts {
  public static function init(){
    self::frontendStyles();
    self::frontendScripts();
    if (WP_DEBUG) self::browserSync();
  }

  private static function frontendStyles() {
    $version = WP_DEBUG ? time() : false;
    wp_enqueue_style('nucssa_theme_frontend', NUCSSA_THEME_DIR_URL.'/dist/css/style.css', [], $version);
  }
  private static function frontendScripts() {
    $version = WP_DEBUG ? time() : false;  // busting browser cache during development
    wp_enqueue_script( 'nucssa_theme_frontend', NUCSSA_THEME_DIR_URL.'/dist/js/main.js', [], $version );
  }
  private static function browserSync() {
    add_action('wp_print_scripts', function() {
      echo '<script async="" src="http://wp.localhost:3000/browser-sync/browser-sync-client.js"></script>';
    });
  }
}