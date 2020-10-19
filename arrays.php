<?php
  /*
    In PHP, there are three types of arrays:
      Indexed arrays - Arrays with a numeric index
      Associative arrays - Arrays with named keys
      Multidimensional arrays - Arrays containing one or more arrays
*/
$cars = array("Volvo", "BMW", "Toyota");
echo "var_dump(\$cars)  ", var_dump($cars), "<br>";
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ". <br>";
echo "count(\$cars)  ", count($cars), "<br>";

echo "<br>";

$arrlength = count($cars);
echo "\$arrlength = count(\$cars) ", $arrlength, "<br>";
echo "loop through array: for(\$x = 0; \$x < \$arrlength; \$x++) { echo \$cars[\$x] } <br>";
for($x = 0; $x < $arrlength; $x++) {
  echo $x, " - ", $cars[$x];
  echo "<br>";
}

echo "<br>";

/*
  Associative arrays are arrays that use named keys that you assign to them.
    There are two ways to create an associative array: 
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    or:
    $age['Peter'] = "35";
    $age['Ben'] = "37";
    $age['Joe'] = "43";
*/
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "\$age = array(\"Peter\"=>\"35\", \"Ben\"=>\"37\", \"Joe\"=>\"43\") <br>"; 
echo "Peter is " . $age['Peter'] . " years old.", "<br>"; 
echo "<br>";
echo "foreach(\$age as \$x => \$x_value) { .. } <br>";
foreach($age as $x => $x_value) {
  echo "Key (\$x) =" . $x . ", Value (\$x_value) =" . $x_value;
  echo "<br>";
}

echo "<br>";

//two dimesional array
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo "2 dimensional array: <br>";
echo "\$cars = array ( <br>
  array(\"Volvo\",22,18), <br>
  array(\"BMW\",15,13), <br>
  array(\"Saab\",5,2), <br>
  array(\"Land Rover\",17,15) <br>
); <br> <br>";
echo "\$cars[0][0]\ \ \ \$cars[0][0]\ \ \ \$cars[0][0] . <br>";
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo "\$cars[1][0]\ \ \ \$cars[1][0]\ \ \ \$cars[1][0] . <br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo "\$cars[2][0]\ \ \ \$cars[2][0]\ \ \ \$cars[2][0] . <br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo "\$cars[3][0]\ \ \ \$cars[3][0]\ \ \ \$cars[3][0] . <br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

echo "<br>";

echo " for (\$row = 0; \$row < 4; \$row++) { <br>
  echo \"p>b>Row number \$row/b>/p>\"; <br>
  echo \"ul>\"; <br>
  for (\$col = 0; \$col < 3; \$col++) { <br>
    echo \"li>\".\$cars[\$row][\$col].\"/li>\"; <br>
  } <br> 
  echo \"/ul>\"; <br>
}  <br> <br>" ;
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}

echo "<br>";

/*
  PHP array sort functions:
    sort() - sort arrays in ascending order
    rsort() - sort arrays in descending order
    asort() - sort associative arrays in ascending order, according to the value
    ksort() - sort associative arrays in ascending order, according to the key
    arsort() - sort associative arrays in descending order, according to the value
    krsort() - sort associative arrays in descending order, according to the key
*/
$cars = array("Volvo", "BMW", "Toyota");
echo "var_dump(\$cars)  ", var_dump($cars), "<br>";
sort($cars);
echo "sort(\$cars) <br>";
echo "var_dump(\$cars)  ", var_dump($cars), "<br>";
rsort($cars);
echo "rsort(\$cars); <br>";
echo "var_dump(\$cars)  ", var_dump($cars), "<br>";

echo "<br>";
// asociative arrays
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "var_dump(\$age)  ", var_dump($age), "<br>";
ksort($age);
echo "ksort(\$age); <br>";
echo "var_dump(\$age)  ", var_dump($age), "<br>";
asort($age);
echo "asort(\$age); <br>";
echo "var_dump(\$age)  ", var_dump($age), "<br>";


?>