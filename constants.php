<?php
define("GREETING", "This is a Test OF ConsTants...");
echo GREETING, "<br>";

define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting, "<br>", GREETING, "<br>";

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0], "<br>";

function myTest() {
  echo GREETING, "<br>";
}
 
myTest();
?>
