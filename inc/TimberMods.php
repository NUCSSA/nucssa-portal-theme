<?php
namespace nucssa_theme\inc;

class TimberMods {

  public static function udpateContext($context) {
    $context['nucssa_logo_url'] = NUCSSA_THEME_DIR_URL.'/dist/images/logo.png';
    $context['fallback_thumbnail'] = NUCSSA_THEME_DIR_URL.'/dist/images/placeholder-thumbnail.jpg';
    $context['main_nav'] = new \Timber\Menu('main-nav');
    $context['policy_menu'] = new \Timber\Menu('policy-menu');
    $context['footer_nav'] = new \Timber\Menu('footer-nav');

    return $context;
  }

}
