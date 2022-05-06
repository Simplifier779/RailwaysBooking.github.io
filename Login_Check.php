<?php
$connection=mysqli_connect('localhost','root');
mysqli_select_db($connection,'register');
session_start();
$Username=$_POST['username'];
$Password=$_POST['password'];

$Username = stripcslashes($Username);  
        $Password = stripcslashes($Password);  
        $Username = mysqli_real_escape_string($connection, $Username);  
        $Password = mysqli_real_escape_string($connection, $Password);   
      
        $sql = "select * from details where username = '$Username' and password = '$Password'";  
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);
        if($count==true){  
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['Login_Success']="Login Successful! Welcome ".$Username;
            header("location:Dashboard.php");
        }  
        else{  
            $_SESSION['Login_Failed']="Invalid Username or Password!";
            header("location: Login.php");  
        }
?>
