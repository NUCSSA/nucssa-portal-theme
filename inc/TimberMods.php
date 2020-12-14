<?php
namespace nucssa_theme;

class TimberMods {

  public static function udpateContext($context) {
    $context['nucssa_logo_url'] = NUCSSA_THEME_DIR_URL.'/dist/images/logo.png';
    $context['fallback_thumbnail'] = NUCSSA_THEME_DIR_URL.'/dist/images/placeholder-thumbnail.jpg';
    $context['login_placeholder_avatar'] = NUCSSA_THEME_DIR_URL.'/dist/images/login-placeholder-avatar.png';
    $context['main_nav'] = new \Timber\Menu('main-nav');
    $context['policy_menu'] = new \Timber\Menu('policy-menu');
    $context['footer_nav'] = new \Timber\Menu('footer-nav');
    $context['current_url'] = \Timber\URLHelper::get_current_url();
    $context['column_archive_url'] = (new \Timber\Term('column', 'category'))->link;

    return $context;
  }

}
