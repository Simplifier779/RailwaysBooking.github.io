<?php
    $connection=mysqli_connect('localhost','root');
    mysqli_select_db($connection,'register');
    session_start();
    if(isset($_GET['payment_id'])): 
        $payment_id=$_GET["payment_id"];
        $sql="DELETE FROM payment WHERE payment_id='$payment_id'";
    $result=mysqli_query($connection,$sql);
    if($result==true){
        $_SESSION['Cancel_Success']="The booking has been cancelled";
                header("location:Dashboard.php");
    }
    endif;
    ?>
