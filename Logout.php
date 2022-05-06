<?php
$connection=mysqli_connect('localhost','root');
mysqli_select_db($connection,'register');
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);
header("Location:Home.php");
$_SESSION['Logout']="Successfully Logged Out!";
?>