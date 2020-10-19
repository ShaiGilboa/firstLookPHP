<?php
$msg = "Hi Debug Console<br>";
echo $msg;

ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

$x = 5; // global scope

function myTest() {
  $x = 6; //local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

$x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  $y = $x + $y;
  echo "<br>";
}

myTest2();
echo "the value of y is: $y<br>"; // outputs 15
echo "<br>";


function myTest3() {
  static $z = 0;
  echo "the value of z id:$z";
  echo "<br>";
  $z++;
}

myTest3();
myTest3();
myTest3();


echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";


$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo "$x + $y <br>";

echo "x is a "; var_dump($x); echo "<br>";
echo "y is a "; var_dump($y); echo "<br>";
echo "msg is a "; var_dump($msg); echo "<br>";
echo "nsg is a "; var_dump($nsg); echo "<br>";

$cars = array("Volvo","BMW","Toyota");
echo "cars is a "; var_dump($cars); echo "<br>";

$testingNull = NULL;
echo "testingNull is a "; var_dump($testingNull); echo "<br>";

?>