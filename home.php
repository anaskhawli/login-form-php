<?php 
session_start();
$uname= $_SESSION['username'];
$uemail=$_SESSION['useremail'];
echo "welcome $uname and your email is $uemail";
?>

<a href="logout.php">logout</a>