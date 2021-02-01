<!DOCTYPE html>
<html>
<head>
	<title>iWAD Login Form</title>
	<link rel="stylesheet" type="text/css" href="assets/css/signin.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="assets/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="assets/img/iwad logo 5.png">
		</div>
		<div class="login-content">
			<form action="includes/login.inc.php" method="post">
				<img src="img/avatar.png">
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
