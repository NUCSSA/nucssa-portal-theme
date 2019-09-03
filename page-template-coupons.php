<?php

/**
 * Template Name: Coupons Index Page Template
 *
 * Display info cards about all coupons
 */

use \Timber\Timber;
use \Timber\PostQuery;

$context = Timber::context();
$context['posts'] = new PostQuery([
  'posts_per_page' => -1,
  'post_type' => 'coupon',
]);

Timber::render('page-template-coupons.twig', $context);