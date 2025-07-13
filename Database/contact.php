<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Page</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* Navbar */
    .navbar {
      background-color: #007BFF;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      margin: 0 12px;
      font-size: 16px;
      font-weight: bold;
    }

    .navbar a:hover {
      text-decoration: underline;
    }

    /* Main content */
    .main {
      flex: 1;
      padding: 40px;
      text-align: center;
    }

    .main h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .main p {
      color: #666;
      max-width: 600px;
      margin: auto;
    }

    /* Buttons */
    .btn-container {
      margin-top: 30px;
    }

    .btn {
      background-color: #007BFF;
      border: none;
      color: white;
      padding: 12px 20px;
      margin: 10px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    /* Footer */
    footer {
      background-color: #343a40;
      color: white;
      padding: 15px;
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div>
      <a href="Home.php">🏠 Home</a>
      <a href="contact.php">📇 Contacts</a>
      <a href="group.php">👥 Groups</a>
    </div>
  </div>

  <div class="main">
    <h2>📇 Contact Management</h2>
    <p>Here you can manage your contacts easily. Use the buttons below to perform various operations.</p>

    <div class="btn-container">
      <a href="view.php"><button class="btn">👁️ View Contact</button></a>
      <a href="insert_contact.php"><button class="btn">➕ Insert Contact</button></a>
      <a href="update_contact.php"><button class="btn">✏️ Update Contact</button></a>
      <a href="delete_contact.php"><button class="btn">🗑️ Delete Contact</button></a>
    </div>
  </div>

  <footer>
    &copy; <?php echo date("Y"); ?> ContactBook App | All rights reserved.
  </footer>

</body>
</html>
