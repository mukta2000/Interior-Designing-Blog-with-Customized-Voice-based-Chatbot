<?php
require "header.php";
 ?>
 <main>

   <h1 style="text-align:center;font-family: 'Montserrat', sans-serif;color:white;"></h1>
   <form class="exit" action="includes/signup.inc.php" method="post">
     <h3 style="text-align:center;">SIGN UP Cozy Void</h3>
     <p style="text-align:center;">Sign up to receive your weekly dose of cozy void ideas + inspiration.</p>
     <input type="text" name="uid" placeholder="Username">
     <input type="text" name="mail" placeholder="email">
     <input type="password" name="pwd" placeholder="password">
     <input type="password" name="pwd-repeat" placeholder="repeat password">
     <input type="submit" name="signup-submit" ></input>
   </form>
 </main>

 <?php
require "footer.php";
  ?>
