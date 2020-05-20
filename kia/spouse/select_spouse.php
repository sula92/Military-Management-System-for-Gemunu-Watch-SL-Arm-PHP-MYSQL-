<html>

<head>

  
</head>


<body>



<?php
$rnum=$_GET["spou"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

		
echo "<div class=\"w3-container\">";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM kia_spouse WHERE (Regiment_No LIKE '$rnum%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "<div class=\"table-responsive\">";
    echo "<table class=\"table table-bordered w3-small\"><thread><tr class=\"w3-red\"><th>File No</th><th>Regiment No</th><th>Rank & Name</th><th>Unit</th><th>Which Marriage</th><th>Spouses NIC</th><th>Spouses_Full Name</th><th>Marriage Status</th><th>Compensated/Not</th><th>Do the Spouse Recieve the Monthly Sallery</th></tr></thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr class=\"w3-hover-yellow\"><td>".$row["File_No"]."</td><td><a href=\"http://localhost/gw/kia/all/select_allper.php\">".$row["Regiment_No"]."</a></td><td>".$row["Rank"]." ".$row["Name(Army_Form)"]."</td><td>".$row["Current/Last_Unit"]."</td><td>".$row["Which_Marriage_of_the_Soldier"]."</td><td>".$row["NIC_No"]."</td><td>".$row["Spouses_Full_Name"]."</td><td>".$row["Marriage_Status"]."</td><td>".$row["Has_the_Soldier_Got_Any_Compensation_From_SL_Army"]."</td><td>".$row["Do_You_Recieve_the_Soldiers_Monthly_Salary"]."</td></tr>";
	}
    echo "</table></center>";
	echo "</div>";
}
 else {
    echo "0 results";
}

echo "</div>";

?> 
</body>
</html>