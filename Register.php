<?php
$connection=mysqli_connect('localhost','root');
mysqli_select_db($connection,'register');
session_start();
$username=$_POST['username'];
$email=$_POST['email'];
$pnumber=$_POST['pnumber'];
$DOB=$_POST['DOB'];
$password=$_POST['password'];

$data="INSERT INTO details(Username,Email,Phone_number,Date_Of_Birth,Password) VALUES ('$username','$email','$pnumber','$DOB','$password')";

$connect=mysqli_query($connection,$data);
if($connect){
    $_SESSION['Registration_Success']='Registration Successful.Proceed towards Login.';
    header('location:Login.php');
}
?>