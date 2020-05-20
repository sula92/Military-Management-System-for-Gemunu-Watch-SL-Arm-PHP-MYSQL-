<?php
	//Start the session
	session_start();
	//Set the $_SESSION to an empty array
	$_SESSION=array();
	//Destroy the session
	session_destroy();
	//Redirect to the login page
	header('Location:login.php');
?>