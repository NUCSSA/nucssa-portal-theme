<?php

use \Timber\Timber;
use \Timber\PostQuery;
use \Timber\User;
$context = Timber::context();
global $wpdb;
$keyword = $_GET['s'];

// 1. Authors with published posts (Exclude Admin)
$authors_with_published_posts = $wpdb->get_results(
  "
  SELECT u.ID, COUNT(u.ID) AS count
  FROM $wpdb->users u
  LEFT JOIN $wpdb->posts p
  ON u.ID = p.post_author
  WHERE p.post_status = 'publish'
  AND u.ID != 1
  AND u.display_name LIKE '%$keyword%'
  GROUP BY u.ID
  HAVING count > 0
  "
);
$author_ids = array_map(function($author){return $author->ID;}, $authors_with_published_posts);
$context['authors'] = array_map(function($ID){return new User($ID);}, $author_ids);



// 2. normal results ( activities and columns )
$context['posts'] = new PostQuery();

Timber::render('search.twig', $context);
