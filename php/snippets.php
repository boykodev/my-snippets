<?php

/**
 * PHP snippets:
 * #1 - build POST query using file_get_contents
 * #2 - count script execution time
 */

// #1 build POST query using file_get_contents
$postdata = http_build_query(
    array(
        'var1' => 'foo',
        'var2' => 'bar'
    )
);
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);
$context  = stream_context_create($opts);
$result = file_get_contents('http://example.com/submit.php', false, $context);

// #2 count script execution time
$start = microtime(true);
# ...
$time = microtime(true) - $start;
echo "Time: $time";

?>