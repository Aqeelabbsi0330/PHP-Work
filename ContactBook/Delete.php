<?php
   $contacts=json_decode(file_get_contents("contact.json"), true);
   $index=$_GET['index']?? null; 
   if(isset($index)){

  
   if(isset($contacts[$index])){
    unset($contacts[$index]);
    file_put_contents("contact.json", json_encode($contacts, JSON_PRETTY_PRINT));
    session_start();
    $_SESSION['message'] = "Contact deleted successfully.";
    header("Location: index.php");
    
    exit();
   }
    }
?>