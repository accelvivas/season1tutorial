<?php

$user_id = $_POST["user_id"];

include ('connections.php');

mysqli_query($connection, "DELETE FROM mytbl WHERE id = '$user_id'");

echo "<script language='JavaScript'>
    alert('Record has been Deleted!');
    window.location.href='index.php';
</script>";
?>
