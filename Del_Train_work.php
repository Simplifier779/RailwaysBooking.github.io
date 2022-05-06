<?php
$connection=mysqli_connect('localhost','root');
mysqli_select_db($connection,'register');
session_start();
if(isset($_GET['Train_id'])): 
    $Train_id=$_GET["Train_id"];
$sql="DELETE FROM train_data WHERE Train_id='$Train_id'";
$result=mysqli_query($connection,$sql);
if($result==true){
    $_SESSION['Delete_Success']="Train has been successfully deleted!";
            header("location:Del_Train.php");
}
endif;
?>