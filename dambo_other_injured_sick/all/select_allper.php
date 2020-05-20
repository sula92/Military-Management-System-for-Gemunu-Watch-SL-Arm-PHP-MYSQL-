<html>
<head>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="w3.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

</head>

<body>
<div class="container">
<?php

$counter=1;

$ran=$_GET["ran"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


echo "<div class=\"container\">";

echo "<center><h2>SOLDIER'S DETAILS</center></h2>";

mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM dambo_other_injured_sick WHERE (Regiment_No LIKE '$ran%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<div class=\"table-responsive\">";
    echo "<table class=\"table table-bordered w3-small\"><thead><tr class=\"w3-red\"><th>Serial_No</th><th>File No</th><th>Regiment No</th><th>Rank & Name</th><th>Unit</th><th>Force</th><th>NIC</th><th>Full Name</th><th>Civil Status</th><th>Date of Incident</th><th>Place of Incident</th><th>Operational/ Non Operational Areas</th><th>Attributed/ Not Attributed to Military Service</th><th>Date of Medical Board Out</th><th>Next of Kin</th></th><th>Home Address</th><th>City</th><th>Province</th><th>Contact(Home)</th><th>Contact(Mob)</th><th>Monthly Sallery</th><th>Compensated/Not</th></tr></thead>";
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$regi=$row["Regiment_No"];
		
        echo "<tr class=\"w3-hover-green\"><td>$counter</td><td>".$row["File_No"]."</td><td><a href=\"dambo_other_injured_sick.php?reg=$regi\">".$row["Regiment_No"]."</td><td>".$row["Rank"]." ".$row["Name(Army_Form)"]."</td><td>".$row["Current/Last_Unit"]."</td><td>".$row["Force_"]."</td><td>".$row["NIC_No"]."</td><td>".$row["Full_Name"]."</td><td>".$row["Civil_Status"]."</td><td>".$row["Date_of_Incident"]."</td><td>".$row["Area_that_Incident_Occurred"]."</td><td>".$row["Operational/Non_Operational_Areas"]."</td><td>".$row["Attributed/Not_Attributed_to_Military_Service"]."</td><td>".$row["Date_of_Medical_Board_Out"]."</td><td>".$row["Next_of_Kin"]."</td><td>".$row["Home_Address"]."</td><td>".$row["City"]."</td><td>".$row["Province"]."</td><td>".$row["Home_Phone"]."</td><td>".$row["Mobile"]."</td><td>".$row["Do_You_Recieve_the_Soldiers_Monthly_Salary"]."</td><td>".$row["Has_the_Soldier_Got_Any_Compensation_From_SL_Army"]."</td></tr>";
		
		$counter=$counter+1;
	}
    echo "</table>";
	echo "</div>";
}
 else {
    echo "0 results";
}

echo "</div>";

echo "<div class=\"container\">";		

echo "<center><h3>SPOUSE'S DETAILS</h3></center>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

// Create connection

$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM dambo_other_injured_sick_spouse WHERE (Regiment_No LIKE '$ran%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<div class=\"table-responsive\">";
    echo "<table class=\"table table-bordered w3-small\"><thread><tr class=\"w3-red\"><th>Serial No</th><th>File No</th><th>Regiment No</th><th>Rank & Name</th><th>Unit</th><th>Which Marriage</th><th>Spouses NIC</th><th>Spouses_Full Name</th><th>Marriage Status</th><th>Date of Marriage</th><th>Home Address</th><th>District</th><th>Province</th><th>Contact(Home)</th><th>Contact(Mob)</th><th>Compensated/Not</th><th>Do the Spouse Recieve the Monthly Sallery</th></tr></thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
		$regi=$row["NIC_No"];
		
        echo "<tr class=\"w3-hover-green\"><td>$counter</td><td>".$row["File_No"]."</td><td><a href=\"dambo_other_injured_sick_spouse.php?reg=$regi\">".$row["Regiment_No"]."</td><td>".$row["Rank"]." ".$row["Name(Army_Form)"]."</td><td>".$row["Current/Last_Unit"]."</td><td>".$row["Which_Marriage_of_the_Soldier"]."</td><td>".$row["NIC_No"]."</td><td><a href=\"dambo_other_injured_sick 
_spouse.php?reg=$regi\">".$row["Spouses_Full_Name"]."</td><td>".$row["Marriage_Status"]."</td><td>".$row["Date_of_Marriage"]."</td><td>".$row["Home_Address"]."</td><td>".$row["District"]."</td><td>".$row["Province"]."</td><td>".$row["Home_Phone"]."</td><td>".$row["Mobile"]."</td><td>".$row["Has_the_Soldier_Got_Any_Compensation_From_SL_Army"]."</td><td>".$row["Do_You_Recieve_the_Soldiers_Monthly_Salary"]."</td></tr>";
		
		$counter=$counter+1;
	}
    echo "</table>";
	echo "</div>";
}
 else {
    echo "0 results";
}
echo "</div>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

echo "<div class=\"container\">";	

echo "<center><h3>CHILDREN DETAILS</h3></center>";

// Create connection

$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM dambo_other_injured_sick_children WHERE (Regiment_No LIKE '$ran%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<div class=\"table-responsive\">";
    echo "<table class=\"table table-bordered w3-small\"><tr class=\"w3-red\"><th>Serial No</th><th>File No</th><th>Regiment No</th><th>Rank & Name</th><th>Unit</th><th>NIC_No</th><th>Relationship to the Soldier</th><th>Childs_Full_Name</th><th>Life Status</th><th>Home Address</th><th>District</th><th>Province</th><th>Contact(Home)</th><th>Contact(Mob)</th><th>Compensated/Not</th><th>Do You Recieve the Monthly Sallery</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $regi=$row["NIC_No"];
		
        echo "<tr class=\"w3-hover-green\"><td>$counter</td><td>".$row["File_No"]."</td><td><a href=\"dambo_other_injured_sick_children.php?reg=$regi\">".$row["Regiment_No"]."</td><td>".$row["Rank"]." ".$row["Name(Army_Form)"]."</td><td>".$row["Current/Last_Unit"]."</td><td>".$row["NIC_No"]."</td><td>".$row["Relationship_to_the_Soldier"]."</td><td>".$row["Childs_Full_Name"]."</td><td>".$row["Life_Status"]."</td><td>".$row["Home_Address"]."</td><td>".$row["District"]."</td><td>".$row["Province"]."</td><td>".$row["Home_Phone"]."</td><td>".$row["Mobile"]."</td><td>".$row["Has_the_Soldier_Got_Any_Compensation_From_SL_Army"]."</td><td>".$row["Do_You_Recieve_the_Soldiers_Monthly_Salary"]."</td></tr>";
		
		$counter=$counter+1;
	}
    echo "</table>";
	echo "</div>";
}
 else {
    echo "0 results";
}

echo "</div>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

echo "<div class=\"container\">";	

echo "<center><h3>PARENT'S DETAILS</h3></center>";

// Create connection

$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM dambo_other_injured_sick_parents  WHERE (Regiment_No LIKE '$ran%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<div class=\"table-responsive\"><table class=\"table table-bordered w3-small\"><tr class=\"w3-red\"><th>Serial No</th><th>File No</th><th>Regiment No</th><th>Rank & Name</th><th>Unit</th><th>NIC_No</th><th>Relationship</th><th>Parent_Full_Name</th><th>Life Status</th><th>Home Address</th><th>District</th><th>Province</th><th>Contact(Home)</th><th>Contact(Mob)</th><th>Compensated/Not</th><th>Do the Spouse Recieve the Monthly Sallery</th></tr>";
	 $counter=1;
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $regi=$row["NIC_No"];
		
        echo "<tr class=\"w3-hover-green\"><td>$counter</td><td>".$row["File_No"]."</td><td><a href=\"dambo_other_injured_sick_parents.php?reg=$regi\">".$row["Regiment_No"]."</td><td>".$row["Rank"]." ".$row["Name(Army_Form)"]."</td><td>".$row["Current/Last_Unit"]."</td><td>".$row["NIC_No"]."</td><td>".$row["Relationship"]."</td><td>".$row["Parent_Full_Name"]."</td><td>".$row["Life_Status"]."</td><td>".$row["Home_Address"]."</td><td>".$row["District"]."</td><td>".$row["Province"]."</td><td>".$row["Home_Phone"]."</td><td>".$row["Mobile"]."</td><td>".$row["Has_the_Soldier_Got_Any_Compensation_From_SL_Army"]."</td><td>".$row["Do_You_Recieve_the_Soldiers_Monthly_Salary"]."</td></tr>";
		
		$counter=$counter+1;
	}
    echo "</table>";
	echo "</div>";
}
 else {
    echo "0 results";
}
echo "</div>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

echo "<div class=\"container\">";

echo "<center><h3>BROTHER'S & SISTER'S DETAILS</h3></center>";

// Create connection

$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM dambo_other_injured_sick_brosis WHERE (Regiment_No LIKE '$ran%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<div class=\"table-responsive\"><table class=\"table table-bordered w3-small\"><tr class=\"w3-red\"><th>Serial No</th><th>File No</th><th>Regiment No</th><th>Rank & Name</th><th>Unit</th><th>Brother/Sister's NIC_No</th><th>Relationship</th><th>Brother/Sister's_Full_Name</th><th>Life Status</th><th>Civil Status</th><th>Home Address</th><th>District</th><th>Province</th><th>Contact(Home)</th><th>Contact(Mob)</th><th>Compensated/Not</th><th>Do You Recieve the Soldier's Monthly Sallery</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$regi=$row["NIC_No"];
		
       echo "<tr class=\"w3-hover-green\"><td>$counter</td><td>".$row["File_No"]."</td><td><a href=\"dambo_other_injured_sick_brosis.php?reg=$regi\">".$row["Regiment_No"]."</td><td>".$row["Rank"]." ".$row["Name(Army_Form)"]."</td><td>".$row["Current/Last_Unit"]."</td><td>".$row["NIC_No"]."</td><td>".$row["Relationship"]."</td><td>".$row["Brother/Sister_Full_Name"]."</td><td>".$row["Life_Status"]."</td><td>".$row["Civil_Status"]."</td><td>".$row["Home_Address"]."</td><td>".$row["District"]."</td><td>".$row["Province"]."</td><td>".$row["Home_Phone"]."</td><td>".$row["Mobile"]."</td><td>".$row["Has_the_Soldier_Got_Any_Compensation_From_SL_Army"]."</td><td>".$row["Do_You_Recieve_the_Soldiers_Monthly_Salary"]."</td></tr>";
	   
	  $counter=$counter+1;
	}
    echo "</table>";
	echo "</div>";
}
 else {
    echo "0 results";
}
echo "</div>";

$conn->close();

		
	




?>

</body>

</html> 