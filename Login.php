<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>GameStar Login</title>
	<link rel="newer stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript">
	     var regbtn=document.getElementById("register");
	     regbtn.onclick="register.html";
	</script>

</head>
<body>
    <div class="wrapper">
		<!-- header -->
		<header class="header">
			<div class="shell">
				<div class="header-top">
					<h1 id="logo" class="leftbar"><a href="index.html">GameStar</a></h1>
					<nav id="navigation" class="leftbar">	
						<ul>
							<li class="active home"><a href="index.html">Home</a></li>
							<li><a href="category1.html">Category1</a></li>
							<li><a href="category2.html">Category2</a></li>
							<li><a href="category3.html">Category3</a></li>
							<li><a href="Login.php">Login/Register</a></li>							
						</ul>

					</nav>
					<div class="wrap rounded">
                                            <input type="text" id="searchbar" class="leftbar rounded searchfont" value="Search for Games" onfocus="this.value='';"/>
                                            <button class="gobar leftbar rounded"><div></div></button>
                    </div>
				</div>
			</div>
		</header>

    </div>
    <br>

    <div class="premiddle">
    <div class="leftcolom leftbar">

    </div>


    
        <div class="rightcolom rightbar">
        
        <br>
        <div class="login">
    	    <br>
    	    <h2>Sign in to your account</h2><br>
    	    <form method="get" action="project/login.php">
    		<label for="username"><strong>UserEmail:</strong></label>
    		<input type="text" value="user email"  name="username" onfocus="this.value='';" onblur="if(this.value==''){this.value='user email';}"/>
    		<label for="userpassword"><strong>Password:</strong></label>
    		<input type="password" value='' name="userpassword" onfocus="this.value='';" onblur="if(this.value==''){this.value='';}"/>
    	    
    	    <div class="forget rightbar">
    	        <a href="#">forget your password?</a>
    	    </div>
    	        <br>
    	    <div class="useraction">
    	         <div class="leftbar">
    		    <input type="submit" value="Log in">
    	    </div>
			</form>
			</div>
    	    <div class="rightbar">
    		    <a href="register.php"><button id="register"><span>Register</span></button></a>
    	    </div>
			
    	</div>
    </div>
</div>



    <br>
    </div>
    <div class="middle">


    </div>


    <div id="footer">
			<!-- shell -->
			<div class="shell">
				<!-- footer-cols -->
				<div class="footer-cols">
					<div class="col">
						<h2>SERVICES</h2>
						<ul>
							<li><a href="#"><span>Delivery</span></a></li>
							<li><a href="#"><span>Worontory</span></a></li>
							<li><a href="#"><span>International Services </span></a></li>
						</ul>
					</div>

					<div class="col">
						<h2>PARTNERS</h2>
						<ul>
							<li><a href="#"><span>Alibaba</span></a></li>
							<li><a href="#"><span>Paypal</span></a></li>
							<li><a href="#"><span>AMAZON </span></a></li>
						</ul>
					</div>

					<div class="col">
						<h2>SOCIAL</h2>
						<ul>
							<li><a href="#"><span>Blog</span></a></li>
							<li><a href="#"><span>Facebook</span></a></li>
							<li><a href="#"><span>Youtube </span></a></li>
						</ul>
					</div>

					<div class="col">
						<h2>CONTACT us</h2>

						<p>Email: <a href="#">info@gamestar.com</a></p>
						<p>Phone: 84649347</p>
						<p>Address: NTU EEE </p>
					</div>
					
				</div>
				<!-- end of footer-cols -->
				<div class="footer-bottom">
					
					<p class="copy">Copyright &copy; 2015<span>|</span>Design by: <a href="http://chocotemplates.com" target="_blank">www.GameStar.com</a></p>
					
				</div>
			</div>
			<!-- end of shell -->
</div>
		<!-- footer -->
</body>


</html>