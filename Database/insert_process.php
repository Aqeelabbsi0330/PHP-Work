<?php
 require 'connection.php';
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
   

    if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone'])) {
      
      $name = $_POST['name'];
      $email =$_POST['email'];
      $phone = $_POST['phone'];
    } else {
      die("Error: Required fields are missing.");
  }

  } 
  if(strlen($phone)!=11 || ctype_digit($phone)) {
    session_start();
    $_SESSION["phone error"] = "Phone number must be 11 digits and only numbers.";
  }
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    session_start();
    $_SESSION["email error"] = "Invalid email format.";
  }
  if(strlen($name) < 3 || !preg_match("/^[a-zA-Z ]*$/", $name) || Strlen ($name) >20) {
    session_start();
    $_SESSION["name error"] = "Name must be at least up to 20 characters long. and contain only letters and spaces.";
  }
     
  $sql="INSERT INTO Contacts (name, email, phone) VALUES ('$name', '$email', '$phone')";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
    die("Error inserting data: " . mysqli_error($conn));
  } else {

    echo "<script>alert('Contact added successfully!');</script>";
  }
  header("Location: view.php");
  exit ;

?>