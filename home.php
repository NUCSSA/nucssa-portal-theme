<?php

use \Timber\Timber;
use \Timber\PostQuery;

$context = Timber::context();
$context['posts'] = new PostQuery();

Timber::render('home.twig', $context);
