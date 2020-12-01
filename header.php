<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--  fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--  font -->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Montserrat:wght@400;500;700&family=Sacramento&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
  <!-- bootstrap-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body style="background-color:black;">
  <section id="title">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="header.php">Cozy void</a>






      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="about.html"> <i class="fa fa-instagram fa-lg" aria-hidden="true" style="color:white;"></i></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.html"> <i class="fa fa-twitter fa-lg" aria-hidden="true" style="color:white;"></i></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.html"> <i class="fa fa-facebook fa-lg" aria-hidden="true" style="color:white;"></i></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.html"> <i class="fa fa-linkedin fa-lg" aria-hidden="true" style="color:white;"></i></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.html"> <i class="fa fa-google fa-lg" aria-hidden="true" style="color:white;"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.html">COZY VOID WORLD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.html">PRODUCTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="chatbot.html">CHAT WITH US</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              CONTACT
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="team.php">TEAM</a>



            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- slides  -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000" data-pause="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/s1.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">

            <p  style="font-family: 'Secular One', sans-serif;font-size:50px;">Coz happy people deserve happy homes</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/s2.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">

            <p  style="font-family: 'Secular One', sans-serif;font-size:50px;">Interiors that reflect your style</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/s3.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">

            <p  style="font-family: 'Secular One', sans-serif;font-size:50px;">Get cozy with us</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- IDEA: features  -->

  <section id="features" style="padding:50px 30px 50px 30px;text-align:center;color:white;">
    <div class="row">
      <div class="col-lg-3">

        <h3>Trustworthy</h3>
        <p>Coz who else can you trust when it comes to your home</p>
      </div>
      <div class="col-lg-3">
        <h3>Understanding</h3>
        <p>Coz we understand your home is all about you</p>
      </div>
      <div class="col-lg-3">

        <h3>Cost Efficient</h3>
        <p>Coz we know dream houses are not worth leaving you broke</p>
      </div>
      <div class="col-lg-3">

        <h3>Modern</h3>
        <p>Coz we know a little bit of dazzle can light up your whole world</p>
      </div>
    </div>
  </section>

  <!-- IDEA: welcome -->
  <div class="welcome">
    <p>Want someone to convert your house into a home ?
      Need to furnish your house with a realistic budget ?
      Cozy void will help you to find your happy place.
      Adorn your inner world
      creating your space
      coz good people deserve good home
      interiors that reflect your style
      get cozy with us
    </p>
    <a href="product.html" class="start">SHOP</a>

  </div>
  <!-- IDEA: about us -->
  <div class="wedo" style="background-image: url('images/bg1.jpg');">
    <h5 style="padding:2px 5px;margin:20px;font-family:'Montserrat', sans-serif;text-align:left">WHAT DO WE DO ?</h5>
    <p>We help you build your homes according to your vision. May it be a small corner or the whole house we got your back .With cozy void you can transform any void space into a cozy spot . and not only will it add artistry to your home but here we also treasure functionality  </p>
  <br><br>
  <h5 style="padding:2px 5px;margin:20px;font-family:'Montserrat', sans-serif;text-align:left">ABOUT Cozy Void :-</h5>
  <p>We created this blog to help millions of users like you to gain ideas an create your dream house .
here we believe in experimentation so if u willing to explore and get bewildered this site is for you .
</p>
</div>
<br>
  <!-- IDEA: home tour -->
  <section class="hometour">
    <div class="container" style="background-color:#e4e3e3;">
      <h6 style="padding:2px 5px;margin:20px;font-family:'Montserrat', sans-serif;">HOME TOUR</h6>
      <div class="row">
        <div class="col-lg-4">
        <a href="tour1.html"><img src="images/tour1.jpeg" alt="" style="width:300px;height:300px;"></a>
          <p style="text-align:center;font-family:'Montserrat', sans-serif; margin:10px 5px;">The Royal Living</p>
        </div>
        <div class="col-lg-4">
        <a href="tour2.html">  <img src="images/tour2.jpeg" alt="" style="width:300px;height:300px;"></a>
          <p style="text-align:center;font-family:'Montserrat', sans-serif; margin:10px 5px;">The Character Home</p>
        </div>
        <div class="col-lg-4">
          <a href="tour3.html">    <img src="images/tour3.jpeg" alt="" style="width:300px;height:300px;"></a>
          <p style="text-align:center;font-family:'Montserrat', sans-serif; margin:10px 5px;">Jungle Vibes</p>
        </div>
        <div class="col-lg-4">
          <a href="tour4.html">    <img src="images/tour4.jpeg" alt="" style="width:300px;height:300px;"></a>
          <p style="text-align:center;font-family:'Montserrat', sans-serif; margin:10px 5px;">Ultra Modern Lake House</p>
        </div>
        <div class="col-lg-4">
        <a href="tour5.html">   <img src="images/tour6.jpeg" alt="" style="width:300px;height:300px;"></a>
         <p style="text-align:center;font-family:'Montserrat', sans-serif; margin:10px 5px;">Modern Oasis</p>
        </div>

      </div>

    </div>
  </section>
  <hr style="border-style:dotted;width:100px;height:10px;border-color:grey;">
  <!-- IDEA: publication -->

  <section class="publication">
    <div class="container" style="background-color:#eeeeee;">
      <h6 style="padding:2px 5px;margin:20px;font-family:'Montserrat', sans-serif;">PUBLICATION </h6>
      <div class="row">
        <div class="col-lg-3">
          <img src="images/pub1.jpeg" alt="" style="width:200px;height:300px;">
          <p style="text-align:left;font-family:'Montserrat', sans-serif; margin:10px 5px;">Home Decor</p>
        </div>
        <div class="col-lg-3">
          <img src="images/pub2.jpeg" alt="" style="width:200px;height:300px;">
          <p style="text-align:left;font-family:'Montserrat', sans-serif; margin:10px 5px;">House Beautiful</p>
        </div>
        <div class="col-lg-3">
          <img src="images/pub3.jpeg" alt="" style="width:200px;height:300px;">
          <p style="text-align:left;font-family:'Montserrat', sans-serif; margin:10px 5px;">Interior Homes</p>
        </div>
        <div class="col-lg-3">
          <img src="images/pub4.jpeg" alt="" style="width:200px;height:300px;">
          <p style="text-align:left;font-family:'Montserrat', sans-serif; margin:10px 5px;">Bazar</p>
        </div>
      </div>
    </div>
  </section>
  <hr style="border-style:dotted;width:100px;height:10px;border-color:grey;">
  <!-- IDEA: Art -->

  <section class="publication">
    <div class="container" style="background-color:#e4e3e3;">
      <h6 style="padding:2px 5px;margin:20px;font-family:'Montserrat', sans-serif;">HANDMADE + ART + DIY</h6>
      <div class="row">
        <div class="col-lg-3">
          <img src="images/diy1.jpeg" alt="" style="width:180px;height:150px;">
          <p style="text-align:left;font-family:'Montserrat', sans-serif; margin:10px 5px;">Wall Hangings</p>
        </div>
        <div class="col-lg-3">
          <img src="images/diy2.jpeg" alt="" style="width:180px;height:150px;">
          <p style="text-align:left;font-family:'Montserrat', sans-serif; margin:10px 5px;">Accessory Rack</p>
        </div>
        <div class="col-lg-3">
          <img src="images/diy3.jpeg" alt="" style="width:180px;height:150px;">
          <p style="text-align:left;font-family:'Montserrat', sans-serif; margin:10px 5px;">Pretty Walls</p>
        </div>
        <div class="col-lg-3">
          <img src="images/diy4.jpeg" alt="" style="width:180px;height:150px;">
          <p style="text-align:left;font-family:'Montserrat', sans-serif; margin:10px 5px;">Fancy Lights</p>
        </div>
      </div>
    </div>
  </section>
<?php
if (isset($_SESSION['userId'])) {
  echo'<div class="exit">
   <form class="" action="includes/logout.inc.php" method="post">
  <input  type="submit" name="logout-submit" value="LOGOUT"></input>
<p>You are logged in </p>
<p>Check your desired collection . </p>
  </form>';
}
else {
  echo '<div class="exit"><form class="inbox" action="includes/login.inc.php" method="post">
      <h3 style="text-align:center;">INBOX LOVE</h3>
      <p style="text-align:center;">Sign up to receive your weekly dose of cozy void ideas + inspiration.</p>

    <input type="text" name="mailuid" placeholder="User name/E-mail">
    <input type="password" name="pwd" placeholder="password">
    <input  type="submit" name="login-submit" value="LOGIN"></input>
  </form>
  <hr /><br />

  <a  href="signup.php" > <input  type="submit"  value="SIGN UP"> </a>
  </div>';

}

 ?>


      </div>
    </header>
  </body>
</html>
