<?php
/**
 * Difference with single post view:
 *  Page doesn't have related posts section
 */
use \Timber\Timber;

$context = Timber::context();
$context['post'] = Timber::query_post();
Timber::render('page.twig', $context);
