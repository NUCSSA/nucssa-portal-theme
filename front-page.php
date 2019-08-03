<?php
use Timber\Timber;
use Timber\PostQuery;
use Timber\User;
use Timber\Menu;

$context = Timber::context();
$context['latest_posts'] = new PostQuery([
  'posts_per_page' => 6,
  'post_type' => 'post',
]);
$context['most_viewed_posts'] = new PostQuery([
  'orderby' => 'meta_value',
  'meta_key' => 'views',
  'posts_per_page' => 6,
  'post_type' => 'post',
]);
Timber::render('front-page.html.twig', $context);
