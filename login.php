<?php

include 'global/_dbconnect.php';
$login = false;
$showError = false;
session_start();

if (isset($_POST['submit'])) {

  
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);

  $select = " SELECT * FROM user_data WHERE email = '$email' && password = '$pass' ";

  $result = mysqli_query($conn, $select);

  if (mysqli_num_rows($result) > 0) {

    $login = true;
    $row = mysqli_fetch_array($result);
    $_SESSION['user_name'] = $row['name'];
    $_SESSION['user_email'] = $row['email'];

    header('location: index.php');
  } 
  else {
    $showError = true;
  }
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fav-gADGET</title>

   <!---------- FAVICON LINK ---------->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

   <!---------- CUSTOM CSS LINK ---------->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

   <!---------- GOOGLE FONT ---------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>


  <?php require 'global/header.php' ?>

  <div class="container  small">
    <div class="product-featured">
      <h2 class="title-second align">Log In To @fAv-gADGET</h2>
      <div class="showcase-container shadow">
        <div class="showcase">
          <div class="showcase-content half">
            <form action="" method="post">
              <h2 class="title-second">Log In Now</h2>
              <?php
              if ($login) {
                echo '<h3 class="sucess">Welcome !</h3>';
              }
              ?>
              <?php
              if ($showError) {
                echo '<h3 class="sucess">Invalid Credentails</h3>';
              }
              ?>
              <input type="email" name="email" required placeholder="Enter Your Email">
              <input type="password" name="password" required placeholder="Enter Your Password">
              <input type="submit" name="submit" value="Login Now" class="form-btn">
              <p>Don't have an account? <a href="register.php">Register Now</a></p>
            </form>
          </div>
          <div class="showcase-banner">
            <video class="newsletter-video my-video" autoplay muted loop src="./assets/videos/iphone-14.mp4"></video>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require 'global/footer.php' ?>

   <!---------- CUSTOM JS LINK ---------->
  <script src="./assets/js/script.js"></script>

   <!---------- ION ICONS ---------->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>