<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - fAV gADGET</title>
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


  
  <div class="container contact-deatils">

    <div class="details">
      <span>Get In Touch</span>
      <h2>Visit one of our agaency locations or contact us today</h2>
      <h3>Head Office</h3>

      <div>
        <li>
          <ion-icon name="navigate-circle-outline" class="icon"></ion-icon>
          <p>32 NS Road Liluah Howrah</p>
        </li>

        <li>
          <ion-icon name="mail-open-outline" class="icon"></ion-icon></ion-icon>
          <p>aditya102adi@gmail.com</p>
        </li>

        <li>
          <ion-icon name="call-outline" class="icon"></ion-icon>
          <p>8777854098</p>
        </li>

        <li>
          <ion-icon name="time-outline" class="icon"></ion-icon>
          <p>10:00 AM - 8:00 PM</p>
        </li>
      </div>
    </div>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14731.282009378197!2d88.33364660000001!3d22.62317715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89d73bcbb31eb%3A0x9e346e968d3e4219!2sBelur%20Math!5e0!3m2!1sen!2sin!4v1683653962356!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>



  <div class="container extra">
    <h2>Contact Us Now</h2>
    <div class="row">
      <div>
        <div class="row">
          <div class="form">
            <div class="contact-info">
              <h3 class="title-two">Let's Get In Touch</h3>
              <p class="extra2">
                Feel free to get in touch with me! I'm always happy to connect and discuss potential
                collaborations or projects.
                I'm available for any questions or inquiries you may have.

                <br>Let's chat!</br>
              </p>




              <div class="info">
                <p>Connect with us :</p>
                <ul class="contact-social">

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

              <video class="my-video" autoplay muted loop src="./assets/videos/banner.mp4"></video>

            </div>

            <div class="contact-form">

              <form action="https://formspree.io/f/xayzadrz" method="POST">
                <h3 class="title-two">Connect With Fav-Gadget</h3>
                <div class="input-container">
                  <input type="text" name="name" class="input" id="name" required autocomplete="off">
                  <label for="">Your Name</label>
                  <span>Your Name</span>
                </div>
                <div class="input-container">
                  <input type="email" name="email" class="input" id="email" required autocomplete="off">
                  <label for="">Email</label>
                  <span>Email</span>
                </div>
                <div class="input-container">
                  <input type="tel" name="phone" class="input" id="phone" required autocomplete="off">
                  <label for="">Phone</label>
                  <span>Phone</span>
                </div>
                <div class="input-container textarea" id="message">
                  <textarea name="message" class="input" required autocomplete="off"></textarea>
                  <label for="">Message</label>
                  <span>Message</span>
                </div>
                <button type="submit" class="add-cart-btn btn2">Send message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!---------- FOOTER ----------->
  <?php require 'global/footer.php' ?>


  <!------ CUSTOM JS LINK ----->
  <script>
    const inputs = document.querySelectorAll(".input");

    function focusFunc() {
      let parent = this.parentNode;
      parent.classList.add("focus");
    }

    function blurFunc() {
      let parent = this.parentNode;
      if (this.value == "") {
        parent.classList.remove("focus");
      }
    }

    inputs.forEach((input) => {
      input.addEventListener("focus", focusFunc);
      input.addEventListener("blur", blurFunc);
    });
  </script>


  <script src="./assets/js/script.js"></script>


  <!------ ICONS LINK ----->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/6bd62450ee.js" crossorigin="anonymous"></script>

</body>

</html>