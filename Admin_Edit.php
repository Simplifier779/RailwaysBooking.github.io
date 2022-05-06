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
                    <li><a href="Admin_Edit.php">Add Trains</a></li>
                    <li><a href="Del_Train.php">Delete Trains</a></li>
                    <li><a href="AddUser.php">Add Users</a></li>
                    <li><a href="Del_User.php">Delete Users</a></li>
                    <li><a href="Logout.php" title="Logout">Logout</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Add Trains</h1>
    </section>
    <!--Register content-->
    <form action="Admin_Valueadd.php" method="post">
    <div class="alert alert-success" role="alert">
    <?php 
        if(isset($_SESSION['Train_Addition'])){
           echo $_SESSION['Train_Addition'];
           unset($_SESSION['Train_Addition']);
        }
        ?>
        </div> 
    <div class="alert alert-success" role="alert">
    <?php 
        if(isset($_SESSION['ALogin_Success'])){
           echo $_SESSION['ALogin_Success'];
           unset($_SESSION['ALogin_Success']);
        }
        ?>
</div>
        <div id="login-box" style="height:800px !important;">
            <div class="left-box">
            <h1> Train Addition </h1>
            <label type="text">Train_Name:</label>
                <input type="text" name="Train_Name" placeholder="Rajdhani" />
                <label type="text">Source_Staion:</label>
                <input type="text" name="Source_Station" placeholder="CSMT" required />
                <label type="text">Destination_Station:</label>
                <input type="text" name="Destination_Station" placeholder="Delhi" required />
                <label type="text">Arrival Time:</label>
                <br>
                <input type="time" name="Arrival_Time" class="form-control" placeholder="09:00" required />
                <br>
                <label type="text">Departure Time:</label>
                <br>
                <input type="time" name="Departure_Time"class="form-control" placeholder="10:00" required />
                <label type="text">Cost_Seat_Adult:</label>
                <input type="text" name="Cost_Seat_Adult" placeholder="1500" required />
                <label type="text">Cost_Seat_Child:</label>
                <input type="text" name="Cost_Seat_Child" placeholder="700" required />
                <label type="text">Total Seats:</label>
                <input type="number" name="Seats" placeholder="500" required />
                <input type="submit" name="signup-button" placeholder="Sign Up" />
            </div>
            <div class="right-box" style="height:800px !important;">   
            </div>
        </div>
    </form>
    <!--Footer-->
    <section class="footer">
        <h4>About Us</h4>
        <p>We are aiming to make Railway Ticketing Services smoother, faster and efficient!
            <br>
            © 2022 Saikrishna Karra. All Rights Reserved
        </p>
    </section>
</body>

</html>