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
        <title>Hosting </title>
    </head>
    <body onload = "preloader()">
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
  <!-- end PRE LOADER-->
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
            <h2 class="section-title-center"> |Hosting & Domain Registration|
                           </h2>
                  </h2> 
            <p class="share__description">   iWAD  offers extremely affordable hosting plans without compromising too much on the quality and performance of the service. While our prices are cheap , the features that come with iWAD plans will appeal to many beginner website owners.

We at iWAD offer  a variety of hosting plans with different features and all plans come with an easy website builder, free SSL certificate, 65% uptime guarantee, and 24/7/365 support.

the cheapest plan doesn’t include a free domain and has limited processing power and memory.

Other services provided by iWAD include Cloud, Email, WordPress, and Windows VPS hosting plans.

All plans come with a standard 30-day money-back guarantee.    </p>
          
        </div>
      
        <div class="share__img">
            <img src="assets/img/host.png" alt="">
        </div>
    </div>
    <h2 class="section-title-center"> |Domain Registration |  </h2>
            <p class="share__description"> <h4> What is a domain name?</h4>
            A domain is a user-friendly naming system that allows people to easily navigate web servers and web pages. Rather than making people type in an IP address whenever they want to access a certain web page (like 38.97.225.253), websites are instead assigned easy-to-remember character strings, called domains.
                
                <h4>What is a TLD?</h4>
               “TLD” stands for “Top Level Domain,” and refers to the domain extension to the right of the dot. For example, the TLD for iWAD.net/iwad.com is “.com.” Some other examples of TLD extensions are .org, .rocks, .life, .dog, and many, many more.
               
               <h4>How can I buy a domain name?</h4>
               Buying a domain is easy. Start by typing in the exact domain you want, or just keywords you’re interested in, into the domain search tool. When you find one you like, add it to your cart, and check out like you normally would.

               <h4>How do I check if a domain name is available?</h4>
               
               There are a couple ways to see if a domain you want is available. First, simply type the URL into iWAD.net’s search—we’ll tell you if the domain can be registered or not. Or, search for the domain in Who is Lookup.
               
               <h4> What can I do with my domain name?</h4>
               Domain names can be used in a number of ways. Direct visitors to your website’s home page or use complementary domains to send them to specific areas of your website ( e.g. your company.jobs for a careers page). Or, forward a custom domain to an existing social media account, like your Twitter profile or Periscope channel. With a domain name you can even set up custom email addresses like yourname@yoursite.social, which can be used to conduct business or communicate with your followers. [Learn more]
               
               I need hosting/SSL/email/other things for my website. Can I get it through iWAD.net?
               Of course! We offer everything from flexible hosting plans to SSL certificates, and have several options for custom email. And to make your life easier, we’ve made it simple to set up these services and get your website going.
               </p>
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
