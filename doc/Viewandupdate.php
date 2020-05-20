
<?php
  include('session.php');
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";
  
  //Check in the Button
	if(isset($_POST['up'])){
		//Create connection
		$conn =mysqli_connect($servername, $username, $password,$dbname);
		//Check connection
		if(!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}
		mysqli_set_charset($conn,"utf8");
		//Create the Query(Update Record)
		$sql = "UPDATE documents SET `Regiment_Number`='$_POST[Regiment_Number]',`Soldiers_Name`='$_POST[Soldiers_Name]',`Document_Name`='$_POST[Document_Name]'  WHERE Serial_Number='$_POST[Serial_Number]'";
		//Read the Command
		if(mysqli_query($conn,$sql)){
			//Display Message
    		echo '<script language="javascript">';
            echo 'alert("RECORD UPDATED SUCCESSFULLY!")';
            echo '</script>';
		}
		else{
			//Display Error Message
    		echo "Error: " . $sql . "<br><br><br>" . mysqli_error($conn);
		}
		//Close the Connection
		mysqli_close($conn);
	}
  

  
?> 


<html>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap.min.css">



<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onClick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://localhost/gw/index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    
    <a href="http://localhost/gw/office.php" class="w3-bar-item w3-button w3-padding-large">OFFICE</a>
    
   <a href="http://localhost/gw/goos.php" class="w3-bar-item w3-button w3-padding-large">DASHBOARD</a>
   
    <a href="http://localhost/gw/create.php" class="w3-bar-item w3-button w3-padding-large">USER MANAGEMENT</a>
    
    
     <div class="w3-dropdown-hover w3-mobile">
    <button class="w3-button">IMPORTANT DOCUMENTS <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-dark-grey">
      <a href="http://localhost/gw/doc/Addproduct.php" class="w3-bar-item w3-button w3-mobile">ADD DOCUMENTS</a>
      <a href="#" class="w3-bar-item w3-button w3-mobile">VIEW & UPDATE DOCUMENTS</a>
    </div>
  </div>
  
  <div class="w3-dropdown-hover w3-mobile">
    <button class="w3-button">COMPENSATIONS<i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-dark-grey">
      <a href="http://localhost/gw/comp/addcomp.php" class="w3-bar-item w3-button w3-mobile">ADD NEW</a>
      <a href="http://localhost/gw/comp/comp.php" class="w3-bar-item w3-button w3-mobile">VIEW & UPDATE COMPENSATIONS</a>
    </div>
  </div>
     
    <a href="http://localhost/gw/logout.php" class="w3-bar-item w3-button w3-padding-large w3-right">LOGOUT</a>
   
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#about" class="w3-bar-item w3-button w3-padding-large" onClick="myFunction()">HOME</a>
  <a href="#map" class="w3-bar-item w3-button w3-padding-large" onClick="myFunction()">DASHBOARD</a>
  
  
  
</div>  

<div style="height:80px"></div>

<form action="#" method="post">

<input type="text"  style="height:5%; width:26%" name="nm" />

<input class="w3-button w3-black" type="submit" name="sub" value="Search" />

<a href="Viewandupdate.php"><input class="w3-button w3-black" type="button" name="ref" value="Refresh Page" /></a>


</body>




</html>


<?php



echo "<div style=\"height:30px\"></div>";

if(isset($_POST['sub'])){


			$con=mysqli_connect("localhost","root","","rft_gw");
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }         
            mysqli_set_charset($con,"utf8");
			$sql = "SELECT * FROM documents where Regiment_Number ='$_POST[nm]' ORDER BY Regiment_Number";
 
$result = mysqli_query($con,$sql) or die($sql."<br/><br/>".mysqli_error());
 
$i = 1;
 
echo '<table class="table table-bordered w3-hoverable " style="border-color:red"  >';
echo '<tr>';
echo '<th class="w3-red"><b>Serial Number</b></td>';

echo '<th class="w3-red"><b>Regiment Number</b></td>';
echo '<th class="w3-red"><b>Soldiers Name</b></th>';

echo '<th class="w3-red"><b>Document Name</b></th>';
echo '<th class="w3-red"><b>Document</b></th>';

echo '<th class="w3-red"><b>Update</b></th>';

echo '<th class="w3-red"><b>Delete</b></th>';



echo '</tr>';
 
echo "<form name='form_update' method='post' action='#'>\n";
while ($documents = mysqli_fetch_array($result)) {
	
	
	
	echo '<tr>';
	
	echo "<td><p><input type='text' class=\"w3-input \" size='6' readonly='true' name='Serial_Number' value='{$documents['Serial_Number']}' /></p></td>";
	
	
		echo "<td><p><input type='text' class=\"w3-input \" size='6' readonly='true' name='Regiment_Number' value='{$documents['Regiment_Number']}' /></p></td>";
		
		
		echo "<td><p><input type='text' class=\"w3-input \" size='8'  name='Soldiers_Name[$i]' value='{$documents['Soldiers_Name']}' /></p></td>";
	
	echo "<td><input type='text' size='5' class=\"w3-input \" style='text-align:right;' name='Document_Name' value='{$documents['Document_Name']}' /></td>";
	$imagedisplay =$documents['Document']; 
	
	echo "<td><p><img src = 'docs/$imagedisplay' height = 70 width = 100></p></td>";
	
	
echo "<td><a href=\"updoc.php?sn=$imagedisplay\"><input type='button' class=\"w3-button w3-blue w3-hover-green \" size='8'  name='up' value='Update' /></a></td>";	

            $sn=$documents['Serial_Number'];
               

echo "<td><a href=\"deldoc.php?sn=$imagedisplay\"><input type='button' class=\"w3-button w3-blue w3-hover-green \" size='8'  name='del' value='Delete' /></a></td>";
	
	echo '</tr>';
	++$i;
}

echo "</form>";
echo '</table>';
}
  ?> 

