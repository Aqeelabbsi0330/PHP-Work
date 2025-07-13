  <?php
require 'connection.php';
if (isset($_GET['contact_id']) ){
    $contact_id = $_GET['contact_id'];
                $sql = "SELECT phone FROM contacts WHERE id = ?";
$result =mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($result, 'i', $contact_id);
mysqli_stmt_execute($result);
$result = mysqli_stmt_get_result($result);
$row = mysqli_fetch_assoc($result);
      if ($row) {
          $contact_number = $row['phone'];
          echo htmlspecialchars($contact_number);
                exit();
            } else {
                $contact_number = '';
                echo "no number foond against this contact id";
                exit();
      }
}
?>
