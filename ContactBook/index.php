<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php 
    session_start();

if (isset($_SESSION['message'])) {
    echo "<script>alert('" . $_SESSION['message'] . "');</script>";
    unset($_SESSION['message']);
}
    ?>
    
    <?php
    $contacts=json_decode(file_get_contents("contact.json"),true);
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Contact No</th>
        </tr>
        <?php foreach($contacts as $key=>$contact):?>
        <tr>
            <td><?php echo $contact["name"]; ?> <a href="delete.php?index=<?php echo $key;?>"> <button style="padding: 6px;
        background-color: transparent;
        border: none;
        cursor: pointer;
        border-radius: 5px" onclick="return confirm('are you want to delete it ?')">🗑️ </button></a>
        <a href="edit.php?index=<?php echo $key ;?>"><button style="padding: 6px;
        background-color: transparent;
        border: none;
        cursor: pointer;
        border-radius: 5px">✏️</button></a></td>
            <td><?php echo $contact["Contact No"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <div style="text-align: center; margin-bottom: 20px;">
  <a href="add.php">
    <button style=" margin:20px 10px ;padding: 10px 20px; font-size: 16px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
      ➕ Add New Contact
    </button>
  </a>
</div>
</body>
</html>