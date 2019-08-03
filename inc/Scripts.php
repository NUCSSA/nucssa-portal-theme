<?php

namespace nucssa_theme\inc;

class Scripts {
  public static function init(){
    self::frontendStyles();
    self::frontendScripts();
    if (WP_DEBUG) self::browserSync();
  }

  private static function frontendStyles() {
    wp_enqueue_style('nucssa_theme_frontend', NUCSSA_THEME_DIR_URL.'/dist/css/style.css');
  }
  private static function frontendScripts() {
    wp_enqueue_script('nucssa_theme_frontend', NUCSSA_THEME_DIR_URL.'/dist/js/main.v1.js');
  }
  private static function browserSync() {
    add_action('wp_print_scripts', function() {
      echo '<script async="" src="http://wp.localhost:3000/browser-sync/browser-sync-client.js"></script>';
    });
  }
}