<?php
/**
 * Since we have front-page.php (for front page), home.php (for posts archive) and other template files covering all requests, 
 * rendering this index file obsolete. 
 * But we'll keep this as a catchall, in case there is a case our templates files doesn't cover. 
 * Simply redirect to home
 */
wp_redirect( home_url(), 302 );
exit;

