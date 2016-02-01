<?php

// get a url from get_next_posts_link
function get_npl() {
  $npl = explode('"', get_next_posts_link());
  return $npl[1];
}

// add favicon to wp_head
function favicon_link() {
  echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action('wp_head', 'favicon_link');

?>
