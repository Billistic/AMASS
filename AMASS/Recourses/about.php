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
		<title>AMASS | About</title>
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
						<li><a href="index.php">Home</a></li>
						<li class="current"><a href="about.php">About</a></li>
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
		
		<section id="track">
			<div class="container">
				<h1>Track by account</h1>
				<form action="process.php">
					<input type="email" placeholder="Enter Email..."> 
					<button type="submit" class="track_button">Track</button>
				</form>
			</div>
		</section>
		
		<section id="main">
			<div class="container">
				<article id="main-col">
					<h1 class="title">About us</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue urna ante, nec aliquet odio scelerisque a. Vivamus molestie porta nisl, et hendrerit orci. Integer bibendum, neque a semper gravida, nibh felis auctor enim, eu fermentum felis purus a nunc. Donec ut libero nisi.
					</p>
					<p>Donec condimentum consectetur purus. Morbi sed efficitur ligula. Pellentesque mattis quam et urna auctor efficitur. Suspendisse vehicula justo nec pharetra accumsan. Ut id massa feugiat, consequat lectus id, rhoncus libero. Nunc ornare ac nisl eu hendrerit. Sed a diam porta libero imperdiet interdum in non ipsum. Aenean sit amet risus vitae justo viverra aliquet et et tellus. Mauris rhoncus mauris sed lorem fermentum aliquet.
					</p>
				</article>
				
				<aside id="side">
					<div class="dark">
						<h3 id="spec">The project Spec</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue urna ante, nec aliquet odio scelerisque a. Vivamus molestie porta nisl, et hendrerit orci. Integer bibendum, neque a semper gravida, nibh felis auctor enim, eu fermentum felis purus a nunc. Donec ut libero nisi.
						</p>
					</div>
				</aside>
			</div>
		</section>
		
		<footer>
			<p>Amass Security, Copyright &copy; 2017</p>
		</footer>
		
	</body>
</html>