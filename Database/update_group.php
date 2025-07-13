<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Group</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #ffc107;
            color: #333;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #d39e00;
            color: #fff;
        }
        select {
        width: 100%;
        /* max-width: 300px; */
        padding: 10px 12px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 6px;
        background-color: #fff;
        margin-bottom: 50px;
        color: #333;
        transition: border-color 0.3s, box-shadow 0.3s;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    select:focus {
        border-color: #3498db;
        outline: none;
        box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    }

    option {
        padding: 10px;
    }
    </style>
</head>

<body>
<?php
require 'connection.php';
$sql="SELECT * FROM groups";
$result=mysqli_query($conn,$sql);

?>
    <div class="container">
        <h2>Update Group Name</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="old_name">Current Group Name:</label>
            <select name="old_name" id="old_name" required>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" .htmlspecialchars( $row['group_name'] ). "'>" .htmlspecialchars( $row['group_name'] ). "</option>";
                    }
                } else {
                    echo "<option value=''>No groups available</option>";
                }
                ?>
            <label for="new_name">New Group Name:</label>
            <input type="text" id="new_name" name="new_name" placeholder="Enter new group name" required>

            <input type="submit" value="Update Group">
        </form>
    </div>
<?php
require 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $old_name = $_POST['old_name'];
    $new_name = $_POST['new_name'];
    $sql="UPDATE groups SET group_name = '$new_name' WHERE group_name = '$old_name'";
    $result = mysqli_query($conn, $sql);
    if($result && mysqli_affected_rows($conn) > 0){
        echo "<script>
        alert('Group updated successfully');
        window.location.href = 'view_groups.php';
    </script>";
    } else {
        echo "<script>
        alert('Failed to update group or no changes made');
        window.location.href = 'update_group.php';
    </script>";
    }
    
  
}
?>
</body>

</html>