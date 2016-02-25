<?php

/**
 * WordPress functions:
 * #1 - get a url from get_next_posts_link
 * #2 - add favicon to wp_head
 * #3 - get language slug
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

// #3 get current language slug
function get_locale_slug() {
  return substr(get_locale(), 0, 2);
}

?>
