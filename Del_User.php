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
                <li><a href="Admin_Edit.php">Add Trains</a></li>
                    <li><a href="Del_Train.php">Delete Trains</a></li>
                    <li><a href="AddUser.php">Add Users</a></li>
                    <li><a href="Del_User.php">Delete Users</a></li>
                    <li><a href="Logout.php" title="Logout">Logout</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>User List</h1>
    </section>
    <!--Book content-->
    <div class="alert alert-success" role="alert">
    <?php 
        if(isset($_SESSION['User_Delete_Success'])){
           echo $_SESSION['User_Delete_Success'];
           unset($_SESSION['User_Delete_Success']);
        }
        ?>
</div> 
    <?php
    $sql="SELECT * FROM details";
$result=mysqli_query($connection,$sql);
$count=mysqli_num_rows($result);
while ( $row = mysqli_fetch_assoc($result) ) :
  ?>
      <section class="Trains">
        <div class="row">
            <div class="col-sm-6">
              <div class="card" id="b" style="margin:5px;">
                <div class="card-body">
                  <h5 class="card-title"><?php echo "Username: ". $row['Username']?></h5>
                  <p class="card-text"><?php echo "Email Id: ".$row['Email']?><br><?php echo "Phone Number: ".$row['Phone_number']?><br><?php echo "Date Of Birth: ".$row['Date_Of_Birth']?><br><?php echo "Password: ".$row['Password']?><br></p>
                  <a href="Del_User_work.php?Customer_Id= <?php echo $row['Customer_Id']?>" class="btn btn-primary" name="Deluser">Delete User</a>
                </div>
              </div>
            </div>
</div>
            <?php
      endwhile;
      ?>
      </section>

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