<?php
$index=$_GET['index'] ?? null;
if(isset($index)){
    $contacts=json_decode(file_get_contents("contact.json"), true);
    $contact=$contacts[$index] ?? null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Contact</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 40px;
    }

    .form-container {
      background-color: #fff;
      max-width: 500px;
      margin: auto;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
    }

    button {
      background-color: #007BFF;
      color: white;
      padding: 12px 18px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #0056b3;
    }

    .back-link {
      text-align: center;
      margin-top: 20px;
    }

    .back-link a {
      text-decoration: none;
      color: #007BFF;
      font-weight: bold;
    }

    .back-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
 <?php
session_start();
if (isset($_SESSION['message'])) {
    echo "<script>alert('" . $_SESSION['message'] . "');</script>";
    unset($_SESSION['message']); // so it doesn't repeat
    
}
?>
  <div class="form-container">
    <h2>Edit Contact</h2>
    <form action="update.php" method="POST">
      <input type="hidden" name="index" value="<?php echo $index; ?>">

      <label>Name:</label>
      <input type="text" name="name" value="<?php echo htmlspecialchars($contact['name']); ?>" required>

      <label>Contact No:</label>
      <input type="text" name="Contact_No" value="<?php echo htmlspecialchars($contact['Contact No']); ?>" required>
       <?php
       echo isset($_SESSION['error']) ? "<p style='color:red; margin: top 20px;'>".$_SESSION['error']."</p>" : '';
       unset($_SESSION['error']); // Remove error so it doesn't show again on refresh
       ?>
      <button type="submit">💾 Update Contact</button>
    </form>

    <div class="back-link">
      <a href="index.php">← Back to Contacts</a>
    </div>
  </div>

</body>
</html>
