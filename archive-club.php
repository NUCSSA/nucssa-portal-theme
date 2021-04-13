<?php

/**
 * Template Name: Clubs Page Template
 *
 * Display info cards about all clubs
 */

use \Timber\Timber;
use \Timber\PostQuery;

$context = Timber::context();
$context['posts'] = new PostQuery([
  'posts_per_page' => -1,
  'post_type' => 'club',
]);

Timber::render('archive-club.twig', $context);