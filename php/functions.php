<?php

/**
 * PHP functions:
 * #1 - get snippet of text
 * #2 - prevent echo and get output
 * #3 - strip tag from string
 * #4 - strip page from url
 * #5 - remove an element from array
 * #6 - recursive glob function
 * #7 - isset for arrays
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

// #6 recursive glob function
function rglob($pattern, $flags = 0) {
    $files = glob($pattern, $flags);
    foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir) {
        $files = array_merge($files, rglob($dir.'/'.basename($pattern), $flags));
    }
    return $files;
}

// #7 isset for arrays, prevents 'Undefined index' notice
function isset_array($array, $index, $default = '') {
    if (is_array($index)) {
        if (count($index) == 1) {
            if (isset($array[$index[0]])) return $array[$index[0]];
        }
        if (count($index) == 2) {
            if (isset($array[$index[0]][$index[1]])) return $array[$index[0]][$index[1]];
        }
        if (count($index) == 3) {
            if (isset($array[$index[0]][$index[1]][$index[2]])) return $array[$index[0]][$index[1]][$index[2]];
        }
    } else {
        if (isset($array[$index])) return $array[$index];
    }
    return $default;
}

?>
