<!DOCTYPE html>
<html>
<head>
  <title>Form Value Demo</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
    }
    .container {
      width: 400px;
      margin: 50px auto;
      background: white;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    input[type="submit"] {
      background-color: #28a745;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    h2 {
      text-align: center;
    }
  </style>
</head>
<body>
  <?php
  // Initialize variables
  $name = $email = $comment = $gender = "";

  // Form submit hone par values set karo
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];
  }
  ?>

  <div class="container">
    <h2>Form with Sticky Values</h2>
    <form method="post" action="<?php echo htmlspecialchars('FromValidation.php');?>">
      Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>

      E-mail: <input type="text" name="email" value="<?php echo $email; ?>"><br>

      Comment: <textarea name="comment" rows="4" cols="40"><?php echo $comment; ?></textarea><br>

      Gender:
      <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>> Female
      <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?>> Male
      <input type="radio" name="gender" value="other" <?php if ($gender == "other") echo "checked"; ?>> Other
      <br><br>

      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
