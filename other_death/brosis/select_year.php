<?php

$counter=1;

$yr=$_GET["yr"];
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

echo "<center><h2>ALL OTHER DEATH IN $yr</center></h2>";
mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM other_death_brosis WHERE (Date_of_Incident LIKE '$yr%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div><table><tr><th>Serial Number</th><th>File No</th><th>Regiment No</th><th>Rank & Name</th><th>Unit</th><th>Brother/Sister's NIC_No</th><th>Relationship</th><th>Brother/Sister's_Full_Name</th><th>Life Status</th><th>Civil Status</th><th>Home Address</th><th>District</th><th>Province</th><th>Contact(Home)</th><th>Contact(Mob)</th><th>Compensated/Not</th><th>Do You Recieve the Soldier's Monthly Sallery</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $reg=$row['Regiment_No'];
		
        echo "<tr><td>".$counter."</td><td>".$row["File_No"]."</td><td><a href=\"http://localhost/gw/other_death/all/select_allper.php?ran=$reg\">".$row["Regiment_No"]."</td><td>".$row["Rank"]." ".$row["Name(Army_Form)"]."</td><td>".$row["Current/Last_Unit"]."</td><td>".$row["NIC_No"]."</td><td>".$row["Relationship"]."</td><td>".$row["Brother/Sister_Full_Name"]."</td><td>".$row["Life_Status"]."</td><td>".$row["Civil_Status"]."</td><td>".$row["Home_Address"]."</td><td>".$row["District"]."</td><td>".$row["Province"]."</td><td>".$row["Home_Phone"]."</td><td>".$row["Mobile"]."</td><td>".$row["Has_the_Soldier_Got_Any_Compensation_From_SL_Army"]."</td><td>".$row["Do_You_Recieve_the_Soldiers_Monthly_Salary"]."</td></tr></div>";
		
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
	
		$qry="SELECT count(*) as c FROM other_death_brosis WHERE (`Date_of_Incident` LIKE '$yr%')";

		
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
		

echo "<h3>Total  Count of OTHER DEATH BROTHERS & SISTERS In $yr is: $inc</h3>"




?>