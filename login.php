<!DOCTYPE html>
<html>

<head>
   <title>Login</title>
   <link rel="stylesheet" href="css/Style.css">
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

      <div class="login-content" data-aos="fade-up-left">

         <form action="login.php">
            <img src="images/avatar.svg">
            <h2 class="title">Welcome!</h2>

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
                  <input type="password" class="input">
               </div>
            </div>

            <a class="forgot" href="#">Forgot Password?</a>
            <input type="submit" class="btn" value="Login">

            <span class="dont">Dont have an account? </span>
            <a class="create" href="register.php"> Create an account.</a>

         </form>

      </div>
   </div>

   <script src="js/Script.js"></script>

</body>

</html>