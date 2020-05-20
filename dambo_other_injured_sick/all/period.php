<?php

include('session.php');

?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="w3.css">


<meta http-equiv="content-type" content="text/html; charset=utf-8">
<style>


</style>
</head>
<body>

<div class="w3-container">
<a href="http://localhost/gw/office.php"><button class="w3-button w3-round-xxxlarge w3-blue">BACK TO OFFICE</button></a>
<a href="http://localhost/gw/dambo_other_injured_sick.php"><button class="w3-button w3-round-xxxlarge w3-blue">BACK TO DAMBO-OTHER INJURED/SICK</button></a>

<a href="period.php"><button class="w3-button w3-round-xxxlarge w3-blue">REFRESH</button></a>


</div>


<div class="container">
  <h1>ALL DEATH AFTER MEDICAL BOARD OUT OTHER INJURED/SICK LIST(DATE OF MEDICAL BOARD OUT,PERIOD WISE)</h1>
  
  <div class="container" style="height:30px"></div>
  
  <form class="form-inline" action="#" method="post">
    <div class="form-group">
      <label for="email">FROM:</label>
      <input type="date" class="form-control" id="sy" name="sy" placeholder="Enter Starting Date" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">TO:</label>
      <input type="date" class="form-control" id="yr" name="yr" placeholder="Enter End Date" name="pwd">
      <button type="submit" class="btn btn-primary" name="sub">SEARCH</button>
    </div>
    
   
    
  </form>
</div>




<?php

if(isset($_POST['sub'])){

$yr=$_POST["yr"];
$sy=$_POST["sy"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";


$counter=1;

// Create connection

$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "<center><h2>ALL DEATH AFTER MEDICAL BOARD OUT OTHER INJURED/SICK FROM $sy TO $yr</center></h2>";
mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM dambo_other_injured_sick WHERE (Date_of_Medical_Board_Out BETWEEN '$sy' AND '$yr%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "<div class=\"table-responsive\"><table class=\"table table-bordered w3-hoverable w3-small\"><tr class=\"w3-red\"><th colspan=\"9\">SOLDIER' INFORMATION</th><th colspan=\"5\">DEATH INFORMATION</th><th colspan=\"4\">INJURED/SICK INFORMATION</th><th colspan=\"1\">MEDICAL BOARD OUT INFORMATION</th><th colspan=\"6\">CONTACT INFORMATION</th><th colspan=\"2\">SALLERY & COMPENSATION INFORMATION</th></tr><tr class=\"w3-red\"><th>Serial Number</th><th>File No</th><th>Regiment No</th><th>Rank & Name</th><th>Unit</th><th>Force</th><th>NIC</th><th>Full Name</th><th>Civil Status</th><th>Date of Death</th><th>Reason for Death</th><th>Area that Death Occured</th><th>Death Certificate Issued?</th><th>Death Certificate Number</th><th>Date of Injured/Sick</th></th><th>Place of Incident</th><th>Operational/ Non Operational Areas</th><th>Attributed/ Not Attributed to Military Service</th><th>Date of Medical Board Out</th><th>Next of Kin</th></th><th>Home Address</th><th>City</th><th>Province</th><th>Contact(Home)</th><th>Contact(Mob)</th><th>Monthly Sallery</th><th>Compensated/Not</th></tr></div>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$reg=$row['Regiment_No'];
		
        echo "<tr><td>".$counter."</td><td>".$row["File_No"]."</td><td><a href=\"select_allper.php?ran=$reg\">".$row["Regiment_No"]."</a></td><td>".$row["Rank"]." ".$row["Name(Army_Form)"]."</td><td>".$row["Current/Last_Unit"]."</td><td>".$row["Force_"]."</td><td>".$row["NIC_No"]."</td><td>".$row["Full_Name"]."</td><td>".$row["Civil_Status"]."</td><td>".$row["Date_of_Death"]."</td><td>".$row["Reason_for_Death"]."</td><td>".$row["Area_that_Death_Occured"]."</td><td>".$row["Death_Certificate_Has_Issued"]."</td><td>".$row["Death_Certificate_Number"]."</td><td>".$row["Date_of_Incident"]."</td><td>".$row["Area_that_Incident_Occurred"]."</td><td>".$row["Operational/Non_Operational_Areas"]."</td><td>".$row["Attributed/Not_Attributed_to_Military_Service"]."</td><td>".$row["Date_of_Medical_Board_Out"]."</td><td>".$row["Next_of_Kin"]."</td><td>".$row["Home_Address"]."</td><td>".$row["City"]."</td><td>".$row["Province"]."</td><td>".$row["Home_Phone"]."</td><td>".$row["Mobile"]."</td><td>".$row["Do_You_Recieve_the_Soldiers_Monthly_Salary"]."</td><td>".$row["Has_the_Soldier_Got_Any_Compensation_From_SL_Army"]."</td></tr>";
		
		$counter=$counter+1;
	}
    echo "</table>";
}
 else {
    echo "0 results";
}
$yr=$_POST["yr"];
$sy=$_POST["sy"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM dambo_other_injured_sick WHERE (Date_of_Medical_Board_Out BETWEEN '$sy%' AND '$yr%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$inc=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		

echo "<h3>Total Count of DEATH AFTER-OTHER INJURED/SICK MEDICAL BOARD FROM $sy TO $yr is: $inc</h3>";

}

?>







</body>
</html>
