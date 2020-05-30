<!DOCTYPE html>
<html>

<head>
   <title>Register</title>
   <link rel="stylesheet" href="css/Style.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/a81368914c.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

   <img class="wave" src="images/wave.png">
   <div class="container">

      <div class="img">
         <img src="images/register.svg">
      </div>

      <div class="register-content" data-aos="fade-up" data-aos-delay="300">

         <form action="register.php">
            <h2 class="create">Create an account</h2>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-envelope"></i>
               </div>

               <div class="div">
                  <h5>Email</h5>
                  <input type="email" class="input">
               </div>

            </div>

            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>

               <div class="div">
                  <h5>Username</h5>
                  <input type="text" class="input">
               </div>

            </div>

            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5>Password</h5>
                  <input type="password" class="input" id="myInput">
               </div>
            </div>

            <input type="submit" class="btn" value="Continue">

            <a class="register" href="login.php"> Already have an account?</a>

            <p class="policy">By registering, you agree to Prakash's &nbsp;<a class="terms" href="">Terms of Service &nbsp;</a>and &nbsp;<a class="terms" href="">Privacy and Policy.</a></p>

         </form>
         <input type="checkbox" onclick="myFunction()">
      </div>

   </div>

   <script src="js/Script.js"></script>

</body>

</html>