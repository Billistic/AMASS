<?php  
	session_start(); 
?>
<!DOCTYPE html?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="reliable car security for a safe and comfortable lifestyle">
		<meta name="keywords" content="car, security, arduino, CIT, DCOMM, Louise Walshe, Conor Twomey, Ryan Meany, Joshua Nuttall">
		<meta name="author" content="Joshua Nuttall - R00128796">
		<title>AMASS | Home</title>
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body>
		<header>
			<div class="container">
				<div id="branding">
					<h1>Amass Security</h1>
				</div>
				<nav>
					<ul>
						<li class="current"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">Track</a></li>
						<?php  
							$uid = '';
							$uid = (isset($_SESSION['uid']) ? $_SESSION['uid'] : null);
							if($uid!=null){
								echo '<li><a href="dash.php">'.$_SESSION["name"].'</a></li>';
							}else{
								echo '<li><a href="login.html">Login</a></li>';
							}
						?>
					</ul>
				</nav>
			</div>
		</header>
		
		<section id="banner">
			<div class="container">
				<H1>Automobile Management &amp; Security System</H1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</section>
		
		<section id="track">
			<div class="container">
				<h1>Track by account</h1>
				<form action="connect.php">
					<input type="email" id ="tracking_email" placeholder="Enter Email..."> 
					<button type="submit" id ="track_submit" class="track_button">Track</button>
				</form>
			</div>
		</section>
		
		<section id="Media">
			<div class="container">
				<div class="social">
					<img src="img/f.png">
					<H3>Facebook</H3>
					<p>Follow us on Facebook for any questions you may have</p>
				</div>
				<div class="social">
					<img src="img/y.png">
					<H3>Youtube</H3>
					<p>Find our current products here as well as tutorials walk-through's and demonstrations </p>
				</div>
				<div class="social">
					<img src="img/t.png">
					<H3>Twitter</H3>
					<p>Follow us on Twitter for all up to date news on our future and most recent work</p>
				</div>
			</div>
		</section>	
		
		
		<footer>
			<p>Amass Security, Copyright &copy; 2017</p>
		</footer>
		
	</body>
</html>