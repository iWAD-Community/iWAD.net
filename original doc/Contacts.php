<?php
  session_start();

 ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Website icon -->
        <link rel="shortcut icon" type="image/png" href="assets/img/iwad logo icon 1.png">
        <!-- Website icon -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel = "stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="./assets/css/iwad store ani.css">
        <title>Responsive landing page</title>
    </head>
    <body>
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
          <nav class="nav bd-container">
              <a href="iwad Store.php" class="nav__item"><img src="assets/img/home.png"height="40px"width="143px"></a>                
          
              <div class="nav__menu" id="nav-menu">
                  <ul class="nav__list">
                      <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                      <li class="nav__item"><a href="Services.php" class="nav__link">Services</a></li>
                      <li class="nav__item"><a href="About us.php" class="nav__link">About Us</a></li>
                      <li class="nav__item"><a href="iwad Store.php" class="nav__link ">iWAD Store</a></li>
                      <li class="nav__item"><a href="Contacts.php" class="nav__link active-link">Contact Us</a></li>
 
                      <li class="nav__item"><a href="signup.php" class="nav__links">Sign Up</a></li>
                      <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                  </ul>
              </div>

              <div class="nav__toggle" id="nav-toggle">
                  <i class='bx bx-grid-alt'></i>
              </div>
          </nav>
      </header>
               <!-- welcome section -->
      <!-- welcome section -->
      <div class = "head-body container">
                <div class = "head-body-content">
                <h2 class="section-title-center">Contact Us|   </h2><h4>What Ever it Maybe we are here |</h4> <br>
                <H4>|Submit a Request</H4> Send a request directly to us! Typical response time: within 1 business day <H4>|Schedule a meeting</H4>Set up a meeting with us:

Earliest time & date <h4> |Live chat </h4>  Live chat is not available in your region yet.

You can contact us via email or by calling one of the numbers below.</p>

                 
                </div>
          
                <div class = "head-body-img">
                  <img src = "./assets/img/pngegg (6).png" alt = "header image">
                </div>
                  

  
  

    <body>
      
      
    </body>





   <!-- contact section -->
   <section class = "contact py-4" id = "contact">
    <div class = "container">
      <div class = "title">
        <h2 class = "title-text">get in touch</h2>
        <div class = "title-underline"></div>
      </div>

      <div class = "contact-wrapper">
        <!-- contact info -->
        <div class = "contact-info">
          <!-- single item -->
          <div class = "single-contact">
            <span>
              <i class = "fas fa-phone"></i>
            </span>
            <h2 class = "text-large">Phone</h2>
            <p class = "text-light">512-421-3940</p>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class = "single-contact">
            <span>
              <i class = "fas fa-envelope"></i>
            </span>
            <h2 class = "text-large">Email</h2>
            <p class = "text-light">email@support.com</p>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class = "single-contact">
            <span>
              <i class = "fas fa-map-marker-alt"></i>
            </span>
            <h2 class = "text-large">Location</h2>
            <p class = "text-light">Belvedere Harare</p>
          </div>
          <!-- end of single item -->
        </div>

        <form class = "form">
          <div class = "form-group">
            <input type = "text" class = "form-control" placeholder="Name">
            <input type = "text" class = "form-control" placeholder="Email">
          </div>
          <input type = "text" class = "form-control" placeholder="Subject">
          <textarea rows = "4" placeholder="Message"></textarea>
          <button type = "button" class = "btn-form">Send Message</button>
        </form>
      </div>
    </div>
  </section>
  <!-- end of contact section -->

       

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
