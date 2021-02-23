<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="loginwallet2/css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="loginwallet2/img/homepic.png">
	
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="loginwallet2/js/loginvalidation.js"></script>
	<script src="UniversalAssets/js/goBack.js"></script>
	
</head>

<body>
	<div class="container">
		<div class="img">
			<img src="loginwallet2/img/bg.svg">
		</div>
		<div class="login-content">
			<div onclick="goBack()" class="backarrow">
				<i class="fas fa-angle-left"></i>
				<h1>Back</h1>
			</div>
			
			<!-- <form name="loginform" onsubmit="return validateForm();" action="http://localhost:8080/P2PTrading/UserpagewithServer.php" method="post"> -->
			
			<form name="loginform" onsubmit="return validateForm();" action="http://localhost:8080/P2PTrading/UserpagewithServer.php" method="post"> 
			
				<!-- action="userpage.html" -->
				<img src="loginwallet2/img/avatar.png">
				<h2 style="font-size:30px">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Wallet Profile</h5>
           		   		<input style="color:white; background-color:transparent;"type="text" class="input" name="usr">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input style="color:white;" type="password" class="input" name="pword">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="loginbtn" name="submit" value="Login" >
				
            </form>
        </div>
    </div>
    <script type="text/javascript" src="loginwallet2/js/main.js"></script>
	
	<video autoplay muted loop id="userloginvid"><source src="loginwallet2/vid/userloginpagevid.mp4" type="video/mp4">Your browser does not support HTML5 video.
	</video>

</body>
</html>