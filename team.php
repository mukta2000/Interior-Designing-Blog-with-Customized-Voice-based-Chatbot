<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
  <!--  fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--  font -->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Montserrat:wght@400;500;700&family=Sacramento&display=swap" rel="stylesheet">
  <!-- bootstrap-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body style="background-color:black;">
  <section id="title">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Cozy void</a>
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
            <a class="nav-link" href="#">CHAT WITH US</a>
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


    <section class="publication">
      <div class="container">

        <h6 style="padding:2px 5px;margin:20px;font-family:'Montserrat', sans-serif;color:#eeeeee;text-align:center;font-size:80px;">Meet our Team </h6>

        <div class="row">
          <div class="col-lg-12" style="left:350px;">
             <img src="images/team1.jpeg" alt=""  style="width:400px;height:400px;float:center;">
              <p style="text-align:left;font-family:'Montserrat', sans-serif; margin:10px 5px;color:#eeeeee;font-size:30px;">Bipasa Mukherjee</p>
              <button type="button" class="btn btn-secondary btn-lg" >CONTACT BIPASA</button>

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

</body>
</html>
