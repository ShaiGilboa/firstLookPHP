<?php
  /*
    while - loops through a block of code as long as the specified condition is true
    do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
    for - loops through a block of code a specified number of times
    foreach - loops through a block of code for each element in an array

    break - The break statement can also be used to jump out of a loop.
    continue - The continue statement breaks one iteration (in the loop)
  */

  $x = 1;
echo "while (condition) do (code) <br>";
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

echo "<br>";

$x = 1;
echo "do (code) while (condition) <br>";
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

echo "<br>";
echo "fpr (\$x = 0; \$x <= 10; \$x++) {...} <br>";
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

echo "<br>";

$colors = array("red", "green", "blue", "yellow");
echo "foreach (\$array_name as \$value) {...} <br>";
foreach ($colors as $value) {
  echo "$value <br>";
}

echo "<br>";

echo "break: (x=0; x<10; x++)  if x==4 break: <br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}

echo "<br>";

echo "continue: (x=0; x<10; x++)  if x==4 continue : <br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>