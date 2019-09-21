<?php

namespace nucssa_theme\inc;

class BlockEditorAssets {
  public static function init() {
    self::genericBlockEditorAssets();
  }

  private static function genericBlockEditorAssets() {
    $fpath = NUCSSA_THEME_DIR_PATH . '/dist/css/style-editor.css';
    $furl = NUCSSA_THEME_DIR_URL . '/dist/css/style-editor.css';
    $version = filemtime($fpath);
    wp_enqueue_style( 'nucssa_theme_block_editor_assets', $furl, [], $version);
  }
}
