<?php
$connection=mysqli_connect('localhost','root');
mysqli_select_db($connection,'register');
session_start();
$Username=$_POST['username'];
$Email=$_POST['email'];
$Phone_Number=$_POST['pnumber'];
$DOB=$_POST['DOB'];
$Password=$_POST['password'];

$data="INSERT INTO details(Username,Email,Phone_number,Date_Of_Birth,Password) VALUES ('$Username','$Email','$Phone_Number','$DOB','$Password')";
$connect=mysqli_query($connection,$data);
if($connect){
    $_SESSION['Addition_Success']='The user data has been added successfully!';
    header('location:AddUser.php');
}
?>