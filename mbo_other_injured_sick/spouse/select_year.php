<?php
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

echo "<center><h2>ALL OTHER INJURED/SICK MEDICAL BOARD OUT IN $yr</center></h2>";
mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM mbo_other_injured_sick_spouse WHERE (Date_of_Medical_Board_Out LIKE '$yr%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

$counter=1;

if ($result->num_rows > 0) {
    echo "<div><table><tr><th>Serial No</th><th>File No</th><th>Regiment No</th><th>Rank & Name</th><th>Unit</th><th>Which Marriage</th><th>Spouses NIC</th><th>Spouses_Full Name</th><th>Marriage Status</th><th>Date of Marriage</th><th>Home Address</th><th>District</th><th>Province</th><th>Contact(Home)</th><th>Contact(Mob)</th><th>Compensated/Not</th><th>Do the Spouse Recieve the Monthly Sallery</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$regi=$row["Regiment_No"];
		
        echo "<td>".$counter."</td><td>".$row["File_No"]."</td><td><a href=\"http://localhost/gw/mbo_other_injured_sick/all/select_allper.php?ran=$regi\">".$row["Regiment_No"]."</td><td>".$row["Rank"]." ".$row["Name(Army_Form)"]."</td><td>".$row["Current/Last_Unit"]."</td><td>".$row["Which_Marriage_of_the_Soldier"]."</td><td>".$row["NIC_No"]."</td><td>".$row["Spouses_Full_Name"]."</td><td>".$row["Marriage_Status"]."</td><td>".$row["Date_of_Marriage"]."</td><td>".$row["Home_Address"]."</td><td>".$row["District"]."</td><td>".$row["Province"]."</td><td>".$row["Home_Phone"]."</td><td>".$row["Mobile"]."</td><td>".$row["Has_the_Soldier_Got_Any_Compensation_From_SL_Army"]."</td><td>".$row["Do_You_Recieve_the_Soldiers_Monthly_Salary"]."</td></tr></div>";
		
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
	
		$qry="SELECT count(*) as c FROM mbo_other_injured_sick_spouse WHERE (`Date_of_Medical_Board_Out` LIKE '$yr%')";

		
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
		

echo "<h3>Total Count of OTHER INJURED/SICK MEDICAL BOARD OUT SPOUSES In $yr is: $inc</h3>"




?>