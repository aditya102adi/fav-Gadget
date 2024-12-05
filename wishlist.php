<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WishList - fAV gADGET</title>

  <!---------- fav icon ----------->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" 
    crossorigin="anonymous">

  <!---------- custom css link ----------->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!---------- google font link ---------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>

  <!---------- HEADER ----------->
  <?php require 'global/header-two.php' ?>


  <!------- CART PAGE ------->
  <div class="container">
    <div class="cart">
      <h2 class="title-second">Wishlist</h2>
      <table width="100%">
        <thead>
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Remove</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <img src="./assets/images/Products-2/ipad-2.jpg" alt="">
            </td>

            <td>
              <a href="#"><h4>iPad Mini Air</h4></a>
              <p>Tablet</p>
            </td>

            <td>₹78,899</td>
            <td><input type="number" value="1"></td>
            <td>₹78,899</td>
            <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
          </tr>


          <tr>
            <td>
              <img src="./assets/images/Products-2/headphone-product-1.jpg" alt="">
            </td>

            <td>
              <a href="#"><h4>boAt Rockerz 400 Bluetooth</h4></a>
              <p>Headphone</p>
            </td>

            <td>₹1,159</td>
            <td><input type="number" value="1"></td>
            <td>₹1,159</td>
            <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
          </tr>

          <tr>
            <td>
              <img src="./assets/images/Products-2/mi-notebook-2.jpg" alt="">
            </td>

            <td>
              <a href="#"><h4>Mi Notebook Horizon 14</h4></a>
              <p>Laptopt</p>
            </td>

            <td>₹24,999</td>
            <td><input type="number" value="1"></td>
            <td>₹24,999</td>
            <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
          </tr>

        </tbody>
      </table>
    </div>


  </div>

  <div class="container">
    <div class="cart-actions2">
        <button class="add-cart-btn btn3" onclick="window.location.href='cart.php';">Proceed Checkout 
            <i class="fa-solid fa-shuffle"></i></button>
    </div>
  </div>

  <!---------- FOOTER ----------->
  <?php require 'global/footer.php' ?>


  <!---------- CUSTOM JS LINK ----------->
  <script src="./assets/js/script.js"></script>

  <!---------- ICON LINK ----------->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/6bd62450ee.js" crossorigin="anonymous"></script>

</body>

</html>