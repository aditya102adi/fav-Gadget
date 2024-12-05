<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop - fAV gADGET</title>

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


  <div class="container">
    <div class="product-main">

      <h2 class="title-second">New Products</h2>

      <div class="product-grid">

        <div class="showcase" onclick="window.location.href='product-one.php';">

          <div class="showcase-banner">

            <img src="./assets/images/Products-2/headphone-product-1.jpg" width="300" class="product-img default">
            <img src="./assets/images/Products-2/headphone-product-5.jpg" width="300" class="product-img hover">

            <p class="showcase-badge">15%</p>

            <div class="showcase-actions">

              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>

            </div>

          </div>

          <div class="showcase-content">

            <a href="#" class="showcase-category">HEADPHONE</a>

            <a href="#">
              <h3 class="showcase-title">boAt Rockerz 400 Bluetooth On Ear Headphones </h3>
            </a>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>

            <div class="price-box">
              <p class="price">₹1,159</p>
              <del>₹2,999</del>
            </div>

          </div>

        </div>

        <div class="showcase" onclick="window.location.href='product-two.php';">

          <div class="showcase-banner">
            <img src="./assets/images/Products-2/laptop-1.jpg" class="product-img default" width="300">
            <img src="./assets/images/Products-2/laptop-2.jpg" class="product-img hover" width="300">

            <p class="showcase-badge angle black">sale</p>

            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>

          <div class="showcase-content">
            <a href="#" class="showcase-category">TABLET</a>

            <h3>
              <a href="#" class="showcase-title">Lenovo IdeaPad S540 13.3"</a>
            </h3>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>

            <div class="price-box">
              <p class="price">₹40,999</p>
              <del>₹50,999</del>
            </div>

          </div>

        </div>

        <div class="showcase">

          <div class="showcase-banner">
            <img src="./assets/images/Products-2/tv-1.jpg" class="product-img default" width="300">
            <img src="./assets/images/Products-2/tv-2.jpg" class="product-img hover" width="300">

            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>

          <div class="showcase-content">
            <a href="#" class="showcase-category">Home Accesories</a>

            <h3>
              <a href="#" class="showcase-title">TV LED LG Full HD 43 Inch 43LK5000
              </a>
            </h3>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>

            <div class="price-box">
              <p class="price">₹58.00</p>
              <del>₹65.00</del>
            </div>

          </div>

        </div>

        <div class="showcase">

          <div class="showcase-banner">
            <img src="./assets/images/Products-2/hp-pav-1.jpg" class="product-img default" width="300">
            <img src="./assets/images/Products-2/hp-pav-2.jpg" class="product-img hover" width="300">

            <p class="showcase-badge angle pink">new</p>

            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>

          <div class="showcase-content">
            <a href="#" class="showcase-category">TABLET</a>

            <h3>
              <a href="#" class="showcase-title">HP Pavilion X360 Convertible 14</a>
            </h3>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>

            <div class="price-box">
              <p class="price">₹50,999</p>
              <del>₹70,000</del>
            </div>

          </div>

        </div>

        <div class="showcase">

          <div class="showcase-banner">
            <img src="./assets/images/Products-2/mi-notebook-1.jpg" class="product-img default" width="300">
            <img src="./assets/images/Products-2/mi-notebook-2.jpg" class="product-img hover" width="300">

            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>

          <div class="showcase-content">
            <a href="#" class="showcase-category">tablet</a>

            <h3>
              <a href="#" class="showcase-title">Mi Notebook Horizon Edition 14</a>
            </h3>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>

            <div class="price-box">
              <p class="price">₹25,999</p>
              <del>₹30,999</del>
            </div>

          </div>

        </div>

        <div class="showcase">

          <div class="showcase-banner">
            <img src="./assets/images/Products-2/ac-1.jpg" class="product-img default" width="300">
            <img src="./assets/images/Products-2/ac-2.jpg" class="product-img hover" width="300">

            <p class="showcase-badge angle black">sale</p>

            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>

          <div class="showcase-content">
            <a href="#" class="showcase-category">home Accesories</a>

            <h3>
              <a href="#" class="showcase-title">Lloyd GLS18I32AL 1.5 Split AC</a>
            </h3>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>

            <div class="price-box">
              <p class="price">₹15,000</p>
              <del>₹27,000</del>
            </div>

          </div>

        </div>

        <div class="showcase">

          <div class="showcase-banner">
            <img src="./assets/images/Products-2/lg-firdge-1.jpg" class="product-img default" width="300">
            <img src="./assets/images/Products-2/lg-firdge-2.jpg " class="product-img hover" width="300">

            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>

          <div class="showcase-content">
            <a href="#" class="showcase-category">home Accesories</a>

            <h3>
              <a href="#" class="showcase-title">LG 687 Ltr Door in Door Refrigerator</a>
            </h3>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>

            <div class="price-box">
              <p class="price">₹35,000</p>
              <del>₹45,999</del>
            </div>

          </div>

        </div>

        <div class="showcase">

          <div class="showcase-banner">
            <img src="./assets/images/Products-2/fridge-1.jpg" class="product-img default" width="300">
            <img src="./assets/images/Products-2/fridge-2.jpg" class="product-img hover" width="300">

            <p class="showcase-badge angle black">sale</p>

            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>

          <div class="showcase-content">
            <a href="#" class="showcase-category">home Accesories</a>

            <h3>
              <a href="#" class="showcase-title">LG 260 L 3 Star Frost Free Double Door</a>
            </h3>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>

            <div class="price-box">
              <p class="price">₹55,899</p>
              <del>₹82,999</del>
            </div>

          </div>

        </div>

        <div class="showcase">

          <div class="showcase-banner">
            <img src="./assets/images/Products-2/washing-machine-1.jpg" class="product-img default" width="300">
            <img src="./assets/images/Products-2/washing-machine-2.jpg" class="product-img hover" width="300">

            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>

          <div class="showcase-content">
            <a href="#" class="showcase-category">home Accesories</a>

            <h3>
              <a href="#" class="showcase-title">Midea Front Load Washing Machine</a>
            </h3>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>

            <div class="price-box">
              <p class="price">₹45,999</p>
              <del>₹32,999</del>
            </div>

          </div>

        </div>

        <div class="showcase">

          <div class="showcase-banner">
            <img src="./assets/images/Products-2/de-bot-1.jpg" class="product-img default" width="300">
            <img src="./assets/images/Products-2/de-bot-2.jpg" class="product-img hover" width="300">

            <p class="showcase-badge angle black">sale</p>

            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>

          <div class="showcase-content">
            <a href="#" class="showcase-category">home Accesories</a>

            <h3>
              <a href="#" class="showcase-title">Robot Ecovacs DEEBOT 900 DE5G</a>
            </h3>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>

            <div class="price-box">
              <p class="price">₹5,900</p>
              <del>₹6,900</del>
            </div>

          </div>

        </div>

        <div class="showcase">

          <div class="showcase-banner">
            <img src="./assets/images/Products-2/iphone-1.jpg" class="product-img default" width="300">
            <img src="./assets/images/Products-2/iphone-2.jpg" class="product-img hover" width="300">

            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>

          <div class="showcase-content">
            <a href="#" class="showcase-category">Mobile</a>

            <h3>
              <a href="#" class="showcase-title">iPhone 13</a>
            </h3>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>

            <div class="price-box">
              <p class="price">₹45,999</p>
              <del>₹65,999</del>
            </div>

          </div>

        </div>

        <div class="showcase">

          <div class="showcase-banner">
            <img src="./assets/images/Products-2/ipad-2.jpg" class="product-img default" width="300">
            <img src="./assets/images/Products-2/ipad-1.jpg" class="product-img hover" width="300">

            <p class="showcase-badge angle black">sale</p>

            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>

              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>

          <div class="showcase-content">
            <a href="#" class="showcase-category">TABLET</a>

            <h3>
              <a href="#" class="showcase-title">iPad Mini</a>
            </h3>

            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>

            <div class="price-box">
              <p class="price">₹78,899</p>
              <del>₹85,899</del>
            </div>

          </div>

        </div>

      </div>

    </div>
  </div>

  <div class="container">
    <div class="numbers" id="pagination">
      <a href="">1</a>
      <a href="">2</a>
      <a href="">-></a>
    </div>
  </div>


  <!---------- FOOTER ----------->
  <?php require 'global/footer.php' ?>


  <!---------- CUSTOM JS LINK ---------->
  <script src="./assets/js/script.js"></script>

  <!---------- ICONS LINK ---------->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>