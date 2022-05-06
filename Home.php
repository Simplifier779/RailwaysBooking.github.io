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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</head>

<body>
  <section class="header">
    <nav>
      <a href="Home.html"><img src="https://img.freepik.com/free-vector/railways-logo_23-2147510659.jpg"></a>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
          <li><a href="Home.php">Home</a></li>
          <li><a href="About Us.html">About Us</a></li>
          <li><a href="Register.html">Login/Register</a></li>
          <li><a href="Admin.php">Administrator</a></li>
          <li><a href="Contact Us.html">Contact Us</a></li>
        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <div class="text-box">
      <h1>One Stop Solution</h1>
      <p>Get yourself acquainted with the latest happenings in the world of railways. Go through the news articles
        below and enjoy!</p>
      <a href="Register.html" class="hero-btn">Make a Booking!</a>
    </div>
  </section>
  <!--News Articles-->
  <section class="news">
    <h1>Top Railways Articles:</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100" id="a">
          <img src="https://images.news18.com/ibnlive/uploads/2022/04/churchgate-station-16506854403x2.jpg?impolicy=website&width=510&height=356" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Reminiscence Of The Past: Western Railway Organises Heritage and Climate Exhibition at Churchgate Station in Mumbai</h5>
            <p class="card-text">On display at the two-day exhibition by Western Railway was some rare images along with information about all the green initiatives taken by the railway</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" id="a">
          <img src="https://images.news18.com/ibnlive/uploads/2022/04/indian-railways-tracks-16498202143x2.jpg?impolicy=website&width=510&height=356" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Indian Railways to Invest in Startups; Policy Promises Up to Rs 1.5 Cr Seed Money for Innovations</h5>
            <p class="card-text">The railways will invest in startups to get a headstart in procuring innovations directly from them with a promise of up to Rs 1.5 crore of seed money for innovative technological solutions for the national transporter, according to a policy paper. The Indian Railway Innovation Policy will identify and enable Indian innovators to engage with the railways for developing cost-effective, implementable, scalable solutions and functional prototypes for the national transporter, officials said.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" id="a">
          <img src="https://images.news18.com/ibnlive/uploads/2022/04/train-resized-3-16506819113x2.jpg?impolicy=website&width=510&height=356" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Indian Railways Update: IRCTC Cancels 142 Trains on April 23</h5>
            <p class="card-text"> Indian Railways has cancelled 142 trains, changed sourced station of 14 and short terminated 18 today on Saturday, April 23. However, no reasons regarding the cancellation of the trains were cited on the the Indian Railway Catering and Tourism Corporation (IRCTC) website. Those cancelled includes trains that were scheduled to travel to/from Uttar Pradesh, Delhi, Maharashtra, Chhattisgarh, Madhya Pradesh, Rajasthan, Jharkhand, West Bengal, Karnataka and Andhra Pradesh among others</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Customer Reviews-->
  <section class="review">
    <h1>Customer Reviews</h1>
    <p>Reviews from some of our users! </p>
    <div class="row">
      <div class="review-col">
        <img
          src="https://cdn.psychologytoday.com/sites/default/files/styles/article-inline-half-caption/public/field_blog_entry_images/2018-09/shutterstock_648907024.jpg?itok=0hb44OrI">
        <div>
          <p>
          This site definitely  appeals to the average person because the layout
is so  simple  but very  VERY  effective.  It is a clean  site  with a
flawless  look, and someone  without any  technical  background  would
definitely  appreciate  it.  The layout makes anyone feel  comfortable
because it is so well done and clean  looking.  You feel as if you are
in good hands and you know that you will be able to find  anything you
need on this site.
          </p>
          <h5>Amanda Bell</h5>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
      </div>
      <div class="review-col">
        <img
          src="https://imageio.forbes.com/specials-images/imageserve/61688aa1d4a8658c3f4d8640/Antonio-Juliano/0x0.jpg?fit=bounds&format=jpg&width=960">
        <div>
          <p>
          The design is very  professional and well done.  I love the washed-out
image of the  globe on the left  behind  the  links.  The  site  feels
great.  I suggest  that you change the fonts to Arial, a more  rounded
font, to go with the professional feel of the site.  There are minimum
graphics,  and the  graphics  there are small  and  fast-loading.  The
colors of the images go together nicely.
          </p>
          <h5>David Kingston</h5>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>
      </div>
    </div>
  </section>
  <!--Ending-->
  <section class="end">
    <h1>We bet you can't ask for a better<br /> Railway Service than this one!</h1>
    <a href="Contact Us.html" class="hero-btn">Contact Us</a>
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