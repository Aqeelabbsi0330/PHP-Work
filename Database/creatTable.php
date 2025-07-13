<?php 
$username = "root";
$password="root123";
$host="localhost";
// Create connection
$conn = mysqli_connect($host, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
if(mysqli_select_db($conn, "ContactBook")) {
    echo "Database selected successfully<br>";
    $Contacts="CREATE TABLE IF NOT EXISTS Contacts (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        phone VARCHAR(15) NOT NULL
       
    )";
    $Groups="CREATE TABLE IF NOT EXISTS Groups (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        group_name VARCHAR(50) NOT NULL
    )";
    $GroupContacts="CREATE TABLE IF NOT EXISTS GroupContacts (
        group_id INT(11) NOT NULL,
        contact_id INT(11) NOT NULL,
        PRIMARY KEY (group_id, contact_id),
        FOREIGN KEY (group_id) REFERENCES Groups(id)  on Delete Restrict,
        FOREIGN KEY (contact_id) REFERENCES Contacts(id) on Delete Restrict

    )";
    if(mysqli_multi_query($conn,"
        $Contacts;
        $Groups;
        $GroupContacts;"))
    echo "Tables created successfully";
} else {
    echo "Error selecting database: " . mysqli_error($conn);
}
?>