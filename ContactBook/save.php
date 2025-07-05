<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
    session_start();
    $name=$_POST['name'];
    $Contact_No = trim($_POST['Contact_No']);
    $_SESSION['name'] = $name;
    $_SESSION['Contact_No'] = $Contact_NO;

    if(isset($Contact_No)&& strlen($Contact_No)==11 && ctype_digit($Contact_No)){
        
       
    $newContact = [
        "name" => $name,
        "Contact No" =>$Contact_No
    ];
    $contacts = json_decode(file_get_contents("contact.json"), true);
    $contacts[]=($newContact);
    file_put_contents("contact.json", json_encode($contacts, JSON_PRETTY_PRINT));
    header("Location: index.php");
    exit();


 }
 else{
    session_start();
    $_SESSION['error'] = "Contact No must be 11 digits and only numbers .";
    header("Location: add.php");
 }
 }
?>