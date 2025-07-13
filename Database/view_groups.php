<?php
echo "<style>
 table {
        width: 100%;
        max-width: 600px;
        margin: 10px auto;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #3498db;
        color: white;
        font-weight: bold;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    td {
        color: #333;
    }

    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f5f6fa;
    }
</style>";
require 'connection.php';
$sql = 'SELECT * FROM groups';
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>
            <th>Group Id</th>
            <th>Group Name</th>   
    </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . htmlspecialchars($row['id']) . "</td>
                <td>" . htmlspecialchars($row['group_name']) . "</td>
              </tr>";
            }
            echo " </table>";
            
}
include 'group.php';
include 'navbar2.php'
?>