<?php
require 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $group_name = mysqli_real_escape_string($conn, $_POST['group_name']);
    if (empty($group_name)) {
        echo "<script>alert('Group name cannot be empty');</script>";
    } else {
        $sql = "INSERT INTO Groups (group_name) VALUES ('$group_name')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Group added successfully');
             window.location.href='group.php'</script>";
        } else {
            echo "<script>alert('Error adding group: " . mysqli_error($conn) . "');
            window.location.href='group.php</script>";
        }
    }
}
?>