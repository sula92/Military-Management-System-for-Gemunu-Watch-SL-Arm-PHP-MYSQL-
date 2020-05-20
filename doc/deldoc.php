<?php

$ran=$_GET["sn"];
$path="docs/$ran";



unlink($path);
  





$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

		//Create connection
		$conn =mysqli_connect($servername, $username, $password,$dbname);
		//Check connection
		if(!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}
		//Create the Query(Insert Record)
		$sql = "DELETE FROM documents WHERE Document='$ran'";
		//Read the Command
		if(mysqli_query($conn,$sql)){
			//Display Message
    		echo '<script language="javascript">';
            echo 'alert("RECORD DELETED SUCCESSFULLY!")';
            echo '</script>';
			
		}
		else{
			//Display Error Message
    		echo "Error: " . $sql . "<br><br><br>" . mysqli_error($conn);
		}
		header("location:Viewandupdate.php");
		//Close the Connection
		mysqli_close($conn);
	



?>