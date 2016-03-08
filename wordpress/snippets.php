<?php

/**
 * WordPress snippets:
 * #1 - passing variables to get_template_part()
 * #2 - set wordpress site url to current domain
 * #3 - use jQuery dollar
 * #4 - debug disable (for sure)
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

// #4 debug disable (for sure)
ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

?>
