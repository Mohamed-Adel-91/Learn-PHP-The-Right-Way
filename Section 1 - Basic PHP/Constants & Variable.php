<?php 

// variable 
$name = "hi";
$name = "hello";

define("CONSTANT","value -> I am a constant!"); 
// constant is a keyword in PHP.
// this is how  you declare a constant in PHP. 
// A constant is a value that remains the same throughout your script'echo $name; 
echo CONSTANT;
echo "<br>";
const CONSTANT_2 = "value -> I am a constant 2 !";
echo CONSTANT_2;
echo "<br>";
// the different between  define() and const are :
/*
1- You can use constants anywhere after they’ve been defined, whereas with define(), 
you need to call define() first before using the constant.

2- Constants cannot be redefined. If you try to use define() or const again
with the same name, it will just display a warning and nothing else. On the other hand,  
using const twice will produce an error.

3- the const defined at the compile time  , while define() is used at runtime .
*/

if(true){
  define("CON1","value");
  // const CON2 = "I am inside if block!"; >> this const is  valid only in globe scope not in if block
}

echo "<br>";

$paid = "CONST";

define('STATUS_' . $paid, value: 'I\'m value');

echo constant('STATUS_CONST') ;

echo "<br>";

// echo STATUS_CONST; >> we can write it  like this because of PHP5+ but we will get php lint error

echo "<br>";

echo PHP_VERSION;