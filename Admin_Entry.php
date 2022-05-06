<?php
$connection=mysqli_connect('localhost','root');
mysqli_select_db($connection,'register');
session_start();
$Username=$_POST['Username'];
$password=$_POST['password'];
$_SESSION['Username'] = $row['Username'];
$_SESSION['password'] = $row['password'];
$Username = stripcslashes($Username);  
        $password = stripcslashes($password);  
        $Username = mysqli_real_escape_string($connection, $Username);  
        $password = mysqli_real_escape_string($connection, $password);  
      
        $sql = "select * from admin where Username = '$Username' and password = '$password'";  
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);
        if($count == true){  
            $_SESSION['ALogin_Success']="Login Successful! Welcome ".$Username;
            header("location:Admin_Edit.php");
        }  
        else{  
            $_SESSION['ALogin_Failed']="Invalid Username or Password!";
            header("location: Admin.php");  
        }
?>