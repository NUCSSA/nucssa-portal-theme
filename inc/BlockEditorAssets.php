<?php

namespace nucssa_theme\inc;

class BlockEditorAssets {
  public static function init() {
    self::genericBlockEditorAssets();
  }

  private static function genericBlockEditorAssets() {
    $version = WP_DEBUG ? time() : false;
    wp_enqueue_style( 'nucssa_theme_block_editor_assets', NUCSSA_THEME_DIR_URL.'/dist/css/style-editor.css', [], $version);
  }
}
