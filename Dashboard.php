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
        <h1>Dashboard</h1>
    </section>
    <!--Dashboard content-->
    <div class="alert alert-success" role="alert">
    <?php 
        if(isset($_SESSION['Login_Success'])){
           echo $_SESSION['Login_Success'];
           unset($_SESSION['Login_Success']);
        }
        ?>
         </div> 
         <div class="alert alert-success" role="alert">
    <?php 
        if(isset($_SESSION['Payment_Success'])){
           echo $_SESSION['Payment_Success'];
           unset($_SESSION['Payment_Success']);
        }
        ?>
        <?php 
        if(isset($_SESSION['Cancel_Success'])){
           echo $_SESSION['Cancel_Success'];
           unset($_SESSION['Cancel_Success']);
        }
        ?>
</div>
<section class="bookk">
<table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <td colspan="7">
                  <h4 class="text-center text-info m-0">Your Bookings!</h4>
                </td>
              </tr>
              <tr>
                <th>payment_id</th>
                <th >Train_Name</th>
                <th >Source_Station</th>
                <th >Destination_Station</th>
                <th >Arrival_Time</th>
                <th >Departure_Time</th>
                <th >Seats_Booked</th>
                <th >Number Of Adults</th>
                <th >Number Of Children</th>
                <th >Amount Paid</th>
                <th >Cancel Booking</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $connection=mysqli_connect('localhost','root');
                mysqli_select_db($connection,'register');
                $sql="SELECT * FROM payment";
                $result=mysqli_query($connection,$sql);
                $count=mysqli_num_rows($result);
                while ( $row = mysqli_fetch_assoc($result)):
              ?>
              <tr>
                <td><?= $row['payment_id'] ?></td>
                <input type="hidden" class="pid" value="<?= $row['payment_id'] ?>">
                <td><?= $row['Train_Name'] ?></td>
                <td><?= $row['Source_Station'] ?></td>
                <td><?= $row['Destination_Station'] ?></td>
                <td><?= $row['Arrival_Time'] ?></td>
                <td><?= $row['Departure_Time'] ?></td>
                <td><?= $row['Seats_Booked'] ?></td>
                <td><?= $row['Number_Of_Adults'] ?></td>
                <td><?= $row['Number_Of_Children'] ?></td>
                <td><?= $row['Amount_Paid'] ?></td>
                <td>
                  <a href="Cancel_Booking.php?payment_id= <?php echo $row['payment_id']?>" class="btn btn-primary" name="cancel_book">Delete Train</a>
                </td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>

<br>
</section>
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