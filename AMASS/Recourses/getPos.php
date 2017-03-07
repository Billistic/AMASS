<?php 
	session_start(); 
	require 'vendor/autoload.php';

	$firebase = Firebase::fromServiceAccount('google-service-account.json');
	$database = $firebase->getDatabase();
	$uid = '';
	$uid = (isset($_SESSION['uid']) ? $_SESSION['uid'] : null);
	$reference = $database->getReference('data/users/'.$uid.'/Vehicles');
	
	if($reference!=null){
		$vehicleStamp = null;
		try {
			$vehicleStamp = $reference->getChildKeys();
			//$reference = $reference->getSnapshot();
		} catch (Exception $e) {}
		if($vehicleStamp!=null){
			echo '<markers>';
			foreach($vehicleStamp as $x){
				$vehicleRef = $reference->getChild($x);
				echo '<marker ';
				echo 'reg="' . $vehicleRef->getChild("Registration")->getValue() . '" ';
				echo 'lat="' . $vehicleRef->getChild("Latitude")->getValue() . '" ';
				echo 'lng="' . $vehicleRef->getChild("Longitude")->getValue() . '" ';
				echo '>';
				echo '</marker>';
			}
			echo '</markers>';
		}
	}
?>