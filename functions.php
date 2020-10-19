<?php
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo "addNumbers: ", addNumbers(5, "5 days"), "<br>";
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

function addNumbers2(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers2(1.2, 5.2), "<br>";

function add_five(&$value) {
  $value += 5;
}

$num = 2;
echo "\$num = $num <br>";
add_five($num);
echo "\$value (in function with reference '&\$value') + 5 <br>";
echo "\$num = $num <br>";
?>