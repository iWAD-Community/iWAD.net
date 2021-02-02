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

        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Custom CSS -->
   <link rel = "stylesheet" href="assets/css/main.css">
   <!-- Google fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Varela+Round&display=swap" rel="stylesheet">
   <!-- Font awesome -->
   <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
   <!-- Owl carousel -->
   <link rel = "stylesheet" href = "OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
   <link rel = "stylesheet" href = "OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
        
    </head>
    <body>
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
          <nav class="nav bd-container">
              <a href="Contacts.php" class="nav__item"><img src="assets/img/home.png"height="40px"width="143px"></a>                
          
              <div class="nav__menu" id="nav-menu">
                  <ul class="nav__list">
                      <li class="nav__item"><a href="home.php" class="nav__link active-link">Home</a></li>
                      <li class="nav__item"><a href="Services.php" class="nav__link">Services</a></li>
                      <li class="nav__item"><a href="About us.php" class="nav__link">About Us</a></li>
                      <li class="nav__item"><a href="iwad Store.php" class="nav__link">Iwad Store</a></li>
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

        

        <!--========== START OF SLIDER ==========-->

        <style>
          * {box-sizing: border-box;}
          body {font-family: Verdana, sans-serif;}
          .mySlides {display: none;}
          img {vertical-align: middle;}
          
          /* Slideshow container */
          .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
          }
          
          /* Caption text */
          .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }
          
          /* Number text (1/3 etc) */
          .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }
          
          /* The dots/bullets/indicators */
          .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }
          
          .active {
            background-color: #717171;
          }
          
          /* Fading animation */
          .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
          }
          
          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }
          
          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }
          
          /* On smaller screens, decrease text size */
          @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
          }
          </style>
          
          <div class="slideshow-container">
          
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="assets/img/software.jpg" style="width:100%">
            <div class="text">SOFTWARE DEVELOPMENT</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="assets/img/computer sales.jpg" style="width:100%">
            <div class="text">COMPUTER SALES</div>
          </div>
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="assets/img/app deve.jpg" style="width:100%">
            <div class="text">App Development</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="assets/img/digital.jpg" style="width:100%">
            <div class="text">DIGITAL MARKETING</div>
          </div>
          
          </div>
          <br>
          
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>
          
          <script>
          var slideIndex = 0;
          showSlides();
          
          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 3500); // Change image every 3.5 seconds
          }
          </script>
          

        <!--========== END OF SLIDER ==========-->

        <section class="share section bd-container" id="share">
  
          <div class="share__data">
              <h2 class="section-title-center">| iNTERNET | WEB | <br>APPLICATION | DEVELOPMENT </h2>
              <p class="share__description"> Will Change how you view the world through fusing ancient wisdom and modern technologies for a creative texture to life. iWAD, Empowering you with Knowledge to expand beyond your Imagination.iWAD offers our customers a wealth of technical and business expertise. We create diverse, complex, web and mobile solutions for any business need. Our knowledge and experience translate to added value and peace of mind for our customers. With iWAD you get quality software and perfect service every time.

            </p>
        
        
      </div>
    <!--========== SHARE ==========-->
    <section class="share section bd-container" id="share">
      <div class="share__container bd-grid">
          <div class="share__data">
              <h2 class="section-title-center">| Product Development| </h2>
              <p class="share__description">We've created, engineered, and delivered software solutions for Zimbabwean and South African companies in a few industries.iWAD customers get the best results every time because of our passion, expertise, and experience.</p>

          </div>
          <div class="share__img">
              <img src="assets/img/shared.PNG" alt="">
          </div>
      </div>
  </section>
<section class="share section bd-container" id="share">

  <div class="share__data">
      <h2 class="section-title-center">| Quality Assurance & Business Analysis| </h2>
      <p class="share__description">We believe in getting it right every time - that's why our Quality Assurance and Production teams work separately. We conduct thorough and rigorous QA checks on all of our projects. We can also check third-party products to ensure you're getting what you expect.
        Before iWAD actually engineers a product, we always talk to our customers to understand their needs. Our team can analyze your project's functionality, business logic, software architecture, and future user scenarios. We'll sweat the small stuff so you can focus on the big picture.
        iWAD offers a service to update or replace your outdated legacy systems with cutting-edge new technologies and efficient custom software systems. We will bring back the efficiency of your business and get it to the new level to outrun your competition.
    </p>


</div>
</section>
     
                      <!-- about section -->
    <section class = "about py-4" id = "about">
        <div class = "container">
          <div class = "title">
            <h2 class = "title-text">What We offer</h2>
            <div class = "title-underline"></div>
          </div>
  
          <div class = "about-wrapper">
            <!-- single item -->
            <div class = "single-about overlay">
              <span><i class = "fas fa-cogs"></i></span>
              <h2 class = "text-large">fully customizible</h2>
              <p class = "text-light">As a bonus feature, iWAD added the Content Management System (CMS) to all the websites and webpages it Develops; enabling clients to add and remove any media from their respective sites they want at any time; depending with the size of the media and their Cloud storage partition.</p>
              
            </div>
            <!-- end of single item -->
  
            <!-- single item -->
            <div class = "single-about overlay">
              <span><i class = "fas fa-mobile-alt"></i></span>
              <h2 class = "text-large">fully responsive</h2>
              <p class = "text-light">We create quality websites that can work with all devices, Operating Systems and screen sizes. With the RESPONSIVENESS structure, these websites can be projected on a larger screen and still render well without cutting or shortening the display.</p>
        
            </div>
            <!-- end of single item -->
  
            <!-- single item -->
            <div class = "single-about overlay">
              <span><i class = "fas fa-magic"></i></span>
              <h2 class = "text-large">awesome features</h2>
              <p class = "text-light">From animations, cool themes, awesome Gifs and color complementary elements; iWAD offers you one of the greatest, if not the greatest, visual treaties to your system; adding a creative and modern look to your business or project.</p>
              <!-- <a href = "#" class = "btn-link">read more</a>-->
            </div>
            <!-- end of single item -->
          </div>
        </div>
      </section>
      <!-- end of about section -->
      <section class="share section bd-container" id="share">

        <div class="share__data">
            <h2 class="section-title-center">| What We Promise| </h2>
            <p class="share__description">We believe in getting it right every time - that's why our Quality Assurance and Production teams work separately. We conduct thorough and rigorous QA checks on all of our projects. We can also check third-party products to ensure you're getting what you expect.
              Before iWAD actually engineers a product, we always talk to our customers to understand their needs. Our team can analyze your project's functionality, business logic, software architecture, and future user scenarios. We'll sweat the small stuff so you can focus on the big picture.
              iWAD offers a service to update or replace your outdated legacy systems with cutting-edge new technologies and efficient custom software systems. We will bring back the efficiency of your business and get it to the new level to outrun your competition.
          </p>
      
      
      </div>
       <!--========== Start OUR SERVICES ==========-->

     <section class="decoration section bd-container" id="decoration">
      <h2 class="section-title"> <br>Our Services</h2>
      <div class="decoration__container bd-grid">
          <div class="decoration__data">
              
              <a href="../original/WebDevelopment.php"><img src="assets/img/send1.png"  class="decoration__img" ></a>
              <h3 class="decoration__title">Web Development</h3>
             
          </div>

          <div class="decoration__data">
       
            <a href="../original/hosting.php">     <img src="assets/img/host.png"  alt="" class="decoration__img"></a>
            <h3 class="decoration__title">
              Hosting & Domain Registration</h3>
          
        </div>


          <div class="decoration__data">
              <img src="assets/img/search.png" alt="" class="decoration__img">
              <a href="../original/Search Opt.php"><h3 class="decoration__title"> search Engine optimization </h3></a>
             
          </div>
      </div>
        <br>
      <div class="decoration__container bd-grid">
        <div class="decoration__data">
 
            <a href="../original/Application Dev.php">           <img src="assets/img/app dev.png" alt="" class="decoration__img"></a>
            <h3 class="decoration__title">IOS and Android app dev</h3>
        
        </div>


        <div class="decoration__data">
         
          <a href="../original/Design.php"> <img src="assets/img/pngegg (19).png" alt="" class="decoration__img"></a>
          <h3 class="decoration__title">
            Graphics  & Design</h3>
          
      </div>
       
      
        <div class="decoration__data">

            <a href="../original/Computer Services.php">              <img src="assets/img/coputer.png" alt="" class="decoration__img"></a>
            <h3 class="decoration__title">  
              Computer Services</h3>
          
        </div>
        <div class="decoration__data">
         
          <a href="../original/Satellite installation & E paymentsh3.php"> <img src="assets/img/pngegg (24).png" alt="" class="decoration__img"></a>
          <h3 class="decoration__title">
            Satellite installation & E payments </h3>
          
      </div>
       
    </div>
  </section>
          
        <!--========== END OUR SERVICES ==========-->

      <!--========== SEND Email ==========-->
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
        </section>
    </main>

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