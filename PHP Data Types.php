<?php
# we can activate strict mode
declare(strict_types=1);

/* Data Types & Type casting */
 # 4 Scalar types
        # bool -  true / false
        $var1 = true;
        # int - 1 2 3 / 0 -5
        $var2 = 235;
        $var22 = 200_000_000;
        $var222 = PHP_INT_MAX;
        $var2222 = PHP_INT_MIN;
        # float - 1.565 / 6.02
        $var3 = 1.65;
        $var33 = 13.5e3;
        $var333 = PHP_FLOAT_MAX;
        $var3333 = floor((0.1+0.7)*10); // result >> 7 because this is 7.999999991118 and the floor for it is 7
        $var3333 = ceil((0.1+0.7)*10); // result >> 8 because this is 7.999999991118 and the ceil for it is 8
        # string - 'hi' - "hello"
        $var4 = "Hello";

/** @var TYPE_NAME $var1 */
var_dump($var1);
echo "<br>";
        var_dump($var4);
echo "<br>";
        echo gettype($var2);
echo "<br>";
        echo gettype($var3);
echo "<br>";
 # 4 compound Types
        # array
        $var5 = [1,2,3,"go",true,null];
//        echo $var5;
echo "<br>";
echo '<pre>';
        print_r($var5);
echo '<pre/>';

        # object
        # callable
        # iterable
 # 2 special Types
        # resources
        # null




# hint example
function sum (int $x, int $y): int
{
    return $x + $y;
}
$sum = sum(2, 4);
echo $sum;

echo "<br>";

## type casting
$x = (int)'5_hello';
var_dump($x);

/* Boolean */
/*
 * 0 , -0 , '' , 0.0 , '0' , [] , null >>> all of this = false
 * 1 , or any +int >>> = true
 */

# INF >> infinity
echo PHP_FLOAT_MAX * 2 ;
echo "<br>";
# NAN >> not a number
echo log(-1);