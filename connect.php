<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'library';
$conn = new mysqli($host,$user,$pass,$db);
session_start();
$Email = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email = '$Email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
    $Type = $row['type'];
if($_SESSION['email'] == '')
    header("location:login.php");
?>
