<?php
$txt1 = "this is text1 ";
$txt2 = "this is text2 ";
echo "Hello world! strlen ", strlen("Hello world!"); // outputs 12
echo "<br>";
echo "Hello world! str_word_count ", str_word_count("Hello world!"); // outputs 2
echo "<br>";
echo "Hello world! strrev ", strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";
echo "Hello world! strpos(\"world\") ", strpos("Hello world!", "world"); // outputs 6
echo "<br>";
echo "Hello world! strpos(\"Hell\") ", strpos("Hello world!", "Hell"); // outputs 6
echo "<br>";
echo "Hello world! strpos(\"Hello\") ", strpos("Hello world!", "Hello"); // outputs 6
echo "<br>";
echo "Hello world! strpos(\"llo\") ", strpos("Hello world!", "llo"); // outputs 6
echo "<br>";
echo "Hello world!str_replace(\"world\", \"Dolly\", \"Hello world!\") ",str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo "<br>";

echo "<br>";

echo "\$txt1 . \$txt2  ", $txt1 . $txt2, "<br>";
echo "\$txt1  ", $txt1, "<br>";
echo "\$txt1 .= \$txt2  ", $txt1 .= $txt2, "<br>";
echo "\$txt1  ", $txt1, "<br>";

echo "<br>";

$xpr1 = NULL;
$xpr2 = "NULL";
$xpr3 = "NOT NULL";
echo "\$xpr1 ", var_dump($xpr1), "<br>";
echo "\$xpr2 ", var_dump($xpr2), "<br>";
echo "\$xpr3 ", var_dump($xpr3), "<br>";
echo "\$turnary = \$xpr1 ? \$xpr2 : \$xpr3  ", $turnary = $xpr1 ? $xpr2 : $xpr3, "<br>";
echo "\$turnary = $turnary <br>";
echo "\$turnary = \$xpr2 ?? \$xpr3  ", $turnary = $xpr2 ?? $xpr3, "<br>";
echo "\$turnary = $turnary <br>";

/*
Regular Expression Functions
PHP provides a variety of functions that allow you to use regular expressions. The preg_match(), preg_match_all() and preg_replace() functions are some of the most commonly used ones:
  Function	Description
    preg_match()	Returns 1 if the pattern was found in the string and 0 if not
    preg_match_all()	Returns the number of times the pattern was found in the string, which may also be 0
    preg_replace()	Returns a new string where matched patterns have been replaced with another string
*/
?>