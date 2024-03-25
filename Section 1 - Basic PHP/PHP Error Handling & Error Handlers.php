<?php
// error handling

/*
function  handleError($errno, $errstr) {
    echo "Error: [$errno] $errstr\n";
}

set_error_handler('handleError', E_ALL);

echo $x; // undefined variable - should trigger an error
*/

// anther example

function  handleError(
  int $type,
  string $message,
  ?string $file = null,
  ?int $line = null ,
) {
  echo "Error: [$type] <br> msg : $message" . '<br>in file' . $file . '<br>in line' . $line. "\n";
  exit;
}
error_reporting(E_ALL & ~E_NOTICE);

set_error_handler('handleError', E_ALL);

echo $x; // undefined variable - should trigger an error