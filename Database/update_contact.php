<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Enter Contact ID</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      padding: 40px;
    }

    .form-container {
      max-width: 400px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 10px;
    }

    input[type="number"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button {
      margin-top: 20px;
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
     .form-container {
    max-width: 500px;
    margin: 50px auto;
    background: #ffffff;
    padding: 30px 40px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    border-left: 5px solid #007BFF;
    border-radius: 8px;
  }

  .form-container h2 {
    text-align: center;
    color: #333;
    margin-bottom: 25px;
  }

  label {
    display: block;
    margin-top: 15px;
    color: #333;
    font-weight: 500;
  }

  input[type="text"],
  input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 15px;
  }

  input[readonly] {
    background-color: #f7f7f7;
    color: #777;
  }

  button[type="submit"] {
    width: 100%;
    margin-top: 25px;
    padding: 12px;
    background: #007BFF;
    color: white;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  button[type="submit"]:hover {
    background: #0056b3;
  }

  p {
    margin-top: 10px;
    font-size: 14px;
    color: red;
  }
  </style>
</head>
<body>
    <?php 
    require 'connection.php';
    ?>
  <div class="form-container">
    <h2>Enter Contact ID to Update</h2>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
      <label for="id">Contact ID:</label>
      <input type="number" name="id" id="id" required>

      <button type="submit">Enter</button>
    </form>
  </div>
  <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        if(isset($id) && !empty($id) && !isset($_POST['name'])) {
            $id = intval($id); // Ensure ID is an integer
        
        
       $sql= "SELECT * FROM Contacts WHERE id = $id";
       $result = mysqli_query($conn, $sql);
       if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
            $name = $row['name'];
            $phone = $row['phone'];
            $email = $row['email'];
       echo "<script>console.log('ID: $id, Name: $name, Phone: $phone, Email: $email');</script>";
        echo "<div class='form-container'>";
        echo "<h2>Update Contact</h2>"; 
        echo "<form action='update_process.php'  method='POST'>";
        echo "<input type='text' name='id' value='$id' onlyread>";     
        echo "<label for='name'>Name:</label>";
        echo "<input type='text' name='name' id='name' value='$name    ' required>";
        echo "<label for='phone'>Phone:</label>";   
        echo "<input type='text' name='phone' id='phone' value='$phone' required>";
        echo "<label for='email'>Email:</label>";
        echo "<input type='email' name='email' id='email' value='$email' required>";
      
        echo "<button type='submit' >Update</button>";   
        
       }
    } 
    else {
        echo "<p style='color: red;'>No contact found with ID $id.</p>";
        exit();
    } 
    }

echo "</form>";
echo "</div>";
    ?>
   
</body>
</html>
