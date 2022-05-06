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
    <form method="post"action="Dashboard.php" >
    <div class="alert alert-success" role="alert">
         </div> 
         <div id="login-box">
        <div class="left-box">
            <h1> Payment </h1>
            <label type="text"name="Total">Total Amount Payable: <?php  
        if(isset($_SESSION['Amount'])){
           echo $_SESSION['Amount'];
           unset($_SESSION['Amount']);
        }
        ?> </label>
                <br/><br/>
                <label type="number">Enter Credit Card Number:</label>
                <input type="number" name="credit" placeholder="12345678" required />
            <input type="submit" name="signup-button" placeholder="Sign Up" />
        </div>
        <div class="right-box">
        </div>
    </div>
    </form>

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