<?php

session_start();

unset($_SESSION['id']);
session_unset();
session_destroy();
echo "Logging out ... Please wait...";
header('Refresh: 2; URL=../index.php');
exit();

?>