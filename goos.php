<?php


include('session.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT COUNT(Regiment_No) FROM kia ";
		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$inca=$row['COUNT(Regiment_No)'];
                                
			}			
		}
		else{
			echo"o Results";
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
	
		$qry="SELECT COUNT(Regiment_No) FROM mia ";
		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$incb=$row['COUNT(Regiment_No)'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT COUNT(Regiment_No) FROM other_death ";
		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$incc=$row['COUNT(Regiment_No)'];
                                
			}			
		}
		else{
			echo"o Results";
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
	
		$qry="SELECT COUNT(Regiment_No) FROM wia";
		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$incd=$row['COUNT(Regiment_No)'];
                                
			}			
		}
		else{
			echo"o Results";
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
	
		$qry="SELECT COUNT(Regiment_No) FROM other_injured_sick";
		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$ince=$row['COUNT(Regiment_No)'];
                                
			}			
		}
		else{
			echo"o Results";
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
	
		$qry="SELECT COUNT(Regiment_No) FROM mbo_wia";
		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$incf=$row['COUNT(Regiment_No)'];
                                
			}			
		}
		else{
			echo"o Results";
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
	
		$qry="SELECT COUNT(Regiment_No) FROM mbo_other_injured_sick";
		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$incg=$row['COUNT(Regiment_No)'];
                                
			}			
		}
		else{
			echo"o Results";
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
	
		$qry="SELECT COUNT(Regiment_No) FROM absent";
		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$inch=$row['COUNT(Regiment_No)'];
                                
			}			
		}
		else{
			echo"o Results";
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
	
		$qry="SELECT COUNT(Regiment_No) FROM dambo_wia";
		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$inci=$row['COUNT(Regiment_No)'];
                                
			}			
		}
		else{
			echo"o Results";
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
	
		$qry="SELECT COUNT(Regiment_No) FROM dambo_other_injured_sick";
		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$incj=$row['COUNT(Regiment_No)'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();		
		
						
	


		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM kia WHERE (Regiment_No LIKE 'N%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$oinca=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM mia WHERE (Regiment_No LIKE 'N%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$oincb=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM other_death WHERE (Regiment_No LIKE 'N%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$oincc=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM wia WHERE (Regiment_No LIKE 'N%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$oincd=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM other_injured_sick WHERE (Regiment_No LIKE 'N%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$oince=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM mbo_wia WHERE (Regiment_No LIKE 'N%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$oincf=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();	
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM mbo_other_injured_sick WHERE (Regiment_No LIKE 'N%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$oincg=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
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
	
		$qry="SELECT count(*) as c FROM absent WHERE (Regiment_No LIKE 'N%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$oinch=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM dambo_wia WHERE (Regiment_No LIKE 'N%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$oinci=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();	
		
		
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM dambo_other_injured_sick WHERE (Regiment_No LIKE 'N%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$oincj=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();														
	


		
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM kia WHERE (Regiment_No LIKE 'S%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$sinca=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM mia WHERE (Regiment_No LIKE 'S%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$sincb=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM other_death WHERE (Regiment_No LIKE 'S%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$sincc=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM wia WHERE (Regiment_No LIKE 'S%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$sincd=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM other_injured_sick WHERE (Regiment_No LIKE 'S%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$since=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM mbo_wia WHERE (Regiment_No LIKE 'S%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$sincf=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM mbo_other_injured_sick WHERE (Regiment_No LIKE 'S%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$sincg=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();	
		
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM dambo_wia WHERE (Regiment_No LIKE 'S%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$sinci=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();	
		
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$conn = new mysqli($servername, $username, $password,$dbname);
		if(!$conn){
			die("Connection Failed: ".mysqli_connect_error());
		}
	
		$qry="SELECT count(*) as c FROM dambo_other_injured_sick WHERE (Regiment_No LIKE 'S%')";

		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$sincj=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
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
	
		$qry="SELECT count(*) as c FROM absent WHERE (Regiment_No LIKE 'S%')";
		
		$result=$conn->query($qry);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$sinch=$row['c'];
                                
			}			
		}
		else{
			echo"o Results";
		}
		$conn->close();					
	

?> 
						
	







<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap.min4.css">
<body>

<!-- Navbar -->
<div class="w3-top w3-border-bottom w3-border-white">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="office.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">OFFICE</a>
   
    <a href="goos.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REFRESH PAGE</a>
   
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">LOGOUT</a>
   
  </div>
 
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="index.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="office.html class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">OFFICE</a>
  <a href="goos.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">REFRESH PAGE</a>
  
   <a href="logout.php" class="w3-bar-item w3-button w3-padding-large " onclick="myFunction()">LOGOUT</a>
 
</div>
<div style="height:46px"></div>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left  w3-black w3-border-top w3-border-white"   style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <a href="kia/all/allkia.php" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">ALL KIA</a>
  <a href="mia/all/allmia.php" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">ALL MIA</a>
  <a href="other_death/all/allother_death.php" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">ALL OTHER DEATH</a>
  
  <a href="wia/all/allwia.php" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">ALL WIA</a>
  <a href="other_injured_sick/all/allother_injured_sick.php" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">ALL OTHER INJURED/SICK</a>
  <a href="absent/all/allabsent.php" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">ALL ABSENT</a>
  <a href="mbo_wia/all/allmbo_wia.php" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">ALL MEICAL BOARD OUT-WIA</a>
  <a href="mbo_other_injured_sick/all/allmbo_other_injured_sick.php" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">ALL MEICAL BOARD OUT-OTHER INJURED/SICK</a>
  <a href="dambo_wia/all/alldambo_wia.php" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">ALL DEATH AFTER MEICAL BOARD OUT-WIA</a>
  <a href="dambo_other_injured_sick/all/alldambo_other_injured_sick.php" class="w3-bar-item w3-button w3-panel w3-border w3-border-red">ALL DEATH AFTER MEICAL BOARD OUT-OTHER INJURED/SICK</a>
</div>

<div class="w3-main" style="margin-left:200px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>THE DASHBOARD</h1>
  </div>
</div>

 <div class="w3-container" style="height:40px">
    
  </div>
<center><div class="w3-container">
<button class="w3-button w3-round-xxxlarge w3-red">DEATH ANALYTICS</button>
<button class="w3-button w3-round-xxxlarge w3-red">INJURED/SICK & ABSENT ANALYTICS</button></div></center>

<div class="w3-container" style="height:40px">
    
  </div>

<div class="w3-container">
  <h3>THE COLUMN CHART</h3>
   <head>
    <link rel="stylesheet" href="w3.css">
    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['KIA',     <?php echo $inca?>],
          ['MIA',      <?php echo $incb?>],
          ['OTHER DEATH',  <?php echo $incc?>],
          ['WIA', <?php echo $incd?>],
          ['OTHER INJURED SICK', <?php echo $ince?>],
          ['MEDICAL BOARD OUT-WIA',    <?php echo $incf?>],
          ['MEDICAL BOARD OUT-OTHER INJURED/SICK',    <?php echo $incg?>],
          ['ABSENT',    <?php echo $inch?>],
           ['DEATH AFTER MEDICAL BOARD OUT-WIA',    <?php echo $inci?>],
          ['DEATH AFTER MEDICAL BOARD OUT-OTHER INJURED/SICK',    <?php echo $incj?>]
        ]);

        var options = {
          title: 'ALL SOLDIERS',
          'width':1300,
          'height':900
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }


    </script>
    
    
    
  </head>
  
   <head>
    <script type="text/javascript" src="loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['CATEGORY', 'TOTAL', 'OFFICERS', 'OTHER\n RANKS'],
          ['KIA',  <?php echo $inca?>, <?php echo $oinca?>, <?php echo $sinca?>],
          ['MIA',  <?php echo $incb?>, <?php echo $oincb?>, <?php echo $sincb?>],
          ['OTHER DEATH',  <?php echo $incc?>, <?php echo $oincc?>, <?php echo $sincc?>],
          ['WIA',  <?php echo $incd?>, <?php echo $oincd?>, <?php echo $sincd?>],
		  ['OTHER\n INJURED/SICK',  <?php echo $ince?>, <?php echo $oince?>, <?php echo $since?>],
		  
          ['ABSENT',  <?php echo $inch?>, <?php echo $oincg?>, <?php echo $sincg?>],
          
           ['MBO-WIA',  <?php echo $incf?>, <?php echo $oincf?>, <?php echo $sincf?>],
            ['MBO-OTHER\n INJURED/SICK',  <?php echo $incg?>, <?php echo $oincf?>, <?php echo $sincf?>],
            
             ['DAMBO-WIA',  <?php echo $inci?>, <?php echo $oinci?>, <?php echo $sinci?>],
            ['DAMBO-OTHER\n INJURED/SICK',  <?php echo $incj?>, <?php echo $oincj?>, <?php echo $sincj?>],
            
           
            
          
        ]);
        
        
       


        var options = {
        
          chart: {
 
            title: 'TOTAL SOLDIERS, OFFICERS, and OTHER RANKS IN ALL CATEGORIES',
            
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" class="w3-container w3-responsive" style="width: 1300px; height: 500px; margin-left:-20px "></div>
  </body>
  
 <div><h3>THE PIE CHART</h3>
    <div id="piechart" class="w3-container" style="width: 1200px; height: 500px;"></div>
   </div>
   
  
   
   
</div>


<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>



