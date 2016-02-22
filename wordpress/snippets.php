<?php

/**
 * WordPress snippets:
 * #1 - passing variables to get_template_part()
 * #2 - set wordpress site url to current domain
 */

// #1 passing variables to get_template_part()
include(locate_template('template-name.php'));

// #2 set wordpress site url to current domain
$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
$host_name = $_SERVER['HTTP_HOST'];
define('WP_SITEURL', $protocol . $host_name);
define('WP_HOME', $protocol . $host_name);

?>
