<html>
<body>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  echo "\$data :  $data <br>";
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p>Name: <input type="text" name="name"></p>
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
<p>E-mail: <input type="text" name="email"></p>
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
<p>Website: <input type="text" name="website"></p>
<span class="error">* <?php echo $websiteErr;?></span>
<br><br>
<p>Comment: <textarea name="comment" rows="5" cols="40"></textarea></p>
<br><br><br>

<p>Gender:</p>
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>

<input type="submit">

<p> <?php echo "this is the form: ", var_dump($_POST), "<br>";?> </p>
</form>
</body>

</html>