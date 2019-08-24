<?php

use \Timber\Timber;
use \Timber\PostQuery;

$context = Timber::context();
$context['posts'] = new PostQuery();
$context['title'] = single_cat_title( '', false );

Timber::render('archive-cat.twig', $context);
