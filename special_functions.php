<?php
  /*
  htmlspecialchars() -
    function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;. This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.
    "htmlspecialchars($_SERVER["PHP_SELF"])" as a POST or GET action (target).
  trim() -
    Strip unnecessary characters (extra space, tab, newline)
  stripslashes() - 
    Remove backslashes (\)
  empty() - 
    Checks if string is empty
    */

  /*
  date() -  date(format,timestamp)
    function is used to format a date and/or a time:
      d - Represents the day of the month (01 to 31)
      m - Represents a month (01 to 12)
      Y - Represents a year (in four digits)
      l (lowercase 'L') - Represents the day of the week
      H - 24-hour format of an hour (00 to 23)
      h - 12-hour format of an hour with leading zeros (01 to 12)
      i - Minutes with leading zeros (00 to 59)
      s - Seconds with leading zeros (00 to 59)
      a - Lowercase Ante meridiem and Post meridiem (am or pm)
  */

  echo "<h2>date() : </h2>", "<br>";
  echo "date(\"H\") : ", date("H"), "<br>";
  echo "date(\"M\") : ", date("M"), "<br>";
  echo "date(\"Y\") : ", date("Y"), "<br>";
  echo "date(\"m\") : ", date("m"), "<br>";
  echo "Today is " . date("Y/m/d") . " - date(\"Y/m/d\") <br>";
  echo "Today is " . date("Y.m.d") . " - date(\"Y.m.d\") <br>";
  echo "Today is " . date("Y-m-d") . " - date(\"Y-m-d\") <br>";
  echo "Today is " . date("l"), " - date(\"l\") <br>";
  echo "The time is " . date("h:i:sa"), " - date(\"h:i:sa\") <br>";

  echo "date_default_timezone_set(\"America/New_York\"); <br>
  echo \"The time is \" . date(\"h:i:sa\"); <br>";
  date_default_timezone_set("America/New_York");
  echo "The time is " . date("h:i:sa");

  echo "<br> <br>";

  /*
  mktime() - 
    function returns the Unix timestamp for a date.
  */
  echo "\$d=mktime(11, 14, 54, 8, 12, 2014); <br>
  echo \"Created date is \" . date(\"Y-m-d h:i:sa\", \$d); <br>";
  $d=mktime(11, 14, 54, 8, 12, 2014);
  echo "Created date is " . date("Y-m-d h:i:sa", $d), " \$d : $d";

  echo "<br> <br>";

  /*
  strtotime() - 
    function is used to convert a human readable date string into a Unix timestamp
  */
  echo "\$d=strtotime(\"10:30pm April 15 2014\"); <br>
  echo \"Created date is \" . date(\"Y-m-d h:i:sa\", \$d); <br>";
  $d=strtotime("10:30pm April 15 2014");
  echo "Created date is " . date("Y-m-d h:i:sa", $d), " \$d : $d";

  echo "<br> <br>";

?>