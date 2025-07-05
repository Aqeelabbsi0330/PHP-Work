<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Result Page</title>
  <link rel="stylesheet" href="result.css">  <!-- Linking external CSS -->
</head>
<body>
<?php
$name=stripslashes( $_POST['username']);
$email=filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$gender=$_POST['gender'];
$country=$_POST['country'];
echo "<h2>Submitted Information</h2>";
echo "<p>Email: $name</p> ";
echo "<p>Name: $email</p>"; 
echo "gender: $gender</p>";
echo '<p>Your Country Name is :'.$country.'</p>';
// date_default_timezone_set("saudia/jaddah");
// echo "The time is " . date("h:i:sa")
?>
</body>