<?php
$host="localhost";
$username="root";
$password= "root123";
$conn=mysqli_connect($host,$username,$password);
if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
    exit();
}

// creat database
$sql = "CREATE DATABASE IF NOT EXISTS ContactBook";
if (mysqli_query($conn, $sql)) {
    // echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
if (!mysqli_select_db($conn, "ContactBook")) {
    die("Database selection failed: " . mysqli_error($conn));
}
?>