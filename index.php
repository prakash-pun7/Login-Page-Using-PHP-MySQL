<?php
session_start();

   if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: login.php');
   }
   if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: login.php");
   }

if (isset($_SESSION['counter'])) {
   $_SESSION['counter'] += 1;
} else {
   $_SESSION['counter'] = 1;
}

if ($_SESSION['counter'] > 10) {
   echo "Thank you for visiting our website 10 times<br>";
   session_unset();
   session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>My Website</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <style media="screen">
      img {
         padding: 10px;
         width: 50%;
         display: block;
         margin-left: 22%;
      }

      span {
         margin-left: 50%;
         font-size: 20px;
         font-weight: blod;
         font-family: cursive;
      }

      .section {

         padding: 10px;
         display: grid;
         grid-template-columns: 50% 50%;
      }

      .left_section {
         float: left;
         background-color: ghostwhite;
         padding: 10px;
         margin-right: 5px;
      }

      .right_section {
         float: right;
         background-color: ghostwhite;
         padding: 10px;
         margin-left: 5px;
      }

      .comment-section {
         padding: 10px;
         display: grid;
         grid-template-columns: 52% 48%;
      }

      .comments {
         margin-left: 10px;
         float: left;
         margin-right: 5px;

      }

      .response {
         float: right;
         background-color: ghostwhite;
         padding: 10px;
         height: 100%;
         margin-left: 5px;
         margin-bottom: 10px;
      }

      #button {
         margin-left: 40%;
      }

      @media only screen and (max-width: 750px) {
         .section {
            grid-template-columns: 100%;
         }

         .comments {
            columns: 50;
         }

         .comment-section {
            grid-template-columns: 100%;
         }

      }
   </style>
</head>

<body>


   <?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "website";
   $connection = mysqli_connect($servername, $username, $password, $database);
   if ($connection) {
      echo "Connection Successfull";
   }
   // include "database.php";
   // if ($connection->connect_error) {
   //    die("Connection Failed: " . $connection->connect_error);
   // }
   ?>
   <h2>My Awesome page visited: <?php echo $_SESSION['counter'] ?? 0 ?></h2>


   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">I💖Dog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
               <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About</a>
            </li>
         </ul>
         <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
      </div>
   </nav>

   <div class="section">

      <div class="left_section">
         <img src="./images/goldenRetiver.jpg" alt="golden retiver">
         <?php
         $sql = "SELECT data FROM left_section";
         $result = mysqli_query($connection, $sql);

         if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
               echo $row["data"];
            }
         } else {
            echo "0 results";
         }
         ?>
      </div>
      <div class="right_section">
         <img src="./images/husky.jpg" alt="husky">
         <?php
         $sql = "SELECT data FROM right_section";
         $result = mysqli_query($connection, $sql);

         if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
               echo $row["data"];
            }
         } else {
            echo "0 result";
         }
         ?>
      </div>
   </div>

   <span>Comment Below</span>
   <br>
   <div class="comment-section">
      <div class="comments">
         <form action="redirect.php" method="post">
            <textarea name="comments" rows="6" cols="70"></textarea><br>
            <input type="submit" name="comm" value="comment" id="button" class="btn btn-primary">
         </form>

      </div>


      <div class="response">
         <?php
         $commentsData = "SELECT comments FROM comment";
         $result = mysqli_query($connection, $commentsData);
         while ($row = mysqli_fetch_array($result)) {
         ?>
            <p> <?php echo $row[0]; ?></p>

         <?php
         }
         ?>
      </div>
   </div>

   <?php
   for ($i = 0; $i < 5; $i++) {
      for ($j = 5 - $i; $j >= 1; $j--) {
         echo " * ";
      }
      echo "<br>";
   }

   for ($i = 0; $i < 5; $i++) {
      for ($j = 0; $j <= $i; $j++) {
         echo " * ";
      }
      echo "<br>";
   }
   ?>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>