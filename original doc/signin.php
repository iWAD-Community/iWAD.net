<!DOCTYPE html>
<html>
<head>
	<!-- Website icon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/iwad logo icon 1.png">
        <!-- Website icon -->
	<title>iWAD Login Form</title>
	<link rel="stylesheet" type="text/css" href="assets/css/signin.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

	<img class="wave" src="assets/img/wave.png">
	<div class="container">
		<div class="img">
		<a href="/index.php"><img src="assets/img/iwad logo 5.png">  </a>
		</div>
		<div class="login-content">
			<form action="includes/login.inc.php" method="post">
				<img src="assets/img/iwad logo icon 3.png">
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" name="mailuid" class="input">
           		   </div>
           		</div>
           		
				 <div class="input-div pass">
					<div class="i"> 
						 <i class="fas fa-lock"></i>
					</div>
					<div class="div">
						 <h5>Password</h5>
						 <input type="password" name="pwd" class="input">
				 </div>
				 
			  </div>
			
				<a href="signup.php">Sign Up?</a>
				
            
				<input type="submit" name="login-submit" class="btn" value="Sign in">
			
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/signin.js"></script>
</body>
</html>
