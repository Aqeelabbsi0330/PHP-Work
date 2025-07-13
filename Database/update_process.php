<?php
require'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['phone'])) {
    // Iska matlab user ne update ke liye form submit kiya hai — validate and update
   

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Validate inputs
    if (strlen($phone) != 11 || !ctype_digit($phone)) {
        $Errors["phone error"] = "Phone number must be 11 digits and only numbers.";
        header("Location: update_contact.php");
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $Errors["email error"] = "Invalid email format.";
    }
    
    if (strlen($name) < 3 || !preg_match("/^[a-zA-Z ]*$/", $name) || strlen($name) > 20) {
        $Errors["name error"] = "Name must be at least 3 characters long, up to 20 characters, and contain only letters and spaces.";
    }

    // Update query
    $sql = "UPDATE Contacts SET name='$name', email='$email', phone='$phone' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Contact updated successfully!');</script>";
    } else {
        echo "<script>alert('Error updating contact: " . mysqli_error($conn) . "');</script>";
    }
  header("Location: updated.php?id=$id");
    exit();
   }

 if (isset($Errors)) {
    foreach ($Errors as $error) {
        echo "<p style='color: red;'>$error</p>";
 }
}
?>