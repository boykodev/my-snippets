<?php

// get snippet of text
function get_snippet( $str, $wordCount = 10, $ellipsis = true) {
    $snippet = implode(
        '',
        array_slice(
            preg_split(
                '/([\s,\.;\?\!]+)/',
                $str,
                $wordCount*2+1,
                PREG_SPLIT_DELIM_CAPTURE
            ),
            0,
            $wordCount*2-1
        )
    );
    if ($ellipsis && mb_strlen($str) > mb_strlen($snippet)) {
        $snippet .= '...';
    }
    return $snippet;
}

// prevent echo and get output
function get_echo() {
  ob_start();
  echo "Hello, World";
  $out = ob_get_contents();
  ob_end_clean();
  return $out;
}

// strip tag from string
function strip_tag($string, $tag) {
    $pattern = '/<'. $tag .'[^>]*>(.*)<\/'. $tag .'[^>]*>/i';
    return preg_replace($pattern, '$1', $string);
}

// strip page from url
function strip_url($url, $start, $end) {
    $startPos = strrpos($url, $start) + strlen($start);
    $endPos = strrpos($url, $end);
    $strLength = $endPos - $startPos + 1;
    return substr_replace($url, '', $startPos, $strLength);
}

// build POST query using file_get_contents
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

// count script execution time
$start = microtime(true);
# ...
$time = microtime(true) - $start;
echo "Time: $time";

?>
