<!DOCTYPE html>
<html lang="en">

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
        <h1>Add Users</h1>
    </section>
    <!--Register content-->
    <form action="Adminadd.php" method="post">
    <div class="alert alert-success" role="alert">
    <?php 
        if(isset($_SESSION['Registration_Success'])){
           echo $_SESSION['Registration_Success'];
           unset($_SESSION['Registration_Success']);
        }
        ?>
</div>
        <div id="login-box" style="height:500px !important;">
            <div class="left-box">
                <h1> User Addition </h1>
                <input type="text" name="username" placeholder="Username" />
                <input type="text" name="email" placeholder="Email" required />
                <input type="number" name="pnumber" placeholder="Phone Number" required />
                <input type="date" name="DOB" placeholder="Date Of Birth" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="password" name="password2" placeholder="Retype Password" />
                <input type="submit" name="signup-button" placeholder="Sign Up" />
            </div>
            <div class="right-box" style="height:500px !important;">
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