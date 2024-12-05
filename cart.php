<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Cart - fAV gADGET</title>
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

  <!---------- GLOBAL HEADER ----------->
  <?php require 'global/header-two.php' ?>


  <!------- CART PAGE ------->
  <div class="container">
    <div class="cart">
      <h2 class="title-second">My Cart</h2>
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
              <a href="#">
                <h4>iPad Mini Air</h4>
              </a>
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
              <a href="#">
                <h4>boAt Rockerz 400 Bluetooth</h4>
              </a>
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
              <a href="#">
                <h4>Mi Notebook Horizon 14</h4>
              </a>
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
    <div class="cart-actions">

      <button class="add-cart-btn btn3">Update Cart <i class="fa-solid fa-shuffle"></i></button>
      <button class="add-cart-btn btn3">Continue Shopping <i class="fa-solid fa-bag-shopping"></i></button>

    </div>
  </div>


  <!-------- DIVIDER ---------->
  <div class="container divider">
    <ion-icon name="finger-print-outline"></ion-icon>
  </div>


  <!-------- TOTAL CART ---------->
  <div class="container second-page-cart">
    <!---------- 1st container --------->
    <div class="child">
      <div class="container">
        <div class="cart-add">
          <h2 class="title-second">Where to ship ?</h2>
          <div class="half">
            <input type="text" placeholder="State/Country">
            <div class="form-group-grid">
              <input type="text" placeholder="City">
              <input type="text" placeholder="PostCode / ZIP">
            </div>
          </div>
          <button type="button" class="add-cart-btn btn3">
            Update <i class="fa-solid fa-shuffle"></i>
          </button>
        </div>
      </div>

      <div class="container">
        <div class="cart-add">
          <h2 class="title-second">Apply Coupoun</h2>
          <div class="half half2">
            <input type="text" placeholder="Enter Your Coupoun">
            <button type="button" class="add-cart-btn btn3">
              Apply <i class="fa-solid fa-bag-shopping"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!--------- 2nd Container ----------->
    <div class="child">
      <div class="container">
        <div class="cart-add">
          <h2 class="title-second">Apply Coupoun</h2>
          <p>Cart Subtotal: <span>$240.99</span></p>
          <p>Tax: <span>$240.99</span></p>
          <p>Shipping: <span>$10.00</span></p>
          <p style="font-weight: 600;">Total: <span>$250.99</span></p>
          <button type="button" class="add-cart-btn btn4">
            Proceed To Checkout<i class="fa-solid fa-cart-shopping"></i>
          </button>
        </div>
      </div>
    </div>
  </div>



  <!---------- FOOTER ----------->
  <?php require 'global/footer.php' ?>


  <!---------- CUSTOM JS LINK ----------->
  <script src="./assets/js/script.js"></script>

  <!---------- ICONS LINK ----------->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/6bd62450ee.js" crossorigin="anonymous"></script>

</body>

</html>