<?php
require 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $contact_id = mysqli_real_escape_string($conn,$_POST['id']);

   $sql = "DELETE FROM contacts WHERE id =$contact_id";
   
   $result= mysqli_query($conn, $sql);
   if(mysqli_affected_rows($conn) > 0){
       echo "<script>
    alert('Contact deleted successfully');
    window.location.href = 'delete_contact.php';
</script>";
   } else {
    echo "<script>
    alert('No contact found with the given ID');
    window.location.href = 'delete_contact.php';
</script>";
   }

}
?>