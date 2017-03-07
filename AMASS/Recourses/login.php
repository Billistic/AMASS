<?php 
session_start();
require 'vendor/autoload.php';
$username = '';
$password='';

$username=(isset($_POST['sign_in_uname']) ? $_POST['sign_in_uname'] : null);
$password=(isset($_POST['sign_in_pwd']) ? $_POST['sign_in_pwd'] : null);

$firebase = Firebase::fromServiceAccount('google-service-account.json');
$database = $firebase->getDatabase();

$snap = $database->getReference('data/users')->getChildKeys();
	
foreach($snap as $x)
{
  $tempSnap = $database->getReference('data/users/'.$x);
  $user = $tempSnap -> getChild('Username') -> getValue();
  
  if($user!=$username){
	echo '<br> leaving';
  }else{
		
	  $pwd = $tempSnap -> getChild('Password') -> getValue();
	  echo 'Password given: '.$password.'<br>';
	  echo 'Ours: '.$pwd;
	  if($pwd == $password){
		echo "<br>usernames are the same<br>";
		$fname = $tempSnap -> getChild('First Name') -> getValue();
		
		$_SESSION['uid'] = ''.$x;
		$_SESSION['name']= ''.$fname;
		
		$URL='cars.php?'.SID; 
		header ("Location: $URL");
	  }else{
		$URL="login.html"; 
		header ("Location: $URL"); 
	  }
	  break;
	}
}

?>