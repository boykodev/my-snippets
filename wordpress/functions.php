<?php

/**
 * WordPress functions:
 * #1 - get a url from get_next_posts_link
 * #2 - add favicon to wp_head
 */

// #1 get a url from get_next_posts_link
function get_npl() {
  $npl = explode('"', get_next_posts_link());
  return $npl[1];
}

// #2 add favicon to wp_head
function favicon_link() {
  echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action('wp_head', 'favicon_link');

?>