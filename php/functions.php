<?php

// get snippet of text
function get_snippet( $str, $wordCount = 10 ) {
  return implode( 
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

?>