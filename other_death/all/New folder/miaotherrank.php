<?php

if(isset($_POST['convert'])){
$fnm=$_POST["fnm"];
header("content-type: application/vnd.ms-word");;
$filename="$fnm.doc";
header("content-disposition: attachment; Filename=".$filename);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
table {
  border-collapse: collapse;
  width: 100%;
}
tr:hover{
	background-color:yellow;
}
th, td {
  text-align: left;
  padding: 8px;
  border-bottom: 1px solid #ddd;
  border: 1px solid #ddd;
}
 input[type=submit],input[type=button]:hover {
       background-color: #45a049;
    }
	input[type=submit],input[type=button] {
  background-color: #4CAF50;
  font-weight:300;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
  width:200px;
}


th {
  background-color: #4CAF50;
  color: white;
}

</style>
</head>
<body>
<h1 align="center">ALL MIA OTHER RANKS</h1>
<?php
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

$sql = "SELECT * FROM mia WHERE (Regiment_No LIKE 's%') ORDER BY Rank_Seniority_Order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>File No</th><th>Regiment No</th><th>Rank & Name</th><th>Unit</th><th>Force</th><th>NIC</th><th>Full Name</th><th>Civil Status</th><th>Date of Incident</th><th>Place of Incident</th><th>Mission_Name</th><th>Home Address</th><th>City</th><th>Province</th><th>Contact(Home)</th><th>Contact(Mob)</th><th>Compensated/Not</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["File_No"]."</td><td>".$row["Regiment_No"]."</td><td>".$row["Rank"]." ".$row["Name(Army_Form)"]."</td><td>".$row["Current/Last_Unit"]."</td><td>".$row["Force_"]."</td><td>".$row["NIC_No"]."</td><td>".$row["Full_Name"]."</td><td>".$row["Civil_Status"]."</td><td>".$row["Date_of_Incident"]."</td><td>".$row["Area_that_Incident_Occurred"]."</td><td>".$row["Mission_Name"]."</td><td>".$row["Home_Address"]."</td><td>".$row["City"]."</td><td>".$row["Province"]."</td><td>".$row["Home_Phone"]."</td><td>".$row["Mobile"]."</td><td>".$row["Has_the_Soldier_Got_Any_Compensation_From_SL_Army"]."</td></tr>";
	}
    echo "</table>";
}
 else {
    echo "0 results";
}

$conn->close();


$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM mia WHERE (Regiment_No LIKE 's%')";

		
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
		


?> 

<h3>Total MIA Other Rank Count is:<?php echo $inc?></h3>
<form method="post" action="#">
<p><input type="submit" name="convert" value="Get Word File" >&nbsp;<input type="text" name="fnm" placeholder="Name of the File" style="width:30%; height:40px"></p>
</form>
<div style="width:100%; height:50px"></div>

</body>
</html>
