<?php
session_start(); 
$username=$_POST['username'];
$password=$_POST['password'];

$dbEmail="tariqshreem00@gmail.com";
$dbPassword="12345678";
if($username==$dbEmail){
    if($password==$dbPassword){
      $_SESSION['username']="tariq shreem";
      $_SESSION['useremail']=$username;
      header("location:home.php");
    }else {
     $_SESSION['error']='your password is invalid';
      header("location:index.php");
    }
}else{
    $_SESSION['error']='your email is invalid';
    header("location:index.php");
}
?>