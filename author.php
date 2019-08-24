<?php

use \Timber\Timber;
use \Timber\PostQuery;
use \Timber\User;

global $wp_query;
$context = Timber::context();
$context['posts'] = new PostQuery();
$context['author'] = new User( $wp_query->query_vars['author'] );

Timber::render('archive-author.twig', $context);
