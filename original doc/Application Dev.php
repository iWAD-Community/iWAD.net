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
        <title>Application Dev</title>
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
                      <li class="nav__item"><a href="Services.php" class="nav__link ">Services</a></li>
                      <li class="nav__item"><a href="About us.php" class="nav__link">About Us</a></li>
                      <li class="nav__item"><a href="iwad Store.php" class="nav__link">iWAD Store</a></li>
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
          

  
      
          
<section class="share section bd-container" id="share">
    <div class="share__container bd-grid">
        <div class="share__data">
            <h2 class="section-title-center"> | App Development|
                        Build Android and iOS apps in one go |   </h2>
                  </h2> 
            <p class="share__description"> Here at iWAD we are are a software development company that has immense experience in creating feature-rich and high-performing native custom applications for IOS and Android platforms.We certainly keep track of the latest technical standards and design recommendation by Apple, Huawei  and Google With expertise in native and hybrid mobile development, we connect your business with people wherever they are in the world, regardless of what device they use.</p>
          
        </div>
      
        <div class="share__img">
            <img src="assets/img/app dev.png" alt="">
        </div>
    </div>
    <h2 class="section-title-center"> | Custom mobile app development | </h2>
            <p class="share__description">  Get a native iOS or Android app that reduces operational costs, increases customers’ lifetime value, and boosts revenue. Our mobile applications will make users love your brand.Whether you are an individual entrepreneur or  organization, our mobile app development services are designed to cover your exact requirements on time and сost-efficiently. Our team is more than tech-savvy enough to build mobile software to boost your existing business KPIs and/or establish a new custom app successfully.Make use of our mobile app development services to create a memorable application that will stand out among competitive products easily. We create native apps of any complexity and certainly enjoy focusing on businesses that bring real value and useful solutions to the end-user.</p>
    </section>
  <!--========== Start OUR SERVICES ==========-->

  <section class="decoration section bd-container" id="decoration">
        <h2 class="section-title"> <br>Our Services</h2>
        <div class="decoration__container bd-grid">
            <div class="decoration__data">
                
                <a href="../WebDevelopment.php"><img src="assets/img/send1.png"  class="decoration__img" ></a>
                <h3 class="decoration__title">Web Development</h3>
               
            </div>
  
            <div class="decoration__data">
         
              <a href="../hosting.php">     <img src="assets/img/host.png"  alt="" class="decoration__img"></a>
              <h3 class="decoration__title">
                Hosting & Domain Registration</h3>
            
          </div>
  
  
        
          <div class="decoration__data">

              <a href="../Search Opt.php">    <img src="assets/img/search.png" alt="" class="decoration__img"></a>          <h3 class="decoration__title"> search Engine optimization </h3>
             
          </div>
        </div>
          <br>
        <div class="decoration__container bd-grid">
          <div class="decoration__data">
   
              <a href="../Application Dev.php">           <img src="assets/img/app dev.png" alt="" class="decoration__img"></a>
              <h3 class="decoration__title">IOS and Android app dev</h3>
          
          </div>
  
  
          <div class="decoration__data">
           
            <a href="../Design.php"> <img src="assets/img/pngegg (19).png" alt="" class="decoration__img"></a>
            <h3 class="decoration__title">
              Graphics  & Design</h3>
            
        </div>
         
        
          <div class="decoration__data">
  
              <a href="../Computer Services.php">              <img src="assets/img/coputer.png" alt="" class="decoration__img"></a>
              <h3 class="decoration__title">  
                Computer Services</h3>
            
          </div>
          <div class="decoration__data">
           
            <a href="../Satellite installation & E paymentsh3.php"> <img src="assets/img/pngegg (24).png" alt="" class="decoration__img"></a>
            <h3 class="decoration__title">
              Satellite installation & E payments </h3>
            
        </div>
         
      </div>
    </section>
        <!--========== END OUR SERVICES ==========-->
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
