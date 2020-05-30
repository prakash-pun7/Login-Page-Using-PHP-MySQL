<?php

   session_start();

   $username = "";
   $email = "";
   $errors = array();

   // connect to database
   $database = mysqli_connect('localhost', 'root', '', 'login');

   // register user

   if (isset($_POST['register_user'])) {
      $email = mysqli_real_escape_string($database, $_POST['email']);
      $username = mysqli_real_escape_string($database, $_POST['username']);
      $password = mysqli_real_escape_string($database, $_POST['password']);

      if (empty($email)) {
         array_push($errors, "Email is required");
      }
      if (empty($username)) {
         array_push($errors, "Username is required");
      }
      if (empty($password)) {
         array_push($errors, "Password is required");
      }


   // register the user in the database
   // first check if the user is already exists in the database with the same name and id

   $user_check_array = "SELECT * FROM registeruser WHERE username = '$username' OR  email='$email' lIMIT 1";
   $result = mysqli_query($database,$user_check_array);

   $user = mysqli_fetch_assoc($result);

   if ($user) {
      if ($user['username'] === $username) {
         array_push($errors, "Username already exists");
      }

      if ($user['email'] === $email) {
         array_push($errors, "Email already exists");
      }
   }


   // finally saving the data in the database

   if(count($errors) == 0){
      $password = md5($password);

      $query = "INSERT INTO registeruser (email, username, password) VALUES('$email', '$username', '$password')";
      mysqli_query($database, $query);
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are logged in";
      header('location: index.php');
   }
}

if (isset($_POST['login_user'])) {
   $username = mysqli_real_escape_string($database, $_POST['username']);
   $password = mysqli_real_escape_string($database, $_POST['password']);

   if (empty($username)) {
      array_push($errors, "Username is required");
   }
   if (empty($password)){
      array_push($errors, "Password is required");
   }

   if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM registeruser WHERE username='$username' AND password='$password'";
      $result = mysqli_query($database, $query);
      if(mysqli_num_rows($result) ==1){
         $_SESSION['username'] = $username;
         $_SESSION['success'] = "You are now logged in";
         header('location: index.php');
      }
      else {
         array_push($errors, "Wrong username and password");
      }
   }
}

?>