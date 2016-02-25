<?php

/**
 * WordPress snippets:
 * #1 - passing variables to get_template_part()
 * #2 - set wordpress site url to current domain
 * #3 - use jQuery dollar
 */

// #1 passing variables to get_template_part()
include(locate_template('template-name.php'));

// #2 set wordpress site url to current domain
$site_url = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$site_url .= $_SERVER['SERVER_NAME'];
define('WP_SITEURL', $site_url);
define('WP_HOME', $site_url);

// #3 use jQuery dollar
var $ = jQuery.noConflict();

?>
