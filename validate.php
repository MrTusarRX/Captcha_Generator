<?php 
	session_start();
	if($_SESSION['secure'] == $_POST['user_input']){
	  echo "captcha validated.";
	} 
	else{
	  echo "Oops! The captcha you entered is incorrect.";
	}
?>
