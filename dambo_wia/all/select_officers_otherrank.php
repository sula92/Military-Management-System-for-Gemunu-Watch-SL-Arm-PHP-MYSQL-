<?php
$yr=$_GET["yr"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$favcolor = "$yr";

switch ($favcolor) {
    case "N":
        $x= "OFFICERS";
        break;
    case "S":
        $x= "OTHERRANK";
        break;
  
}

$counter=1;

// Create connection

$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "<center><h2>ALL WIA DEATH AFTER MEDICAL BOARD OUT $x</center></h2>";
mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM dambo_wia WHERE (Regiment_No LIKE '$yr%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div><table> <tr class=\"w3-red\"><th colspan=\"9\">SOLDIER' INFORMATION</th><th colspan=\"5\">DEATH INFORMATION</th><th colspan=\"3\">WIA INFORMATION</th><th colspan=\"1\">MEDICAL BOARD OUT INFORMATION</th><th colspan=\"6\">CONTACT INFORMATION</th><th colspan=\"2\">SALLERY & COMPENSATION INFORMATION</th></tr><tr><th>Serial Number</th><th>File No</th><th>Regiment No</th><th>Rank & Name</th><th>Unit</th><th>Force</th><th>NIC</th><th>Full Name</th><th>Civil Status</th><th>Date of Death</th><th>Reason for Death</th><th>Area that Death Occured</th><th>Death Certificate Issued?</th><th>Death Certificate Number</th><th>Date of Injured</th><th>Place of Injured</th><th>Mission_Name<th>Date of Medical Board Out</th></th><th>Next of Kin</th><th>Home Address</th><th>City</th><th>Province</th><th>Contact(Home)</th><th>Contact(Mob)</th><th>Monthly Sallery</th><th>Compensated/Not</th></tr></div>";
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$reg=$row['Regiment_No'];
		
        echo "<tr><td>".$counter."</td><td>".$row["File_No"]."</td><td><a href=\"select_allper.php?ran=$reg\">".$row["Regiment_No"]."</a></td><td>".$row["Rank"]." ".$row["Name(Army_Form)"]."</td><td>".$row["Current/Last_Unit"]."</td><td>".$row["Force_"]."</td><td>".$row["NIC_No"]."</td><td>".$row["Full_Name"]."</td><td>".$row["Civil_Status"]."</td><td>".$row["Date_of_Death"]."</td><td>".$row["Reason_for_Death"]."</td><td>".$row["Area_that_Death_Occured"]."</td><td>".$row["Death_Certificate_Has_Issued"]."</td><td>".$row["Death_Certificate_Number"]."</td><td>".$row["Date_of_Incident"]."</td><td>".$row["Area_that_Incident_Occurred"]."</td><td>".$row["Mission_Name"]."</td><td>".$row["Date_of_Medical_Board_Out"]."</td><td>".$row["Next_of_Kin"]."</td><td>".$row["Home_Address"]."</td><td>".$row["City"]."</td><td>".$row["Province"]."</td><td>".$row["Home_Phone"]."</td><td>".$row["Mobile"]."</td><td>".$row["Do_You_Recieve_the_Soldiers_Monthly_Salary"]."</td><td>".$row["Has_the_Soldier_Got_Any_Compensation_From_SL_Army"]."</td></tr>";
		
		
		$counter=$counter+1;
	}
    echo "</table>";
}
 else {
    echo "0 results";
}
$yr=$_GET["yr"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM dambo_wia WHERE (Regiment_No LIKE '$yr%')";

		
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
		

echo "<h3>Total Count of WIA DEATH AFTER MEDICAL BOARD OUT $x is: $inc</h3>"




?>