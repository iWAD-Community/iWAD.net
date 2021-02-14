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
        <link rel="stylesheet" href="./assets/css/iwad store ani.css">
        <title>iWAD Store</title>
    </head>
    <body style="overflow-x: hidden;">
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
                      <li class="nav__item"><a href="iwad Store.php" class="nav__link active-link">iWAD Store</a></li>
                      <li class="nav__item"><a href="Contacts.php" class="nav__link">Contact Us</a></li>
 
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
               <div class = "head-body container">
                <div class = "head-body-content">
                  <h1 class = "head-title">
                    welcome to iwad store online Shop
                  </h1>
                  <p class = "text">
                  iWAD Store , is an online store that is reliable and offers quality services to its customers.
                  We promise we won't disapoint you. At the moment we can not do online payments ,you will have to contact one of our agents <a href="Contacts.php" class="nav__link">"Contact Us"</a> on how your product will be delivered and paid for .
                  Thank you and we hope you will enjoy the tour in our store. 
                  </p>
                 
                </div>
          
                <div class = "head-body-img">
                  <img src = "./assets/img/Online.png" alt = "header image">
                </div>
              </div>

  
  

</section>
         <!-- trending product -->
         <section class="decoration section bd-container" id="decoration">
                <h2 class="section-title"> iWAD Sales</h2>
                <div class="decoration__container bd-grid">
                    <div class="decoration__data">
                    <a href="/Computers.php"><img src="assets/img/comp1.jpg" alt="" class="decoration__img">  </a>
                    <a href="/Computers.php">                 <h3 class="decoration__title"> Computers</h3> </a>
                 
                    </div>

                    <div class="decoration__data">
                    <a href="/Moblies.php"><img src="assets/img/cell2.jpg" alt="" class="decoration__img">  </a>
                    <a href="/Moblies.php">                 <h3 class="decoration__title"> Moblies Devices</h3> </a>
                 
                        
                    </div>

                    <div class="decoration__data">
                    <a href="/Accesories.php"><img src="assets/img/access1.jpg" alt="" class="decoration__img">  </a>
                    <a href="/Accesories.php">                 <h3 class="decoration__title"> Accesories</h3> </a>
                 
                    </div>
                </div>
            </section>
            
  <!--========== ACCESSORIES ==========-->
  <section class="accessory section bd-container" id="accessory">
    <h2 class="section-title">New  <br> Accessories</h2>

    <div class="accessory__container bd-grid">
        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/cable.jpg" alt="" class="accessory__img">             </a>

            <h3 class="accessory__title">Apple Charging cable</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$8.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>

        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/p3.jpg" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Pouches</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$5.00 - $10.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>
        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/phone3.jpg" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Apple Earphones</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$12.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>

        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/scr1.jpg" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Screen Protector</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$5.00 - $10.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>

        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/hd1.jpg" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">HDMI Cable</h3>
            <span class="accessory__category">Depending With metres</span>
            <span class="accessory__preci">$7.00 - $---</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>


        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/set12.jpg" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Setilite Kit</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$20.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>
    </div>
</section>

<div class = "underline"></div>

<!-- featured product -->
<section class = "featured">
  <div class = "container">
    <!-- item -->
    <div class = "featured-item">
      <div class = "featured-item-img">
        <img src = "assets/img/iphone12black.jpg" alt = "feature image">
      </div>
      <div class = "featured-item-content">
        <div class = "title">
          <h4>On Special </h4>
          <h2>Boxed Iphone 12(128gig)</h2>
          <p class = "item-price">Price $1400.00</p>
          <p class = "item-price"><m style="color: red;">$1390,00<m/></p>
        </div>
        <p class = "text">
        5G speed. A14 Bionic, the fastest chip in a smartphone.
        An edge-to-edge OLED display. Ceramic Shield with four times better drop performance. And Night mode on every camera. iPhone 12 has it all — in two perfect sizes.
         </p>
        <div class = "featured-btns">
          <button type = "button" class = "btn">Explore</button>
          <button type = "button" class = "btn">Purchase</button>
        </div>
      </div>
    </div>
    <!-- end of item -->
    <!-- item -->
    <div class = "featured-item">
      <div class = "featured-item-img">
        <img src = "assets/img/g4.jpg" alt = "feature image">
      </div>
      <div class = "featured-item-content">
        <div class = "title">
          <h4>On Special </h4>
          <h2>Hp 450 g4 coi7 gaming</h2>
          <p class = "item-price">Price $550.00</p>
          <p class = "item-price"><m style="color: red;">$540,00<m/></p>
        </div>
        <p class = "text">
        7th generation
        1 terabyte hdd
        8gig ram ddr4
        2gig dedicated nvidia GeForce graphics card
        4hrs battery
        </p>
        <div class = "featured-btns">
          <button type = "button" class = "btn">Explore</button>
          <button type = "button" class = "btn">Purchase</button>
        </div>
      </div>
    </div>
    <!-- end of item -->
    <!-- item -->
    <div class = "featured-item">
      <div class = "featured-item-img">
        <img src = "assets/./img/EX1.jpg" alt = "feature image">
      </div>
      <div class = "featured-item-content">
        <div class = "title">
          <h4>On Special </h4>
          <h2>hard drive</h2>
          <p class = "item-price">Price $50.00</p>
          <p class = "item-price"><m style="color: red;">$48,00<m/></p>
        </div>
        <p class = "text">
          
        ATA 1Tera External HDD Hard Drive USB 2.0 ,Brand new HDD
        </p>
        <div class = "featured-btns">
          <button type = "button" class = "btn">Explore</button>
          <button type = "button" class = "btn">Purchase</button>
        </div>
      </div>
    </div>
    <!-- end of item -->
    <!-- item -->
    <div class = "featured-item">
      <div class = "featured-item-img">
        <img src = "assets/./img/ra.jpg" alt = "feature image">
      </div>
      <div class = "featured-item-content">
        <div class = "title">
          <h4>On Special </h4>
          <h2>8 DD4 LAPTOP RAM</h2>
          <p class = "item-price">Price $30.00</p>
          <p class = "item-price"><m style="color: red;">$25,00<m/></p>
        </div>
        <p class = "text">
         Good Working 8 DD4 LAPTOP RAM. Hurry while stock last.
        </p>
        <div class = "featured-btns">
          <button type = "button" class = "btn">Explore</button>
          <button type = "button" class = "btn">Purchase</button>
        </div>
      </div>
    </div>
    <!-- end of item -->
  </div>
</section>
<!-- end of featured product -->



    <!--========== SEND Email==========-->
    <section class="send section">
        <div class="send__container bd-container bd-grid">
            <div class="send__content">
                <h2 class="section-title-center send__title">Send Email Now</h2>
                <p class="send__description">Contact us today and Join the vast growing online Community of iWAD.net! We welcome your feedback on changes we make to iWAD.net and your products so please send us an email with any comments you may have.</p>
                <form action="">
                    <div class="send__direction">
                        <input type="text" placeholder="Email address" class="send__input">
                        <a href="#" class="button">Send</a>
                    </div>
                </form>
            </div>

            <div class="send__img">
                <img src="assets/img/pngegg (5).png" alt="">
            </div>
        </div>
    </se>
</main>

<!--========== SEND Email ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer section">
          <div class="footer__container bd-container bd-grid">
              <div class="footer__content">
                  <h3 class="footer__title">
                    <a href="#" class="footer__logo">Web Development </a>
                  </h3>
                  <p class="footer__description">
                    
                    Ecommerce Sites <br>

                    Blog Sites<br>
                    
                    Directrory<br>
                    
                    Contact Pages<br>
                    
                    Magazine Websites<br>
                    
                    Social Media sites.
                    
                  </p>
              </div>

              <div class="footer__content">
                  <h3 class="footer__title">Computer Services</h3>
                  <ul>
                      <li><a href="Computer Services.php" class="footer__link">Hardware Repares </a></li>
                      <li><a href="iwad Store.php" class="footer__link">Computer Sales</a></li>
                      <li><a href="Computer Services.php" class="footer__link">Desktop Support</a></li>
                  </ul>
              </div>

              <div class="footer__content">
                  <h3 class="footer__title">S E O</h3>
                  <ul>
                      <li><a href="Search Opt.php" class="footer__link">Google Ads</a></li>
                      <li><a href="Search Opt.php" class="footer__link">Google ranking</a></li>
                      <li><a href="Search Opt.php" class="footer__link">Youtube Ads</a></li>
                      <li><a href="Search Opt.php" class="footer__link">Facebook Ads</a></li>
                  </ul>
              </div>

              <div class="footer__content">
                  <h3 class="footer__title">Social</h3>
                  <a href="#" class="footer__social"><i class='bx bxl-facebook-circle '></i></a>
                  <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                  <a href="#" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
                  <ul>
                    <li><img class="contact_icon"; src="assets/img/placeholder.png" alt="icon"><a href="https://maps.app.goo.gl/DKGBg4174ws2CJ4a8" class="footer__link"> 17003 Nehanda Rd Zengeza 4, Chitungwiza</a></li>
                    <li><img class="contact_icon"; src="assets/img/gmail.png" alt="icon"><a href="mailto:info@iwad.net" class="footer__link"> info@iwad.net</a></li>
                    <li><img class="contact_icon"; src="assets/img/telephone.png" alt="icon"><a href="tel:+263775051445" class="footer__link"> +263 719 051 445</a></li>
                  </ul>
              </div>
          </div>

          <p class="footer__copy"> 2021 Iwad.Net All right reserved</p>
      </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
