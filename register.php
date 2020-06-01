<?php
include ('database.php');
?>
<!DOCTYPE html>
<html>

<head>
   <title>Register</title>
   <link rel="stylesheet" href="css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://kit.fontawesome.com/a81368914c.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

   <img class="wave" src="images/wave.png">
   <div class="container">

      <div class="img">
         <img src="images/login1.svg">
      </div>

      <div class="register-content" data-aos="fade-up-left">

         <form action="register.php" method="post">

            <?php 
            // include ('errors.php');
            ?>
            <h2 class="create">Create an account</h2>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-envelope"></i>
               </div>

               <div class="div">
                  <h5>Email</h5>
                  <input type="email" class="input" name="email">
               </div>

            </div>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>

               <div class="div">
                  <h5>Username</h5>
                  <input type="text" class="input" name="username">
               </div>

            </div>

            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">

                  <h5>Password</h5>
                  <input type="password" class="input" id="myInput" name="password">
               </div>
               <span onclick="myFunction(this)" class="fas fa-eye field-icon"></span>
            </div>

            <input type="submit" class="btn" value="Continue" name="register_user">

            <a class="register" href="login.php"> Already have an account?</a>

            <p class="policy">By registering, you agree to Prakash's &nbsp;<a class="terms" href="">Terms of Service &nbsp;</a>and &nbsp;<a class="terms" href="">Privacy and Policy.</a></p>

         </form>
      </div>

   </div>

   <script src="js/script.js"></script>

</body>

</html>