<?php 
	$connection=mysqli_connect('localhost','root');
    mysqli_select_db($connection,'register');
    session_start();
?>
<!DOCTYPE html>
<html>
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
<form  method="post">
        <div id="login-box">
            <div class="left-box">
                <h1> Password Reset </h1>
                <input type="text" name="username" placeholder="Username" />
                <input type="text" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="New Password" required />
                <input type="password" name="password" placeholder="Confirm New Password" required />
                <input type="submit" name="submit" placeholder="Sign Up" />
            </div>
            <div class="right-box">
                <span class="signinwith">If you are an existing user then Login! </span>
                <a href="Login.php" class="hero-btn green-btn"style="margin-left:57px;">Login</a>
            </div>
            <div class="or">OR</div>
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
	
	<?php

		if(isset($_POST['submit']))
		{
			if(mysqli_query($connection,"UPDATE details SET password='$_POST[password]' WHERE Username='$_POST[username]'
			AND Email='$_POST[email]' ;"))
			{
				?>
					<script type="text/javascript">
                alert("The Password Updated Successfully.");
              </script> 

				<?php
			}
			
		}
	?></div>
</body>
</html>