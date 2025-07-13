<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Insert Contact</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f5f5;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    

    .container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
    }

    .form-box {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-top: 12px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"] {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
    }

    button {
      background-color: #28a745;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 20px;
      width: 100%;
    }

    button:hover {
      background-color: #218838;
    }

    footer {
      background-color: #343a40;
      color: white;
      padding: 15px;
      text-align: center;
    }
  </style>
</head>
<body>

 

  <div class="container">
    <div class="form-box">
      <h2>➕ Insert New Contact</h2>
      <form action="insert_process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <?php 
        session_start();
        if (isset($_SESSION["phone error"])) {
          echo "<p style='color: red;'>" . $_SESSION["phone error"] . "</p>";
          unset($_SESSION["phone error"]);
        }
         if (isset($_SESSION["email error"])) {
          echo "<p style='color: red;'>" . $_SESSION["email error"] . "</p>";
          unset($_SESSION["phone error"]);
        }
         if (isset($_SESSION["name error"])) {
          echo "<p style='color: red;'>" . $_SESSION["name error"] . "</p>";
          unset($_SESSION["phone error"]);
        }
        ?>

        <button type="submit">📥 Insert Contact</button>
      </form>
    </div>
  </div>

  <footer>
    &copy; <?php echo date("Y"); ?> ContactBook App | All rights reserved.
  </footer>

</body>
</html>
