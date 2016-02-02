<?php

/**
 * PHP functions:
 * #1 - get snippet of text
 * #2 - prevent echo and get output
 * #3 - strip tag from string
 * #4 - strip page from url
 * #5 - remove an element from array
 */

// #1 get snippet of text
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

// #2 prevent echo and get output
function get_echo() {
  ob_start();
  echo "Hello, World";
  $out = ob_get_contents();
  ob_end_clean();
  return $out;
}

// #3 strip tag from string
function strip_tag($string, $tag) {
    $pattern = '/<'. $tag .'[^>]*>(.*)<\/'. $tag .'[^>]*>/i';
    return preg_replace($pattern, '$1', $string);
}

// #4 strip page from url
function strip_url($url, $start, $end) {
    $startPos = strrpos($url, $start) + strlen($start);
    $endPos = strrpos($url, $end);
    $strLength = $endPos - $startPos + 1;
    return substr_replace($url, '', $startPos, $strLength);
}

// #5 remove an element from array
function remove_from_array($array, $element) {
    return array_diff($array, array($element));
}

?>