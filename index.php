<?php
use Timber\Timber;
$context = Timber::context();

Timber::render('index.html.twig', $context);
