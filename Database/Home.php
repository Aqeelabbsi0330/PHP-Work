<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Management Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9f9f9;
    }

    /* Navbar */
    
    /* Main */
    .main-content {
      padding: 40px;
      text-align: center;
    }

    .main-content h2 {
      font-size: 28px;
      color: #333;
    }

    .main-content p {
      font-size: 18px;
      color: #666;
      max-width: 700px;
      margin: 20px auto;
    }

    /* Footer */
    .footer {
      background-color: #343a40;
      color: white;
      text-align: center;
      padding: 15px;
      position: fixed;
      bottom: 0;
      width: 100%;
      font-size: 14px;
    }
  </style>
</head>
<body>
 <?php
 require 'navbar.php'
 ?>

  <div class="main-content">
    <h2>Welcome to Your Contact Dashboard</h2>
    <p>
      Easily manage your personal and professional contacts. Create groups, organize information, and update contact details all in one place.
    </p>
  </div>

  <div class="footer">
    &copy; <?php echo date('Y'); ?> Contact Manager. All rights reserved.
  </div>
</body>
</html>
