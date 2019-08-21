<?php
use Timber\Timber;
use Timber\PostQuery;
use Timber\User;
use Timber\Menu;

$context = Timber::context();
$context['featured_posts'] = new PostQuery([
  'posts_per_page' => 5,
  // 'post__in' => get_option('featured_posts'),
  'meta_query' => [
    [
      'key' => '_nucssa_featured_post_priority', // stores the prirority of the featured post
      'compare' => '>',
      'value' => 0,
      'type' => 'NUMERIC'
    ]
  ],
  'orderby' => 'meta_value',
  'post_type' => 'any',
]);
$context['latest_posts'] = new PostQuery([
  'posts_per_page' => 6,
  'post_type' => 'post',
]);
$context['most_viewed'] = new PostQuery([
  'orderby' => 'meta_value',
  'meta_key' => 'views',
  'posts_per_page' => 6,
  'post_type' => 'post',
]);
$context['placeholder_thumbnail_url'] = NUCSSA_THEME_DIR_URL.'/dist/images/placeholder-thumbnail.jpg';
Timber::render('front-page.twig', $context);
