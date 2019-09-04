<?php
/**
 * Generic Archive Fallback
 */
use \Timber\Timber;
use \Timber\PostQuery;

$context = Timber::context();
$context['posts'] = new PostQuery();
$context['title'] = single_term_title( '', false );

Timber::render('archive.twig', $context);
