<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete Group</title>
  <style>
    body {
      background-color: #f0f2f5;
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #fff;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #444;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-bottom: 20px;
      font-size: 14px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #dc3545;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #a71d2a;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Delete Group</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      <label for="group_name">Enter the name of the group to delete:</label>
      <input type="text" id="group_name" name="group_name" placeholder="Group name" required>

      <input type="submit" value="Delete Group">
    </form>
  </div>
<?php
require 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $group_name = strtolower((trim(mysqli_real_escape_string($conn, $_POST['group_name']))));
    
    if (empty($group_name)) {
        echo "<script>alert('Group name cannot be empty');</script>";
    } else {
        $sql = "DELETE FROM Groups WHERE  LOWER(group_name)='$group_name'";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            echo "<script>alert('Group deleted successfully');
            window.location.href='group.php'</script>";
        } else {
            echo "<script>alert('Error deleting group: " . mysqli_error($conn) . "');
            window.location.href='group.php'</script>";
        }
    }
} else if ($_SERVER[""] == "") {
    echo "<script>alert('Invalid request method');</script>";
    header("Location: group.php");
    exit();
}
?>
</body>
</html>
