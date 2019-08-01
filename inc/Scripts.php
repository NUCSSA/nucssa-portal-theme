<?php

namespace nucssa_theme\inc;

class Scripts {
  public static function init(){
    self::frontendStyles();
    self::frontendScripts();
  }

  private static function frontendStyles() {
    wp_enqueue_style('nucssa_theme_frontend_style', NUCSSA_THEME_DIR_URL.'dist/css/style.css');
  }
  private static function frontendScripts() {

  }
}