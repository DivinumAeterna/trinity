

<html>
 <head>
   <!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Trinity - Deconstructor</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/login.css">
			<link rel="stylesheet" href="css/table.css">
 </head>
 
 <body>
	<header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.php">Home</a></li>
			          <li class="menu-has-children"><a href="">Account</a>
			            <ul>
		            	  <li><a href="login.php">Log in</a></li>
				          <li><a href="logout.php">Log out</a></li>
			            </ul>
			          </li>		
			          <li class="menu-has-children"><a href="">Pages</a>
			            <ul>
		            	  <li><a href="userinfo.php">User Info</a></li>
				          <li><a href="calculator.php">Calculator</a></li>
						  <li><a href="deconstructor.php">Deconstructor</a></li>
			            </ul>
			          </li>						  
			          <li><a href="../phpmyadmin">phpMyAdmin</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
		  
		<div class="login-page">
		    <div class="form2">
			<form method="post" action="">
			<input type="text" name="url" placeholder="www.google.com"></input>
			<input name="deconstruct" type="submit" value="Deconstruct"></input>
			</form>
			<div style="overflow-x:auto;">
			<?php
				function deconstruct(){
				$url = $_POST['url'];
				$scheme = parse_url($url, PHP_URL_SCHEME);
				$host = parse_url($url, PHP_URL_HOST);
				$port = parse_url($url, PHP_URL_PORT);
				$user = parse_url($url, PHP_URL_USER);
				$pass = parse_url($url, PHP_URL_PASS);
				$path = parse_url($url, PHP_URL_PATH);
				$query = parse_url($url, PHP_URL_QUERY);
				$fragment = parse_url($url, PHP_URL_FRAGMENT);
				echo '<table class="rwd-table">';
				echo '<tr><th>Scheme</th><th>Host</th><th>Port</th><th>User</th><th>Pass<th>Path</th><th>Query</th><th>Fragment</th></tr>';
				echo '<tr><td>',$scheme,'</td><td>',$host,'</td><td>',$port,'</td><td>',$user,'</td><td>',$pass,'</td><td>',$path,'</td><td>',$query,'</td><td>',$fragment,'</td></tr>';
				echo '</table>';
				}
	
				if(isset($_POST['deconstruct']))
				{
					deconstruct();
				} 
			?>
			</div>
			</div>
		</div>
		
		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
            <script src="js/isotope.pkgd.min.js"></script>			
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/simple-skillbar.js"></script>							
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>