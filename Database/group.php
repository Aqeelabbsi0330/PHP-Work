
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Group Management</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 80px auto;
      background-color: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      text-align: center;
    }

    h1 {
      margin-bottom: 30px;
      color: #333;
    }

    .btn {
      display: inline-block;
      margin: 10px;
      padding: 12px 24px;
      font-size: 16px;
      color: white;
      background-color: #007BFF;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .btn.delete { background-color: #dc3545; }
    .btn.delete:hover { background-color: #a71d2a; }

    .btn.update { background-color: #ffc107; color: #333; }
    .btn.update:hover { background-color: #d39e00; color: #fff; }

    .btn.view { background-color: #28a745; }
    .btn.view:hover { background-color: #1e7e34; }
    .btn.join { background-color: #ff9203ff; }
    .btn.view:hover { background-color: #ffde71ff; }
  </style>
</head>
<body>

  <div class="container">
    <h1>Group Management</h1>
    
    <a href="insert_group.php" class="btn">➕ Add Group</a>
    <a href="delete_group.php" class="btn delete">❌ Delete Group</a>
    <a href="update_group.php" class="btn update">✏️ Update Group</a>
    <a href="view_groups.php" class="btn view">📄 View Groups</a>
    <a href="join_Form.php" class="btn join">📄 join Group</a>
  </div>

</body>
</html>

