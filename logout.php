
<?php
require "connect.php";
$_SESSION['email'] == '';
session_destroy();
header("location:login.php");
?>