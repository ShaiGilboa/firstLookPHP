<?php
echo "variable     is_int      is_integer      is_long     is_float       is_double<br>";

$x = 5985;
echo var_dump($x);
var_dump(is_int($x));
var_dump(is_integer($x));
var_dump(is_long($x));
var_dump(is_float($x));
var_dump(is_double($x));

echo "<br>";

$x = 59.85;
echo var_dump($x);
var_dump(is_int($x));
var_dump(is_integer($x));
var_dump(is_long($x));
var_dump(is_float($x));
var_dump(is_long($x));

echo "<br>";


$x = 1.9e411;
var_dump($x);

echo " $x <br>";

$x = acos(8);
var_dump($x);

echo " $x <br>";

echo "<h3>is_numberic</h3>";
$x = 5985;
var_dump(is_numeric($x));
echo " $x <br>";

$x = "5985";
var_dump(is_numeric($x));
echo " $x <br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));
echo " $x <br>";

$x = "Hello";
var_dump(is_numeric($x));
echo " $x <br>";


echo "<h3>cast / convert from one type to another</h3>";
// Cast float to int
$x = 23465.768;
echo "x($x) is a "; var_dump($x); echo "<br>";
$int_cast = (int)$x;
echo "int_cast ", $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
echo "x($x) is a "; var_dump($x); echo "<br>";
$int_cast = (int)$x;
echo "int_cast ", $int_cast;

echo "<br>";

echo "pi() ", pi(), "<br>";

echo "<br>";
echo "min(0, 150, 30, 20, -8, -200) ", min(0, 150, 30, 20, -8, -200), "<br>";  // returns -200
echo "max(0, 150, 30, 20, -8, -200) ", max(0, 150, 30, 20, -8, -200), "<br>";  // returns 150

echo "<br>";
echo "abs(-6.7) ", abs(-6.7), "<br>";  // returns 6.7

echo "<br>";
echo "sqrt(64) ", sqrt(64), "<br>";
echo "sqrt(50) ", sqrt(50), "<br>";

echo "<br>";
echo "round(0.60) ", round(0.60), "<br>";  // returns 1
echo "round(0.49) ", round(0.49), "<br>";  // returns 0

echo "<br>";
echo "rand() ", rand(), "<br>";
echo "rand(10, 100) ", rand(10, 100), "<br>";

echo "<br>";

define("num1", 8);
define("num2", 10);
define("num3", 7);
echo "8<=>7  ", num1 <=> num3, "<br>";
echo "7<=>8  ", num3 <=> num1, "<br>";
echo "10<=>7  ", num2 <=> num3, "<br>";
echo "7<=>10  ", num3 <=> num2, "<br>";
echo "8<=>8  ", num1 <=> num1, "<br>";

echo "<br>";
$x = 5;
echo "x is $x <br>";
echo "++\$x ", ++$x, "<br>";
echo "x is $x <br>";
echo "\$x++ ", $x++, "<br>";
echo "x is $x <br>";
echo "--\$x ", --$x, "<br>";
echo "x is $x <br>";
echo "\$x-- ", $x--, "<br>";
echo "x is $x <br>";
?>