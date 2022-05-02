
<?php
require_once('../config.php');
session_unset();
header("location:login.php");
print_r($_SESSION['username']);

exit();
?>