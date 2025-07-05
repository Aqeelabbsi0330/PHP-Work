<?php
   $index = $_GET['index'] ?? null;
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'] ?? null;
   if (isset($index)) {
       $contacts = json_decode(file_get_contents("contact.json"), true);
         $contact = $contacts[$index] ?? null;
   }
   $name = $_POST['name'] ?? '';
   
   $contact_No = $_POST['Contact_No'] ?? '';
   if(isset($contact_No) && strlen($contact_No) == 11 && ctype_digit($contact_No)) {
     $contact=[
         "name" => $name,
         "Contact No" => $contact_No
   ];
   $contacts[$index] = $contact;
    file_put_contents("contact.json", json_encode($contacts, JSON_PRETTY_PRINT));
    session_start();
    $_SESSION['message'] = "Contact updated successfully.";
    header("Location: index.php");
    exit;
   } else {
       session_start();
       $_SESSION['error'] = "Contact No must be 11 digits and only numbers.";
       header("Location: edit.php?index=$index");
       exit();
   }
  
   
    }
?>