<?php
$showAlert = false;
$showError = false;
$alreadyPresent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'global/_dbconnect.php';
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $exists = false;

    // Check if email already exists
    $sql = "SELECT * FROM `user_data` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    
    if ($numRows > 0) {
        $alreadyPresent = true;
    } else {
        if ($pass == $cpass) {
            $sql = "INSERT INTO `user_data` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";
            $result = mysqli_query($conn, $sql);
    
            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = true;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fav-gADGET</title>

  <!---------- FAV ICON  -------->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

  <!---------- CSS LINK -------->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!---------- GOOGLE FONT  -------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

  <?php require 'global/header.php' ?>

  <div class="container  small">
    <div class="product-featured">
      <h2 class="title-second align">Register @fAv-gADGET</h2>


      <div class="showcase-container shadow">
        <div class="showcase">
          <div class="showcase-content half">
            <form action="" method="post">
              <H2 class="title-second">Register Now</H2>
              <?php
              if ($showAlert) {
                echo '<h3 class="sucess">Congratulations 😍 <br> Your Account Has Been Created</h3>';
              }
              if ($showError) {
                echo '<h3 class="sucess">Opps !! ⚠️ <br> Password Does Not Match </h3>';
              }
              if ($alreadyPresent) {
                echo '<h3 class="sucess">Email Already Exists!</h3>';
              }

              ?>
              <input type="text" name="name" required placeholder="Enter Your Name">
              <input type="email" name="email" required placeholder="Enter Your Email">
              <input type="password" name="password" required placeholder="Enter Your Password">
              <input type="password" name="cpassword" required placeholder="Confirm Your Password">
              <input type="submit" name="submit" value="register now" class="form-btn">
              <p>Already Have An Account? <a href="login.php">Login Now</a></p>
            </form>
          </div>
          <div class="showcase-banner">
            <video class="newsletter-video adi" autoplay muted loop src="./assets/videos/airpods.mp4"></video>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require 'global/footer.php' ?>


  <!---------- CUSTOM JS LINK -------->
  <script src="./assets/js/script.js"></script>

  <!----- FAV ICON ------->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>