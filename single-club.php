<?php
use \Timber\Timber;

$context = Timber::context();
$context['post'] = Timber::query_post();
$context['workshop'] = json_decode(get_post_meta(get_the_ID(), '_workshop_schedule', true) );
Timber::render('single-club.twig', $context);