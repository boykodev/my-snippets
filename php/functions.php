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

?>