<?php

session_start();

if(isset($_SESSION["id"])) {
    $user_id = $_SESSION["id"];

  include('../connections.php');

  $get_record = mysqli_query($connection, "SELECT * FROM mytbl WHERE id = '$user_id'");
  while($row_edit = mysqli_fetch_assoc($get_record)) {
      $db_name = $row_edit['name'];
      $db_address = $row_edit['address'];
      $db_email = $row_edit['email'];
      $db_section = $row_edit['section'];
      $db_contact = $row_edit['contact'];
  }

  echo "Welcome $db_name!  <a href='logout.php'>Logout</a>";

} else {

echo "You must login first! <a href='../login.php'>Login</a>";

}

?>