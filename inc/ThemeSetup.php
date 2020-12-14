<?php
namespace nucssa_theme;

class ThemeSetup {
  public static function init() {
    self::basicThemeSupports();
    self::navMenus();
    self::thumbnails();
    self::editorStyleSupport();
    self::gutenbergSupport();
  }

  private static function basicThemeSupports() {
    add_theme_support('automatic-feed-links'); // enable RSS feed detection to head

    /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
    add_theme_support('title-tag');
    add_theme_support('html5', [
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ]);
    add_theme_support('post-formats', [
      'gallery', // 摄影部
      'video',   // 摄影部
    ]);

  }

  private static function editorStyleSupport() {
    add_theme_support('editor-styles');
    add_editor_style('dist/style-editor.css'); // Add support for custom editor styles.
  }

  private static function navMenus(){
    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus([
      'main-nav' => 'Main Navigation Menu',
      'policy-menu' => 'Footer Policy Menu',
      'footer-nav' => 'Footer Nav Menu'
    ]);
  }

  /**
   * Enable support for Post Thumbnails on posts and pages.
   * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
   */
  private static function thumbnails(){
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(439, 292);

    add_image_size( 'banner_desktop', 1920);
    add_image_size( 'banner_mobile', 640);
    add_image_size( 'in_post_thumbnail', 1200, 300, true);
    add_image_size( 'archive_list_thumbnail', 222, 125, true);
  }

  private static function gutenbergSupport(){
    /**
     * Theme Supports for Block Editor
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/
     */
    add_theme_support('wp-block-styles'); // Outputs editor styles to the frontend https://make.wordpress.org/core/2018/06/05/whats-new-in-gutenberg-5th-june/
    add_theme_support('align-wide'); // Add support for full and wide align images.
    add_theme_support('responsive-embeds');
    // add_theme_support('editor-font-sizes', [
    //   ['name' => 'Small', 'size' => 12, 'shortName' => 'S', 'slug' => 'small'],
    //   ['name' => 'Normal', 'size' => 16, 'shortName' => 'N', 'slug' => 'normal'],
    //   ['name' => 'Large', 'size' => 20, 'shortName' => 'L', 'slug' => 'large'],
    //   ['name' => 'Huge', 'size' => 30, 'shortName' => 'XL', 'slug' => 'huge'],
    // ]);
    // add_theme_support('editor-color-palette', [
    //   ['name' => 'NUCSSA Red ❤️', 'slug' => 'nucssa-red', 'color' => '#D92110'],
    //   ['name' => 'Title', 'slug' => 'title', 'color' => '#D92110'],
    //   ['name' => 'Tooltip-1', 'slug' => 'tooltip-1', 'color' => '#601C16'],
    //   ['name' => 'Tooltip-2', 'slug' => 'tooltip-2', 'color' => '#43425D'],
    //   ['name' => 'Black', 'slug' => 'black', 'color' => '#000'],
    //   ['name' => 'White', 'slug' => 'white', 'color' => '#fff'],
    // ]);
  }
}
