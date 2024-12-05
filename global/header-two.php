<?php

include './global/_dbconnect.php';
session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login.php');
 }
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fav-gADGET</title>

    <!---------- fav icon ----------->
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" >

   <!---------- custom css link ----------->
    <link rel="stylesheet" href="./assets/css/style-prefix.css">

    <!---------- google font link ---------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>

    <!---------- HEADER ---------->
    <header>

        <div class="header-top">

            <div class="container">

                <ul class="header-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

                <div class="header-alert-news">
                    <p>
                        <b>Free Shipping</b>
                        This Week Order Over - ₹55
                    </p>
                </div>

                <div class="header-top-actions">

                    <select name="currency">

                        <option value="usd">INR ₹</option>
                        <option value="eur">USD &dollar;</option>

                    </select>

                    <select name="language">

                        <option value="en-US">English</option>
                        <option value="es-ES">Espa&ntilde;ol</option>
                        <option value="fr">Fran&ccedil;ais</option>

                    </select>

                </div>

            </div>

        </div>

        <div class="header-main pad-remove">

            <div class="container">

                <a href="#" class="header-logo">
                    <img src="./assets/images/Fav.gif" width="205px " height="125px">
                </a>

                <div class="header-search-container">

                    <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

                    <button class="search-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>

                </div>

                <div class="header-user-actions">

                    <button class="action-btn">
                        <ion-icon name="person-outline" onclick="toggleMenu()"></ion-icon>

                        <div class="sub-menu-wrap" id="submenu">
                            <div class="sub-menu">
                                <div class="user-info">
                                    <img src="./assets/images/icons/avatar-boy.png" alt="">
                                    <div class="info">
                                        <h3><?php
                                            if (isset($_SESSION['user_name'])) {
                                                $naam = $_SESSION['user_name'];
                                                echo "Hello! $naam";
                                            } else {
                                                echo "Name not found in session.";
                                            }
                                            ?>
                                        </h3>
                                        <h5>
                                        <?php
                                            if (isset($_SESSION['user_name'])) {
                                                $mail = $_SESSION['user_email'];
                                                echo "$mail";
                                            } else {
                                                echo "Name not found in session.";
                                            }
                                            ?>
                                        </h5>

                                    </div>
                                </div>
                                <hr>


                                <a href="login.php" class="sub-menu-link">
                                    <i class="fa-solid fa-folder-plus"></i>
                                    <p>Sign In</p>
                                    <span>></span>
                                </a>

                                <a href="#" class="sub-menu-link">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                    <p>Edit Profile</p>
                                    <span>></span>
                                </a>

                                <a href="cart.php" class="sub-menu-link">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                    <p>Orders</p>
                                    <span>></span>
                                </a>

                                <a href="wishlist.php" class="sub-menu-link">
                                    <i class="fa-solid fa-heart-circle-check"></i>
                                    <p>Wishlist</p>
                                    <span>></span>
                                </a>

                                <a href="contact.php" class="sub-menu-link">
                                    <i class="fa-solid fa-question"></i>
                                    <p>Help & Support</p>
                                    <span>></span>
                                </a>

                                <a href="logout.php" class="sub-menu-link">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <p>Logout</p>
                                    <span>></span>
                                </a>


                            </div>

                        </div>
                    </button>

                    <button class="action-btn" onclick="window.location.href='wishlist.php';">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span class="count">3</span>
                    </button>

                    <button class="action-btn" onclick="window.location.href='cart.php';">
                        <ion-icon name="bag-handle-outline"></ion-icon>
                        <span class="count">3</span>
                    </button>

                </div>

            </div>

        </div>

        <nav class="desktop-navigation-menu box-shadow-header">

            <div class="container">

                <ul class="desktop-menu-category-list">

                    <li class="menu-category">
                        <a href="index.php" class="menu-title">Home</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Categories</a>

                        <div class="dropdown-panel">

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Electronics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Desktop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Laptop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Camera</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Tablet</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Headphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/headphone-banner.jpg" alt="headphone collection" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Smart Gadgets</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart Watch</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart TV</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart Glasses</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart Lights</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart Notebook</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/watches-banner.jpg" alt="men's fashion" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">TV & Audio</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Speakers</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">TV</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Microphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Earphones</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">DVD Players</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/ipad-banner.jpg" alt="women's fashion" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Desktop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Monitor</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Pen Drive</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Keyboard</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Mouse</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Microphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/monitor-banner.jpg" alt="mouse collection" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </li>

                    <li class="menu-category">
                        <a href="shop.php" class="menu-title">Shop</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Mobile</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Samsung</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Realme</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Mi Note </a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Vivo</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">home appliances</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Washing machine</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Fridge</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Mixtur Grinder</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Oven & Chimneys </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="contact.php" class="menu-title">Contact </a>
                    </li>

                </ul>

            </div>

        </nav>

        <div class="mobile-bottom-navigation">

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <button class="action-btn" onclick="window.location.href='cart.php';">
                <ion-icon name="bag-handle-outline"></ion-icon>

                <span class="count">3</span>
            </button>

            <button class="action-btn" onclick="window.location.href='index.php';">
                <ion-icon name="home-outline"></ion-icon>
            </button>

            <button class="action-btn" onclick="window.location.href='wishlist.php';">
                <ion-icon name="heart-outline"></ion-icon>

                <span class="count">3</span>
            </button>

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="grid-outline"></ion-icon>
            </button>

        </div>

        <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

            <div class="menu-top">
                <h2 class="menu-title">Menu</h2>

                <button class="menu-close-btn" data-mobile-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>

            <ul class="mobile-menu-category-list">

                <li class="menu-category">
                    <a href="#" class="menu-title">Home</a>
                </li>

                <li class="menu-category">
                    <a href="shop.php" class="menu-title">Shop</a>
                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Mobile</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Samsung</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">One Plus</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Realme</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Vivo</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Home Appliances</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Washing Machine</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Fridge</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Dish Washer</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Gyser</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Blog</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Contact</a>
                </li>

            </ul>

            <div class="menu-bottom">

                <ul class="menu-category-list">

                    <li class="menu-category">

                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Language</p>

                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">English</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Fren&ccedil;h</a>
                            </li>

                        </ul>

                    </li>

                    <li class="menu-category">
                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Currency</p>
                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>
                            <li class="submenu-category">
                                <a href="#" class="submenu-title">INR ₹</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">USD &dollar; </a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <ul class="menu-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </nav>

    </header>

    <!---------- CUSTOM JS LINK ---------->
    <script src="./assets/js/script.js"></script>
    <script>
        let subMenu = document.getElementById("submenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

    <!---------- ICONS LINK ---------->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/6bd62450ee.js" crossorigin="anonymous"></script>

</body>

</html>