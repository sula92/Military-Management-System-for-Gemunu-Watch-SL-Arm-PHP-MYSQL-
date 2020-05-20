<?php
$rnum=$_GET["spou"];
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
$sql = "SELECT * FROM absent_spouse WHERE (Regiment_No LIKE '$rnum%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    echo "<div><table class=\"w3-table-bordered w3-small\"><tr><th>File No</th><th>Regiment No</th><th>Rank & Name</th><th>Unit</th><th>Which Marriage</th><th>Spouses NIC</th><th>Spouses_Full Name</th><th>Marriage Status</th><th>Date of Marriage</th><th>Compensated/Not</th><th>Do the Spouse Recieve the Monthly Sallery</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$regi=$row["Regiment_No"];
		
        echo "<tr><td>".$row["File_No"]."</td><td><a href=\"http://localhost/gw/absent/all/select_allper.php?ran=$regi\">".$row["Regiment_No"]."</td><td>".$row["Rank"]." ".$row["Name(Army_Form)"]."</td><td>".$row["Current/Last_Unit"]."</td><td>".$row["Which_Marriage_of_the_Soldier"]."</td><td>".$row["NIC_No"]."</td><td>".$row["Spouses_Full_Name"]."</td><td>".$row["Marriage_Status"]."</td><td>".$row["Date_of_Marriage"]."</td><td>".$row["Has_the_Soldier_Got_Any_Compensation_From_SL_Army"]."</td><td>".$row["Do_You_Recieve_the_Soldiers_Monthly_Salary"]."</td></tr></div>";
		
		
	}
    echo "</table>";
}
 else {
    echo "0 results";
}


?> 