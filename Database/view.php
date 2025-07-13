<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>view</title>
   <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f9;
      padding: 30px;
    }

    .contact {
      max-width: 800px;
      margin: 30px auto;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
      background-color: #fff;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 14px 20px;
      text-align: left;
    }

    th {
      background-color: #4a69bd; /* Blue */
      color: white;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    tr:nth-child(even) {
      background-color: #f0e6dd; /* Light Brown */
    }

    tr:nth-child(odd) {
      background-color: #fff;
    }

    td {
      color: #333;
      font-size: 16px;
    }

    tr:hover {
      background-color: #dfe4ea;
    }

    h2 {
      text-align: center;
      color: #4a69bd;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  

<?php
  require 'connection.php';
  require 'navbar2.php';
  $sql="select * from Contacts";
  $result = mysqli_query($conn, $sql);
  if(!$result||mysqli_num_rows($result)==0) {
    die("Error retrieving data:  or data not exist : " . mysqli_error($conn));
  }
  else {
    $rows= mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo "<div class='contact'>";
    echo "<h2>Contact List</h2>";
    echo"<Table>";
    echo "<tr>
        <th> id </th>
        <th> Name</th>
        <th> phone</th>
        <th> email</th>
    </tr>";
    foreach($rows as $row) {
      echo "<tr>";
      echo "<td>". htmlspecialchars($row['id'])." </td>";
      echo "<td>". htmlspecialchars($row['name'])." </td>";
      echo "<td>". htmlspecialchars($row['phone'])." </td>";
      echo "<td>". htmlspecialchars($row['email'])." </td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
  }
?>
</body>
</html>