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

    <!-------- FAVICON & FONT AWESOME LINK --------->
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

    <!-------- CUSTOM CSS LINK --------->
    <link rel="stylesheet" href="./assets/css/style-prefix.css">

    <!-------- GOOGLE FONT --------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>


    <div class="overlay" data-overlay></div>

    <!-------- MODAL --------->
    <div class="modal" data-modal>

        <div class="modal-close-overlay" data-modal-overlay></div>

        <div class="modal-content">

            <button class="modal-close-btn" data-modal-close>
                <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="newsletter-img">
                <video class="newsletter-video" muted autoplay loop src="./assets/videos/iPad-2.mp4" height="100%" width="100%"></video>
            </div>

            <div class="newsletter no-pad">

                <form action="#">

                    <div class="newsletter-header">

                        <h3 class="newsletter-title">Subscribe Newsletter.</h3>

                        <p class="newsletter-desc">
                            Subscribe the <b>FAV-GADGETS</b> to get latest products and discount update.
                        </p>

                    </div>

                    <input type="email" name="email" class="email-field" placeholder="Email Address" required>

                    <button type="submit" class="btn-newsletter">Subscribe</button>

                </form>

            </div>

        </div>

    </div>


    <!-------- NOTIFICATION TOAST --------->

    <div class="notification-toast" data-toast>

        <button class="toast-close-btn" data-toast-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="toast-banner">
            <img src="./assets/images/products/asus-rog.jpg" width="80" height="70">
        </div>

        <div class="toast-detail">

            <p class="toast-message">
                Someone in new just bought
            </p>

            <p class="toast-title">
                Buy Asus ROG Strix 80.01cm
            </p>

            <p class="toast-meta">
                <time datetime="PT2M">2 Minutes</time> ago
            </p>

        </div>

    </div>


    <!-------- HEADER --------->

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

        <nav class="desktop-navigation-menu">

            <div class="container">

                <ul class="desktop-menu-category-list">

                    <li class="menu-category">
                        <a href="#" class="menu-title">Home</a>
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


    <main>

        <!-------- BANNER --------->

        <div class="banner">

            <div class="container">

                <div class="slider-container has-scrollbar">

                    <div class="slider-item center-video hide-slider">

                        <video class="newsletter-video" autoplay muted loop src="./assets/videos/banner-2.mp4"></video>

                        <div class="banner-content">

                            <p class="banner-subtitle dark-subtitle">Trending item</p>

                            <h2 class="banner-title banner-dark-title">Apple iPhone 12 </h2>
                            <h2 class="banner-title banner-dark-title"> Midnight</h2>

                            <p style="color: #fff;" class="banner-text banner-dark-text">
                                starting at ₹ <b>49,999</b>.00
                            </p>

                            <a href="#" class="banner-btn">Shop now</a>

                        </div>
                    </div>

                    <div class="slider-item">

                        <img src="./assets/images/Untitled design.png" alt="women's latest fashion sale" class="banner-img">

                        <div class="banner-content">

                            <p class="banner-subtitle">Trending item</p>

                            <h2 class="banner-title">Noise wireless headphones</h2>

                            <p class="banner-text">
                                starting at ₹ <b>1999</b>.00
                            </p>

                            <a href="#" class="banner-btn">Shop now</a>

                        </div>

                    </div>

                    <div class="slider-item">

                        <img src="./assets/images/Untitled design (1).jpg" class="banner-img">

                        <div class="banner-content">

                            <p class="banner-subtitle">boat Headphone</p>

                            <h2 class="banner-title">#plug into passion</h2>

                            <p class="banner-text">
                                starting at ₹<b>999</b>.00
                            </p>

                            <a href="#" class="banner-btn">Shop now</a>

                        </div>

                    </div>

                    <div class="slider-item">

                        <img src="./assets/images/Untitled design (4).jpg" alt="new fashion summer sale" class="banner-img">

                        <div class="banner-content">

                            <p class="banner-subtitle">Sale Offer</p>

                            <h2 class="banner-title">Mi Notebook Horizon Edition 14</h2>

                            <p class="banner-text">
                                starting at ₹ <b>45,</b>999
                            </p>

                            <a href="#" class="banner-btn">Shop now</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-------- CATEGORY --------->

        <div class="category">

            <div class="container">

                <div class="category-item-container has-scrollbar">

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/mobile-phone.png" alt="dress & frock" width="50">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Tablets & Mobile</h3>

                                <p class="category-item-amount">(53)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>


                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/gaming.png" alt="glasses & lens" width="50">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Accessories</h3>

                                <p class="category-item-amount">(68)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/headphone.png" alt="shorts & jeans" width="50">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">TV & Audio</h3>

                                <p class="category-item-amount">(84)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/console.png" alt="t-shirts" width="50">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Games & Consoles</h3>

                                <p class="category-item-amount">(35)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/camera (1).png" alt="jacket" width="50">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Camera</h3>

                                <p class="category-item-amount">(16)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/vacuum-cleaner.png" alt="watch" width="50">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Home Appliances</h3>

                                <p class="category-item-amount">(27)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/tv-app.png" alt="winter wear" width="50">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">PC & Laptop</h3>

                                <p class="category-item-amount">(58)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icons/hair-style.png" alt="hat & caps" width="50">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Electronics</h3>

                                <p class="category-item-amount">(39)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-------- PRODUCT --------->

        <div class="product-container">

            <div class="container">


                <!-------- SIDEBAR --------->

                <div class="sidebar  has-scrollbar" data-mobile-menu>

                    <div class="sidebar-category">

                        <div class="sidebar-top">
                            <h2 class="sidebar-title">Category</h2>

                            <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                                <ion-icon name="close-outline"></ion-icon>
                            </button>
                        </div>

                        <ul class="sidebar-menu-category-list">

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/icons/desktop.png" alt="clothes" width="30" height="30" class="menu-title-img">

                                        <p class="menu-title">Computers</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Laptops</p>
                                            <data value="300" class="stock" title="Available Stock">300</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Desktops</p>
                                            <data value="60" class="stock" title="Available Stock">60</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Computer Peripherals</p>
                                            <data value="50" class="stock" title="Available Stock">50</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Computer Components</p>
                                            <data value="87" class="stock" title="Available Stock">87</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/icons/mobile-phone.png" alt="clothes" width="30" height="30" class="menu-title-img">

                                        <p class="menu-title">Mobile Devices</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Smartphones</p>
                                            <data value="45" class="stock" title="Available Stock">45</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Tablets</p>
                                            <data value="75" class="stock" title="Available Stock">75</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Wearable Devices</p>
                                            <data value="35" class="stock" title="Available Stock">35</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Mobile Accessories</p>
                                            <data value="26" class="stock" title="Available Stock">26</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/icons/headphone.png" alt="clothes" width="30" height="30" class="menu-title-img">

                                        <p class="menu-title">Audio & Video</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Headphones</p>
                                            <data value="46" class="stock" title="Available Stock">46</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Speakers</p>
                                            <data value="73" class="stock" title="Available Stock">73</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">TVs</p>
                                            <data value="61" class="stock" title="Available Stock">61</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/icons/camera.png" alt="clothes" width="30" height="30" class="menu-title-img">

                                        <p class="menu-title">Cameras</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Digital Cameras</p>
                                            <data value="12" class="stock" title="Available Stock">12 pcs</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Camera Accessories</p>
                                            <data value="60" class="stock" title="Available Stock">60 pcs</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Drones</p>
                                            <data value="50" class="stock" title="Available Stock">50 pcs</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Action Cameras</p>
                                            <data value="87" class="stock" title="Available Stock">87 pcs</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/icons/air-conditioner.png" alt="clothes" width="30" height="30" class="menu-title-img">

                                        <p class="menu-title">Home Electronics</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Smart Home Devices</p>
                                            <data value="68" class="stock" title="Available Stock">68</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Home Security Systems</p>
                                            <data value="46" class="stock" title="Available Stock">46</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Home Appliances</p>
                                            <data value="79" class="stock" title="Available Stock">79</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Gaming Consoles</p>
                                            <data value="23" class="stock" title="Available Stock">23</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/icons/printer.png" alt="clothes" width="30" height="30" class="menu-title-img">

                                        <p class="menu-title">Office & Productivity</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Printers</p>
                                            <data value="50" class="stock" title="Available Stock">50</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Scanners</p>
                                            <data value="48" class="stock" title="Available Stock">48</data>
                                        </a>
                                    </li>
                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/icons/smartwatch.png" alt="clothes" width="30" height="30">

                                        <p class="menu-title">Health & Fitness</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Fitness Trackers</p>
                                            <data value="62" class="stock" title="Available Stock">62</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Smart Scales</p>
                                            <data value="35" class="stock" title="Available Stock">35</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Wearable Health Monitors</p>
                                            <data value="80" class="stock" title="Available Stock">80</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Health Accessories</p>
                                            <data value="75" class="stock" title="Available Stock">75</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                        </ul>

                    </div>

                    <div class="product-showcase">

                        <h3 class="showcase-heading">best sellers</h3>

                        <div class="showcase-wrapper">

                            <div class="showcase-container">

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./assets/images/products/1.jpg" alt="baby fabric shoes" width="75" height="75" class="showcase-img">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Mi Super Bass Wireless Headphones</h4>
                                        </a>

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>₹2,000</del>
                                            <p class="price">₹1,299</p>
                                        </div>

                                    </div>

                                </div>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./assets/images/products/2.jpg" alt="men's hoodies t-shirt" class="showcase-img" width="75" height="75">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Mi Note 12 Pro</h4>
                                        </a>
                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-half-outline"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>₹59,999</del>
                                            <p class="price">₹43,999</p>
                                        </div>

                                    </div>

                                </div>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./assets/images/products/3.jpg" alt="girls t-shirt" class="showcase-img" width="75" height="75">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Mi NoteBook Pro Lustrous Gray </h4>
                                        </a>
                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-half-outline"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>₹50,999</del>
                                            <p class="price">₹34,999</p>
                                        </div>

                                    </div>

                                </div>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./assets/images/products/4.png" alt="woolen hat for men" class="showcase-img" width="75" height="75">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Redmi Smart Band Pro SportsWatch</h4>
                                        </a>
                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>₹4,999</del>
                                            <p class="price">₹1,899</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="product-box">

                    <!-------- PRODUCT MINIMAL --------->

                    <div class="product-minimal">

                        <div class="product-showcase">

                            <h2 class="title">Smart Phones</h2>

                            <div class="showcase-wrapper has-scrollbar">

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/oppoA78.jpg" alt="relaxed short full sleeve t-shirt" width="80" class="showcase-img">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Oppo A17 (Midnight Black, 4GB RAM, 64GB Storage) </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Mobile</a>

                                            <div class="price-box">
                                                <p class="price">₹12,499</p>
                                                <del>₹14,999</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/realmeNarzo.jpg" alt="girls pink embro design top" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Realme narzo N55 (Prime Blue, 4GB+64GB) 33W Segment Fastest Charging </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Mobile</a>

                                            <div class="price-box">
                                                <p class="price">₹10,999</p>
                                                <del>₹13,999</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/realmeNarzo50.jpg" alt="black floral wrap midi skirt" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Realme narzo N55 (Prime Blue, 6GB+128GB) 33W Segment Fastest Charging</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Mobile</a>

                                            <div class="price-box">
                                                <p class="price">₹12,999</p>
                                                <del>₹14,999</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/redmi12c.jpg" alt="pure garment dyed cotton shirt" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Redmi 12C (Lavender Purple, 4GB RAM, 64GB Storage)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Mobile</a>

                                            <div class="price-box">
                                                <p class="price">₹8,999</p>
                                                <del>₹13,999</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/mobile-5.jpg" alt="men yarn fleece full-zip jacket" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Mobile</a>

                                            <div class="price-box">
                                                <p class="price">₹19,999</p>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/mobile-6.jpg" alt="mens winter leathers jackets" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">iQOO 11 5G (Legend, 8GB RAM, 256 GB Storage) </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Mobile</a>

                                            <div class="price-box">
                                                <p class="price">₹54,999</p>
                                                <del>₹61,999</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/mobile-7.jpg" alt="mens winter leathers jackets" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Samsung Galaxy S23 5G (Cream, 8GB, 128GB Storage)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Mobile</a>

                                            <div class="price-box">
                                                <p class="price">₹74,999</p>
                                                <del>₹89,999</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/mobile-8.jpg" alt="better basics french terry sweatshorts" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Realme 10 (Clash White, 8GB Ram) (128 GB Storage)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Mobile</a>

                                            <div class="price-box">
                                                <p class="price">₹16,400</p>
                                                <del>₹19,999</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="product-showcase">

                            <h2 class="title">Trending</h2>

                            <div class="showcase-wrapper  has-scrollbar">

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/smartwatch-1.jpg" alt="running & trekking shoes - white" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Noise Pulse 2 Max Advanced Bluetooth Calling Smart Watch with 1.85'' Display, 550 NITS Brightness, Smart DND, 10 Days Battery, 100 Sports Modes, Smart Watch for Men and Women - (Jet Black)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Smart Gadgets</a>

                                            <div class="price-box">
                                                <p class="price">₹1,499</p>
                                                <del>₹5,999</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/airpods-2.jpg" alt="trekking & running shoes - black" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">boAt Airdopes Atom 81 True Wireless Earbuds with Upto 50H Playtime, Quad Mics ENx™ Tech, 13MM Drivers, Beast™ Mode(50ms Super Low Latency)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Airpods</a>

                                            <div class="price-box">
                                                <p class="price">₹1,199</p>
                                                <del>₹4,499</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/headphon-3.jpg" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">boAt Rockerz 450 Masaba Edition Upto 15 Hours Playback, 40MM Drivers, Padded Ear Cushions and Dual Modes Bluetooth Wireless On Ear Headphones with Mic (Black Star)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Headphone</a>

                                            <div class="price-box">
                                                <p class="price">₹1,699</p>
                                                <del>₹3,499</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/tablet-2.png" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Lenovo Tab P11 Plus Tablet (11 inch (27.94 cm), 6 GB, 128 GB, Wi-Fi+LTE, Voice Calling), Slate Grey with 2K Display, Quad Speakers with Dolby Atmos, 7700 mAH Battery and TUV Certified Eye Protection</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Tablet</a>

                                            <div class="price-box">
                                                <p class="price">₹23,999</p>
                                                <del>₹39,000</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/smartwatch-2.jpg" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Noise Pulse 2 Max Advanced Bluetooth Calling Smart Watch with 1.85'' TFT and 550 Nits Brightness, Smart DND, 10 Days Battery, 100 Sports Mode, Smartwatch for Men and Women - (Midnight Blue)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Samrt Gadgets</a>

                                            <div class="price-box">
                                                <p class="price">₹1,499</p>
                                                <del>₹5,999</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/notebook.png" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Samsung Galaxy Book3 Pro 360 Intel 13th Gen i7 EvoTM 40.62cm(16") Touchscreen 2-in-1 3K Display, 120Hz, Thin & Light Laptop(16 GB/512 GB SSD/Windows 11/MS Office/S-Pen/Graphite/1.6Kg), NP960QFG-KA1IN</h4>
                                            </a>

                                            <a href="#" class="showcase-category">boots</a>

                                            <div class="price-box">
                                                <p class="price">₹1,63,990</p>
                                                <del>₹2,04,990</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/laptop-1.png" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">ASUS Vivobook S 14 Flip (2022), 14-inch (35.56 cms) WUXGA 16:10 Touch, AMD Ryzen 7 5800H, 2-in-1 Laptop (16GB/512GB SSD/Integrated Graphics/Windows 11/Office 2021/Silver/1.5 kg), TN3402QA-LZ741WS</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Laptop</a>

                                            <div class="price-box">
                                                <p class="price">₹69,990</p>
                                                <del>₹86,990</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/laptop-3.png" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">HP 15s,11th Gen Intel Core i3-1115G4 8GB RAM/512GB SSD 15.6-inch(39.6 cm) </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Casual</a>

                                            <div class="price-box">
                                                <p class="price">₹38,490</p>
                                                <del>₹51,812</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="product-showcase">

                            <h2 class="title">Top Rated</h2>

                            <div class="showcase-wrapper  has-scrollbar">

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/air-1.jpg" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">LG 1.5 Ton 5 Star AI DUAL Inverter Split AC (Copper, Super Convertible 6-in-1 Cooling, HD Filter with Anti-Virus Protection, 2023 Model, RS-Q19YNZE, White)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Home Appliances</a>

                                            <div class="price-box">
                                                <p class="price">₹45,490</p>
                                                <del>₹75,990</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/ovens-1.jpg" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Philips HD6975/00 Digital Oven Toaster Grill, 25 Litre OTG, 1500 Watt with Opti Temp Technology, Chamber light and 10 preset menus, Inner Lamp (Grey)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Home Appliances</a>

                                            <div class="price-box">
                                                <p class="price">₹8,980</p>
                                                <del>₹11,995</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/mixture-1.jpg" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Prestige IRIS Plus 750 watt mixer grinder</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Mixture Grinder</a>

                                            <div class="price-box">
                                                <p class="price">₹2,949</p>
                                                <del>₹6,295</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/fridges-1.jpg" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Haier 165L 1 Star Direct Cool Single Door Refrigerator (HED-171RS-P, Red Steel)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Refrigerator</a>

                                            <div class="price-box">
                                                <p class="price">₹10,990</p>
                                                <del>₹14,999</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/fridges-2.jpg" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Samsung 363 L 1 Star Convertible 5In1 Digital Inverter Frost Free Double Door Refrigerator (RT39C5511S9/HL, Silver, Refined Inox)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Refrigerator</a>

                                            <div class="price-box">
                                                <p class="price">₹38,990</p>
                                                <del>₹55,990</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/air-2.jpg" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Samsung 1.5 Ton 3 Star Inverter Split AC (Copper, Convertible 5-in-1 Cooling Mode, Easy Filter Plus (Anti-Bacteria), 2023 Model AR18CYLZABE White)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Air Conditioner</a>

                                            <div class="price-box">
                                                <p class="price">₹34,990</p>
                                                <del>₹60,990</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/mixture-2.jpg" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">USHA Thunderbolt 800-Watt Copper Motor Mixer Grinder with 3 Jars and 5 Years Motor Warranty(Red)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Mixture Grinder</a>

                                            <div class="price-box">
                                                <p class="price">₹3,324</p>
                                                <del>₹5,595</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/products/chimney-2.jpg" class="showcase-img" width="80">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Faber 60cm 1200 m3/hr, Autoclean Chimney || Filterless || 8Yr on Motor, 2Yr Comprehensive Warranty|| Italian design - Made in India (HOOD POLO IN HC SC BK 60, Touch & Gesture Control, Black)</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Home Appliances</a>

                                            <div class="price-box">
                                                <p class="price">₹11,990</p>
                                                <del>₹26,990</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!-------- PRODUCT FEATURED --------->

                    <div class="product-featured">

                        <h2 class="title">Deal of the day</h2>

                        <div class="showcase-wrapper has-scrollbar">

                            <div class="showcase-container">

                                <div class="showcase">

                                    <div class="showcase-banner">
                                        <video class="newsletter-video my-video" autoplay muted loop src="./assets/videos/ipad air.mp4"></video>
                                    </div>

                                    <div class="showcase-content">

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>

                                        <a href="#">
                                            <h3 class="showcase-title">Apple 2022 iPad Air</h3>
                                        </a>

                                        <p class="showcase-desc">
                                            Apple 2022 iPad Air M1 Chip (10.9-inch/27.69 cm, Wi-Fi, 64GB) - Blue (5th Generation)
                                        </p>

                                        <div class="price-box">
                                            <p class="price">₹54,999</p>

                                            <del>₹59,900</del>
                                        </div>

                                        <button class="add-cart-btn">add to cart</button>

                                        <div class="showcase-status">
                                            <div class="wrapper">
                                                <p>
                                                    already sold: <b>20</b>
                                                </p>

                                                <p>
                                                    available: <b>40</b>
                                                </p>
                                            </div>

                                            <div class="showcase-status-bar"></div>
                                        </div>

                                        <div class="countdown-box">

                                            <p class="countdown-desc">
                                                Hurry Up! Offer ends in:
                                            </p>

                                            <div class="countdown">

                                                <div class="countdown-content">

                                                    <p class="display-number">360</p>

                                                    <p class="display-text">Days</p>

                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">24</p>
                                                    <p class="display-text">Hours</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">59</p>
                                                    <p class="display-text">Min</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">00</p>
                                                    <p class="display-text">Sec</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="showcase-container">

                                <div class="showcase">

                                    <div class="showcase-banner">
                                        <video class="newsletter-video my-video" autoplay muted loop src="./assets/videos/watch-1.mp4"></video>
                                    </div>

                                    <div class="showcase-content">

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>

                                        <h3 class="showcase-title">
                                            <a href="#" class="showcase-title">NoiseFit Force Rugged Round Dial Bluetooth Calling Smart Watch</a>
                                        </h3>

                                        <p class="showcase-desc">
                                            NoiseFit Force Rugged Round Dial Bluetooth Calling Smart Watch with 1.32" HD Screen, Functional Crown, 550 NITS, 7 Days Battery, AI Voice Assistance, 200+ Watch Faces, Heart Rate Tracker- (Jet Black)
                                        </p>

                                        <div class="price-box">
                                            <p class="price">₹2,499</p>
                                            <del>₹5,999</del>
                                        </div>

                                        <button class="add-cart-btn">add to cart</button>

                                        <div class="showcase-status">
                                            <div class="wrapper">
                                                <p> already sold: <b>15</b> </p>

                                                <p> available: <b>40</b> </p>
                                            </div>

                                            <div class="showcase-status-bar"></div>
                                        </div>

                                        <div class="countdown-box">

                                            <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                                            <div class="countdown">
                                                <div class="countdown-content">
                                                    <p class="display-number">360</p>
                                                    <p class="display-text">Days</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">24</p>
                                                    <p class="display-text">Hours</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">59</p>
                                                    <p class="display-text">Min</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">00</p>
                                                    <p class="display-text">Sec</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!-------- PRODUCT GRID  --------->

                    <div class="product-main">

                        <h2 class="title">New Products</h2>

                        <div class="product-grid">

                            <div class="showcase">

                                <div class="showcase-banner">

                                    <img src="./assets/images/Products-2/mobile-1.jpg" width="300" class="product-img default">
                                    <img src="./assets/images/Products-2/mobile-2.jpg" width="300" class="product-img hover">

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

                                    <a href="#" class="showcase-category">MOBILE</a>

                                    <a href="#">
                                        <h3 class="showcase-title">Samsung Galaxy M51</h3>
                                    </a>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">₹24,999</p>
                                        <del>₹29,999</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

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

            </div>

        </div>


        <!-------- TESTIMONIALS, CTA & SERVICE --------->

        <div>

            <div class="container">

                <div class="testimonials-box">

                    <!-------- TESTIMONIALS --------->

                    <div class="testimonial">

                        <h2 class="title">testimonial</h2>

                        <div class="testimonial-card">

                            <img src="./assets/images/testimonial-1.jpeg" alt="alan doe" class="testimonial-banner" width="80" height="80">

                            <p class="testimonial-name">Aditya Sharma</p>

                            <p class="testimonial-title">CSE Web Developer</p>

                            <img src="./assets/images/icons/quote-left.png" alt="quotation" class="quotation-img" width="26">

                            <p class="testimonial-desc">
                                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                dolor dolor sit amet.
                            </p>

                        </div>

                    </div>

                    <!-------- CTA --------->

                    <div class="cta-container">

                        <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

                        <a href="#" class="cta-content">

                            <p class="discount">USE CODE: SUMMER50</p>

                            <h2 class="cta-title">Best Product Deals</h2>

                            <p class="cta-text">Starting @ ₹99</p>

                            <button class="cta-btn">Shop now</button>

                        </a>

                    </div>



                    <!-------- SERVICE --------->

                    <div class="service">

                        <h2 class="title">Our Services</h2>

                        <div class="service-container">

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="boat-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Worldwide Delivery</h3>
                                    <p class="service-desc">For Order Over ₹100</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="rocket-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Next Day delivery</h3>
                                    <p class="service-desc">UK Orders Only</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="call-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Best Online Support</h3>
                                    <p class="service-desc">Hours: 8AM - 11PM</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="arrow-undo-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Return Policy</h3>
                                    <p class="service-desc">Easy & Free Return</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="ticket-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">30% money back</h3>
                                    <p class="service-desc">For Order Over ₹100</p>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-------- BLOG --------->
        <div class="blog">

            <div class="container">

                <div class="blog-container has-scrollbar">

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Gadgets</a>

                            <a href="#">
                                <h3 class="blog-title">Shop the Latest : Your Only Destination for Modern Gadgets</h3>
                            </a>

                            <p class="blog-meta">
                                By <cite>Aditya Sharma</cite> / <time datetime="2023-04-06">Apr 06, 2023</time>
                            </p>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner" width="300">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Tablet</a>

                            <h3>
                                <a href="#" class="blog-title">Upgrade Your Life with the Hottest Gadgets of the Year.</a>
                            </h3>

                            <p class="blog-meta">
                                By <cite>Aditya Sharma</cite> / <time datetime="2023-01-18">Jan 18, 2023</time>
                            </p>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue." class="blog-banner" width="300">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Electronics</a>

                            <h3>
                                <a href="#" class="blog-title">Unleash the Power of Technology: Find Your Perfect Gadget Here</a>
                            </h3>

                            <p class="blog-meta">
                                By <cite>Aditya Sharma</cite> / <time datetime="2023-04-27">April 27, 2023</time>
                            </p>

                        </div>

                    </div>

                    <div class="blog-card">

                        <a href="#">
                            <img src="./assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner" width="300">
                        </a>

                        <div class="blog-content">

                            <a href="#" class="blog-category">Electronics</a>

                            <h3>
                                <a href="#" class="blog-title">Revolutionize Your Routine with our Must-Have Gadget Collection</a>
                            </h3>

                            <p class="blog-meta">
                                By <cite>Aditya Sharma</cite> / <time datetime="2023-03-15">Mar 15, 2023</time>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>



    <!-------- FOOTER --------->
    <footer>


        <div class="footer-nav">

            <div class="container">

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Popular Categories</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Tablet & Mobile</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Desktop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Wireless Headphone</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Games</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Smart Watches</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Products</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Our Company</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Delivery</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Legal Notice</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Terms and conditions</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">About us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Secure payment</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Services</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Contact</h2>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="content">
                            32 NS Road Howrah 1st Floor Block A
                        </address>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <a href="tel:+91 8777854098" class="footer-nav-link">+91 8777854098</a>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <a href="mailto:aditya102adi@gmai.com" class="footer-nav-link">aditya102adi@gmai.com</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Follow Us</h2>
                    </li>

                    <li>
                        <ul class="social-link">

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <div class="container">

                <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

                <p class="copyright">
                    Copyright © 2023 <a href="#">Fav-Gadget</a> All Rights Reserved Designed with ❤️ by
                    Aditya Kumar Sharma
                </p>

            </div>

        </div>

    </footer>


    <!-------- CUSTOM JS LINK --------->
    <script src="./assets/js/script.js"></script>
    <script>
        let subMenu = document.getElementById("submenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

    <!-------- ICON LINK --------->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/6bd62450ee.js" crossorigin="anonymous"></script>

</body>

</html>