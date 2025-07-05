<!DOCTYPE html>
<html>
<head>
  <title>Add Contact</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      padding: 40px;
    }
    form {
      background-color: white;
      padding: 20px;
      max-width: 400px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input[type="text"], input[type="email"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>
<?php
 $contacts = json_decode(file_get_contents("contact.json"), true);
 
?>

<h2 style="text-align:center;">Add New Contact</h2>

<form action="save.php" method="POST">
    <?php
    session_start();
    $name=isset($_SESSION['name']) ? $_SESSION['name'] : '';
    ?>
  <label>Name:</label>
  <input type="text" name="name" value="<?php echo htmlspecialchars($name)?>" required>

  <label>Contact No:</label>
  <input type="text" name="Contact_No" required>
  <?php

if (isset($_SESSION['error'])) {
    echo "<p style='color:red;'>".$_SESSION['error']."</p>";
    unset($_SESSION['error']); // ✅ Remove error so it doesn't show again on refresh
}
  ?>

  <button type="submit">Save Contact</button>
</form>

</body>
</html>
