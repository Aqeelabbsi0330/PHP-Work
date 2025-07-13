<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete Contact</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 40px;
    }

    .form-container {
      max-width: 400px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
      text-align: center;
    }

    h2 {
      color: #333;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
      color: #555;
      text-align: left;
    }

    input[type="number"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 20px;
    }

    button, .nav-button {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 6px;
      margin-top: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button {
      background-color: #dc3545;
      color: white;
    }

    button:hover {
      background-color: #c82333;
    }

    .nav-button {
      background-color: #6c757d;
      color: white;
      text-decoration: none;
      display: block;
      text-align: center;
    }

    .nav-button:hover {
      background-color: #5a6268;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Delete a Contact</h2>
    <form action="delete_process.php" method="POST">
      <label for="id">Enter Contact ID to Delete:</label>
      <input type="number" name="id" id="id" required>
      <button type="submit">Delete</button>
    </form>

    <a href="view.php" class="nav-button">Back to Contact Page</a>
    <a href="Home.php" class="nav-button">Home</a>
  </div>

</body>
</html>
