<?php

/* php.ini & configuration */

// error_reporting , error_log , display_errors

// 1 - error_reporting
// var_dump(ini_get('error_reporting')); 
// echo '<br>';
// var_dump(E_ALL);      // (E_ALL - E_DEPRECATED)
// http://www.php.net/manual/en/errorfunc.configuration.php#ini.error-reporting
// ini_set('error_reporting',E_ALL & ~E_WARNING);


// 2 - display_errors
var_dump(ini_get('display_errors')); 
echo '<br>';
ini_set('display_errors','on');   // On / Off
// http://www.php.net/manual/en/errorfunc.configuration.php#ini.display-errors

$array = [1];
echo $array[3];

// Execution time 
ini_set('max_execution_time', 3);     // seconds
// memory_limit  is set by the web server, not PHP itself
sleep(2);
echo 'hello';    // will be displayed if display_errors=On
                  // and max_execution_time=Off or too low
echo '<br>';
var_dump(ini_get('memory_limit')); 