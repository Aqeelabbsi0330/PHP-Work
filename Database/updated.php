<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updated</title>
    <style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f0f4f8;
    margin: 0;
    padding: 0;
  }

  .contact {
    max-width: 800px;
    margin: 50px auto;
    background: #fff;
    padding: 30px;
    border-left: 5px solid #007BFF;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  }

  .contact h2 {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
  }

  th, td {
    padding: 12px 15px;
    border: 1px solid #ccc;
    text-align: center;
  }

  th {
    background-color: #007BFF;
    color: white;
    font-weight: bold;
  }

  td {
    background-color: #f9f9f9;
    color: #333;
  }

  a button {
    background-color: #6c757d;
    color: #fff;
    border: none;
    padding: 10px 16px;
    margin: 6px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 15px;
    transition: background-color 0.3s ease;
  }

  a button:hover {
    background-color: #343a40;
  }

  a:nth-child(2) button {
    background-color: #17a2b8;
  }

  a:nth-child(3) button {
    background-color: #dc3545;
  }

  a:nth-child(4) button {
    background-color: #28a745;
  }

  a:nth-child(5) button {
    background-color: #007BFF;
  }

  a button:hover {
    opacity: 0.9;
  }
</style>

</head>
<body>
    
</body>
</html>
<?php
require 'connection.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM Contacts WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if (!$row) {
        die("Error retrieving data:  or No Data exist against this id " . mysqli_error($conn));
    } else {
        echo "<div class='contact'>";
        echo "<h2> UpDated Contact Details</h2>";
       echo "<table>";
        echo "<tr>  
            <th> ID </th>
            <th> Name</th>
            <th> Phone</th>
            <th> Email</th>
            </tr>";
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>   ";
            echo "<td>". htmlspecialchars($row["name"]) . "</td>";
            echo "<td>". htmlspecialchars($row["phone"]) ."</td>";
            echo "<td>". htmlspecialchars($row["email"]) ."</td>";
            echo "</tr>";
        echo "</table>";
        echo "<a href=view.php><button >Ok</button></a>";
        echo "<a href=update_contact_again.php><button >Update  Contact Again</button></a>";
        echo "<a href=delete_contact.php><button >Delete Contact</button></a>"; 
        echo "<a href=insert_contact.php><button >Insert New Contact</button></a>";
        echo "<a href=view.php><button >Go to Contact Page</button></a>";
        echo "</div>";
    }
}
?>