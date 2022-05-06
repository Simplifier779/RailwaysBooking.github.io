
<?php
$connection=mysqli_connect('localhost','root');
mysqli_select_db($connection,'register');
session_start();
if(isset($_POST['Train_id'])): 
    $Train_id=$_POST["Train_id"];
$sql="SELECT * FROM train_data WHERE Train_id='$Train_id'";
$result=mysqli_query($connection,$sql);
while($row = mysqli_fetch_assoc($result)):
$Train_Name=$row['Train_Name'];
$Source_Station=$row['Source_Station'];
$Destination_Station=$row['Destination_Station'];
$Arrival_Time=$row['Arrival_Time'];
$Departure_Time=$row['Departure_Time'];
$seats=$_POST['seats'];
$adults=$_POST['adults'];;
$child=$_POST['child'];;

$Total=$adults*1500+$child*800;
$data="INSERT INTO payment(Train_Name,Source_Station,Destination_Station,Arrival_Time,Departure_Time,Seats_Booked,Number_Of_Adults,Number_Of_Children,Amount_Paid) VALUES ('$Train_Name','$Source_Station','$Destination_Station','$Arrival_Time','$Departure_Time','$seats','$adults','$child','$Total')";

$connect=mysqli_query($connection,$data);

if($connect){
    $_SESSION['Payment_Success']='Payment Success!';
    header('location:Final_Payment.php');
    $_SESSION['Amount']=$Total;
}
endwhile;
endif;
?>

