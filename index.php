<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header();

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    get_template_part( 'template-parts/content/content' );
  }
}

get_footer();