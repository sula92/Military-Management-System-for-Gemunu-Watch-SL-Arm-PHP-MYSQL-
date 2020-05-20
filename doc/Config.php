<?php




	//Create Variable & Assigning Values
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="rft_gw";
	
		
		//Create connection
		$conn = mysqli_connect($servername, $username, $password,$dbname);

             if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

?>