<?php
$connection=mysqli_connect('localhost','root');
mysqli_select_db($connection,'register');
session_start();
if(isset($_GET['Customer_Id'])): 
    $Customer_Id=$_GET['Customer_Id'];
$sql="DELETE FROM details WHERE Customer_Id='$Customer_Id'";
$result=mysqli_query($connection,$sql);
if($result==true){
    $_SESSION['User_Delete_Success']="User has been successfully deleted! ";
            header("location:Del_User.php");
}
endif;
?>