<!DOCTYPE html>
<html lang="en">
<?php
$connection=mysqli_connect('localhost','root');
mysqli_select_db($connection,'register');
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Booking Website:</title>
    <link rel="stylesheet" href="Full.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</head>

<body>
    <section class="sub-header"style="height:40vh;">
        <nav>
            <a href="Home.html"><img src="https://img.freepik.com/free-vector/railways-logo_23-2147510659.jpg"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                <li><a href="Dashboard.php">Dashboard</a></li>
                    <li><a href="Profile_display.php">Profile</a></li>
                    <li><a href="Book.php">Book Ticket</a></li>
                    <li><a href="Logout.php" title="Logout">Logout</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Train List</h1>
    </section>
    <!--Book content-->
    <?php
    $sql="SELECT * FROM train_data";
$result=mysqli_query($connection,$sql);
$count=mysqli_num_rows($result);
while ( $row = mysqli_fetch_assoc($result) ) :
  ?>
      <section class="Trains">
        <div class="row">
            <div class="col-sm-6">
              <div class="card" id="b" style="margin:5px;">
                <div class="card-body">
                  <h5 class="card-title"style="align:center;"><?php echo "Train Name: ". $row['Train_Name']?></h5>
                  <p class="card-text"><?php echo "Source Station: ".$row['Source_Station']?><br><?php echo "Destination Station: ".$row['Destination_Station']?><br><?php echo "Arrival Time: ".$row['Arrival_Time']?><br><?php echo "Departure Time: ".$row['Departure_Time']?><br><?php echo "Cost Of Seat(For Adult): ".$row['Cost_Seat_Adult']?><br><?php echo "Cost Of Seat(For Child): ".$row['Cost_Seat_Child']?><br><?php echo "Total Seats: ".$row['Seats']?><br></p>
                  <a href="Payment_Confirmation.php?Train_id= <?php echo $row['Train_id']?>" class="btn btn-primary">Book Seats</a>
                </div>
              </div>
            </div>
</div>
            <?php
            $_SESSION['Train_id']=$row['Train_id'];
      endwhile;
      ?>
      </section>

    <!--Footer-->
    <section class="footer">
        <h4>About Us</h4>
        <p>This is a wider card with supporting text below as a natural lead-in to additional content.<br> This card has
            even longer content than the first to show that equal height action.
            <br>
            © 2022 Saikrishna Karra. All Rights Reserved
        </p>
    </section>

</body>

</html>