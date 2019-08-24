<?php

use \Timber\Timber;
use \Timber\PostQuery;

$context = Timber::context();
$context['posts'] = new PostQuery();
$context['title'] = single_tag_title( '', false );

Timber::render('archive-tag.twig', $context);
