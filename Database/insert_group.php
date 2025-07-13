<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Group</title>
  <style>
    /* body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      
      height: 100vh;
      margin: 0;
    } */

      .box{
 display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-top:50px;
      }
    .container {
      background-color: white;
     
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-weight: bold;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
      font-size: 14px;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    .message {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
      color: green;
    }
  </style>
</head>
<?php
require 'navbar2.php'
?>
<body>
<div class="box">
  <div class="container">
    <h2>Add New Group</h2>
    <form action="add_group.php" method="POST">
      <label for="group_name">Group Name:</label>
      <input type="text" id="group_name" name="group_name" placeholder="Enter group name" required>

      <input type="submit" value="Add Group">
    </form>

     <!-- Optional: Message after submission  -->
    <div class="message" id="message">
      <!-- You can use JavaScript or PHP to show messages here -->
    </div>
  </div>
</div>
</body>
</html>  