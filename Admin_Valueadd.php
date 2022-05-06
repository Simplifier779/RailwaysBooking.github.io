<?php
$connection=mysqli_connect('localhost','root');
mysqli_select_db($connection,'register');
session_start();
$Train_Name=$_POST['Train_Name'];
$Source_Station=$_POST['Source_Station'];
$Destination_Station=$_POST['Destination_Station'];
$Arrival_Time=$_POST['Arrival_Time'];
$Departure_Time=$_POST['Departure_Time'];
$Cost_Seat_Adult=$_POST['Cost_Seat_Adult'];
$Cost_Seat_Child=$_POST['Cost_Seat_Child'];
$Seats=$_POST['Seats'];
$data="INSERT INTO train_data(Train_Name,Source_Station,Destination_Station,Arrival_Time,Departure_Time,Cost_Seat_Adult,Cost_Seat_Child,Seats) VALUES ('$Train_Name','$Source_Station','$Destination_Station','$Arrival_Time','$Departure_Time','$Cost_Seat_Adult','$Cost_Seat_Child','$Seats')";
$connect=mysqli_query($connection,$data);
if($connect){
    $_SESSION['Train_Addition']='The train data has been added successfully!';
    header('location:Admin_Edit.php');
}
?>