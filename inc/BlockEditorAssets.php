<?php

namespace nucssa_theme\inc;

class BlockEditorAssets {
  public static function init() {
    self::featuredPostsAssets();
  }

  private static function featuredPostsAssets() {
    wp_enqueue_script('nucssa_theme_block_assets_featured_posts', NUCSSA_THEME_DIR_URL.'/dist/js/featured-posts.js', ['wp-plugins', 'wp-edit-post']);
  }
}
