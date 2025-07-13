<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <style>
        .navbar {
      background-color: #343a40;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
    }

    .navbar h1 {
      margin: 0;
      font-size: 22px;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-size: 16px;
      transition: color 0.3s;
    }

    .navbar a:hover {
      color: #17a2b8;
    }

    </style>
</head>
<body>
    <div class="navbar">
    <h1>📇 Contact Manager</h1>
    <div>
      <a href="contact.php">Contacts</a>
      <a href="group.php">Groups</a>
    </div>
  </div>
</body>
</html>