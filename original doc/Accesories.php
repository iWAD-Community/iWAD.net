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
        <title>Accesories</title>
    </head>
    <body onload="preloader()">
        <!-- START PRE LOADER-->  
  <div id="preloader">
    <div class="gify">

    </div>
  </div>
  <style>
    #preloader{
    position: fixed;
    width: 100%;
    height: 100vh;
    background-color: #0d0121;

    background-size: cover;
  z-index: 99999;
  }
  .gify{
    background-image: url("../assets/img/liquid-preloader_dribbble_v2.gif");
    background-position: center;
    background-attachment: fixed;
    height: 70%;
    width:50%;
    margin-left: 25%;
    margin-right: 25%;
    margin-top:10% ;
  }

  </style>
  <script>

    var preloadervar = document.getElementById("preloader")
    function preloader(){
       preloadervar.style.display = "none";
       console.log("Display Gon");
        
    }
  </script>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
          <nav class="nav bd-container">
              <a href="index.php" class="nav__item"><img src="assets/img/home.png"height="40px"width="143px"></a>                
          
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
                    Accesories Section
                  </h1>
                  <p class = "text">
                  If you are looking for Accesories for your mobile phones ,Laptops ,Desktops and many other Accesories ,you are in the right place.
                  iWAD Store offers you good quality Accesories at an affordable. <a href="Contacts.php" class="nav__link">"Contact Us"</a> for more information. 
                  </p>
                 
                </div>
          
                <div class = "head-body-img">
                  <img src = "./assets/img/Mobile-accessories.jpg" alt = "header image">
                </div>
              </div>

  
  

</section>
            
  
<!-- featured product -->
<section class = "featured">
  <div class = "container">
    <!-- item -->
    <div class = "featured-item">
      <div class = "featured-item-img">
        <img src = "assets/img/tera.jpg" alt = "feature image">
      </div>
      <div class = "featured-item-content">
        <div class = "title">
          <h4>Specials </h4>
          <h2>1 Tera Laptop Hard Drive</h2>
          <p class = "item-price">Price $45.00</p>
          <p class = "item-price"><m style="color: red;">$42,00<m/></p>
        </div>
        <p class = "text">
        Shop for 1 terabyte external hard drive at Best Buy
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
        <img src = "assets/img/dellc.jpg" alt = "feature image">
      </div>
      <div class = "featured-item-content">
        <div class = "title">
          <h4>Specials </h4>
          <h2>Dell Laptop Charger</h2>
          <p class = "item-price">Price $12.00</p>
          <p class = "item-price"><m style="color: red;">$10,00<m/></p>
        </div>
        <p class = "text">
        DELL Laptop Charger (AC Adapter) Power Supply Cord: 19.5V, 3.34A, 65W (Pin size 4.5mm x 3mm. Specifications - Voltage: 19.5V - Current: 3.34A -
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
          <h4>Specials </h4>
          <h2>hard drive</h2>
          <p class = "item-price">$50.00</p>
          <p class = "item-price"><m style="color: red;">$45,00<m/></p>
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
          <h4>Specials </h4>
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

<!--========== ACCESSORIES ==========-->
<section class="accessory section bd-container" id="accessory">
    <h2 class="section-title">Computer  <br> Accessories</h2>

    <div class="accessory__container bd-grid">
        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/ram.png" alt="" class="accessory__img">             </a>

            <h3 class="accessory__title">DDR2, DDR3 ,DDR4 Ram Available</h3>
            <span class="accessory__category">Price Vary With Type and Size</span>
            <span class="accessory__preci">$-.--</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>

        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/Hard-D.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Drive</h3>
            <span class="accessory__category">Price Vary With Size</span>
            <span class="accessory__preci">$---</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>
        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/VGA.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">VGA Cable</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$10.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>

        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/keyboard.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Laptop keyboards</h3>
            <span class="accessory__category">Price Vary with Type</span>
            <span class="accessory__preci">$--.--</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>

        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/screen.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Laptop Screens</h3>
            <span class="accessory__category">Price Depending With Type</span>
            <span class="accessory__preci">$35.00 - $---</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>


        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/motherboard.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Desktop and Laptop Motherboards</h3>
            <span class="accessory__category">Prices Depend on Type of Motherboard</span>
            <span class="accessory__preci">$--.--</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>
    </div>
</section>

<div class = "underline"></div>

<!--========== ACCESSORIES ==========-->
<section class="accessory section bd-container" id="accessory">
    <h2 class="section-title">Mobile Phone <br> Accessories</h2>

    <div class="accessory__container bd-grid">
        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/cable.png" alt="" class="accessory__img">             </a>

            <h3 class="accessory__title">Apple Charging cable</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$8.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>

        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/pouch.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Pouches</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$5.00 - $10.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>
        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/apple-earbuds.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Apple Earphones</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$12.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>

        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/sp.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Screen Protector</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$5.00 - $10.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>

        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/memory.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Memory Cards</h3>
            <span class="accessory__category">Price Vary With Size</span>
            <span class="accessory__preci">$5.00 - $---</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>


        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/battery.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Batteries</h3>
            <span class="accessory__category">Price Depend On Type</span>
            <span class="accessory__preci">$--.-</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>
    </div>
</section>

<div class = "underline"></div>

<!--========== ACCESSORIES ==========-->
<section class="accessory section bd-container" id="accessory">
    <h2 class="section-title">Gaming  <br> Accessories</h2>

    <div class="accessory__container bd-grid">
        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/need.png" alt="" class="accessory__img">             </a>

            <h3 class="accessory__title">Gaming</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$0.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>

        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/need.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Gaming</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$$0.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>
        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/need.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Gaming</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$0.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>

        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/need.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Gaming</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$0.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>

        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/need.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Gaming</h3>
            <span class="accessory__category">Accesories</span>
            <span class="accessory__preci">$0.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>


        <div class="accessory__content">
        <a href="/original doc/iwad Store - Accesories.php">                <img src="assets/img/need.png" alt="" class="accessory__img">             </a>
            <h3 class="accessory__title">Gaming</h3>
            <span class="accessory__category">Accessory</span>
            <span class="accessory__preci">$0.00</span>
            <a href="#" class="button accessory__button"><i class='bx bx-heart'></i></a>
        </div>
    </div>
</section>

<div class = "underline"></div>

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
