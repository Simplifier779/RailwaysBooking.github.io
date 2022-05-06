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
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section class="sub-header">
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
        <h1>Payment Confirmation</h1>
    </section>
    <!--Payment_Confirmation content-->
    <?php
    if(isset($_GET['Train_id'])): 
        $Train_id=$_GET["Train_id"];
    $sql="SELECT * FROM train_data WHERE Train_id='$Train_id'";
    $result=mysqli_query($connection,$sql);
    while($row = mysqli_fetch_assoc($result)):
    ?>
    <form action="Paymentdb.php" method="post">
        <div id="login-box" style="height:770px !important;">
            <div class="left-box">
                <h1> Payment Confirmation: </h1>
                <label type="text" name="Train_Name">Train Name: <?php echo $row['Train_Name']?> </label>
                <br/><br/>
                <label type="text" name="Source_Station">Source_Station: <?php echo $row['Source_Station']?></label>
                <br/><br/>
                <label type="text" name="Destination_Station">Destination_Station: <?php echo $row['Destination_Station']?></label>
                <br/><br/>
                <label type="time" name="Arrival_Time">Arrival_Time: <?php echo $row['Arrival_Time']?></label>
                <br/><br/>
                <label type="time" name="Departure_Time">Departure_Time: <?php echo $row['Departure_Time']?></label>
                <br/><br/>
                <label type="text" name="Cost Per Seat">Cost Per Seat:<br/>Adults:<?php echo $row['Cost_Seat_Adult']?>  Children:<?php echo $row['Cost_Seat_Child']?></label>
                <br/><br/>
                <label type="text" >Number Of Seats you want to Book:</label>
                <input type="number" name="seats" placeholder="0" required />
                <label type="text">Number Of Adults:</label>
                <input type="number" name="adults" placeholder="0" required />
                <label type="text">Number Of Children:</label>
                <input type="number" name="child" placeholder="0" required />
                <input type="hidden" name="Train_id" value="<?php echo $row['Train_id']?>">
                <input type="submit" name="signup-button" placeholder="Sign Up" />
            </div>
            <div class="right-box" style="height:770px !important;">
                <span class="signinwith" style="align-content:center;">You are on the final Step before confirmation! </span>
            </div>
        </div>
    </form>
    <?php
    endwhile;
    endif;
    ?>

    <!--Footer-->
    <section class="footer">
        <h4>About Us</h4>
        <p>
We are aiming to make Railway Ticketing Services smoother, faster and efficient!
            <br>
            © 2022 Saikrishna Karra. All Rights Reserved
        </p>
    </section>
</body>

</html>