<?php declare(strict_types=1); // strict requirement

// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days");
// // since strict is enabled and "5 days" is not an integer, an error will be thrown

function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

function addNumbers2(int $a, int $b) : float {
  return $a + $b;
}
echo addNumbers2(1, 5);
?>