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
		<title>AMASS | Services</title>
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
						<li><a href="about.php">About</a></li>
						<li class="current"><a href="services.php">Track</a></li>
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
		<!--AIzaSyCoEssCulS3T6zZfbgBONYk7jJwJzgoz40 -->
		<section id="main">
			<div id="map_canvas"></div>
			<script>
					function initMap() {
					var cork = {lat:  51.885581, lng:-8.533957};
					var map = new google.maps.Map(document.getElementById('map_canvas'), {
						zoom: 13,
						scrollwheel: false,
						center: cork,
						styles:[
							{elementType: 'geometry', stylers: [{color: '#242f3e'}]},
							{elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
							{elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
							{featureType: 'administrative.locality', elementType: 'labels.text.fill',  stylers: [{color: '#d59563'}]},
							{featureType: 'poi',elementType: 'labels.text.fill',stylers: [{color: '#d59563'}]},
							{featureType: 'poi.park',elementType: 'geometry',stylers: [{color: '#263c3f'}]},
							{featureType: 'poi.park',elementType: 'labels.text.fill',stylers: [{color: '#6b9a76'}]},
							{featureType: 'road',elementType: 'geometry',stylers: [{color: '#38414e'}]},
							{featureType: 'road',elementType: 'geometry.stroke',stylers: [{color: '#212a37'}]},
							{featureType: 'road',elementType: 'labels.text.fill',stylers: [{color: '#9ca5b3'}]},
							{featureType: 'road.highway',elementType: 'geometry',stylers: [{color: '#746855'}]},
							{featureType: 'road.highway',elementType: 'geometry.stroke',stylers: [{color: '#1f2835'}]},
							{featureType: 'road.highway',elementType: 'labels.text.fill',stylers: [{color: '#f3d19c'}]},
							{featureType: 'transit',elementType: 'geometry',stylers: [{color: '#2f3948'}]},
							{featureType: 'transit.station',elementType: 'labels.text.fill',stylers: [{color: '#d59563'}]},
							{featureType: 'water',elementType: 'geometry',stylers: [{color: '#17263c'}]},
							{featureType: 'water',elementType: 'labels.text.fill',stylers: [{color: '#515c6d'}]},
							{featureType: 'water',elementType: 'labels.text.stroke',stylers: [{color: '#17263c'}]}
						]
					});
					var marker = new google.maps.Marker({
						position: cork,
						map: map
					});
			  }
			</script>
			<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoEssCulS3T6zZfbgBONYk7jJwJzgoz40&callback=initMap">
			</script>
		</section>
		
		<footer>
			<p>Amass Security, Copyright &copy; 2017</p>
		</footer>
		
	</body>
</html>