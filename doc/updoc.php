<?php
  include('session.php');
  if($_GET["sn"]!=""){
  $ran=$_GET["sn"];}

    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="rft_gw";
	
	//Check the Button
	if($ran!=""){
		
		//Create connection
		$conn = mysqli_connect($servername, $username, $password,$dbname);
		//Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		//Create the Query(Search Record)
		mysqli_set_charset($conn,"utf8");
		$sql = "SELECT * FROM documents WHERE Document='$ran'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				//Assigning the Record
				$sn=$row['Serial_Number'];
				$regno=$row['Regiment_Number'];
				$snm=$row['Soldiers_Name'];
				$dnm=$row['Document_Name'];
				$doc=$row['Document'];
				
				
				
				
				
				
			}
		}
		else {
			//Display Error Message
    		echo "0 results";
		}
		//Close the Connection
		$conn->close();
	}
	else{
		//Clear Variable
		$sn="";
		$regno="";
		$snm="";
		$dnm="";
		$doc="";
		
	}



  
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";


  $ran=$_GET["sn"];
  $imagename = $_FILES["image"]["name"]; 
  $path="docs/$ran";
  
  //Check in the Button
	if(isset($_POST['up'])){
		if(unlink($path)){
		//Create connection
		$conn =mysqli_connect($servername, $username, $password,$dbname);
		//Check connection
		if(!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}
		mysqli_set_charset($conn,"utf8");
		//Create the Query(Update Record)
		$sql = "UPDATE documents SET `Regiment_Number`='$_POST[Regiment_Number]',`Soldiers_Name`='$_POST[Soldiers_Name]',`Document_Name`='$_POST[Document_Name]',`Document`='$imagename'  WHERE Serial_Number='$_POST[Serial_Number]'";
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
if(isset($_POST['up'])){
		
		if ((($_FILES["image"]["type"] == "image/gif")
|| ($_FILES["image"]["type"] == "image/jpeg")
|| ($_FILES["image"]["type"] == "image/png")
|| ($_FILES["image"]["type"] == "image/pjpeg"))
&& ($_FILES["image"]["size"] < 200000000))
  {
  if ($_FILES["image"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
   

    if (file_exists("docs/" . $_FILES["image"]["name"]))
      {
      echo $_FILES["image"]["name"] . " already exists. ";
      }
    else
      {
		$imagename = $_FILES["image"]["name"];   
      move_uploaded_file($_FILES["image"]["tmp_name"],
     "docs/" . $_FILES["image"]["name"]);
          }
    }
  }
else
  {
  echo "Invalid file";
  }
  
  
}

  }//if unlink
?>


<html>

<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="w3.css"/>

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
      <a href="Viewandupdate.php" class="w3-bar-item w3-button w3-mobile">VIEW & UPDATE DOCUMENTS</a>
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


 <div class="w3-container" style="height:40px">
    
  </div>
<center><div class="w3-container"><a href="Viewandupdate.php">
<button class="w3-button w3-round-xxxlarge w3-red w3-left">BACK</button></a>
</div></center>




<div style="height:40px"></div>

<div class="container">
  <h2>UPDATE </h2>
  
  <form action="#" class="needs-validation" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
      <label for="uname">Serial Number:</label>
      <input type="text" class="form-control" id="uname" value="<?php echo $sn?>" placeholder="රෙජිමේන්තු අංකය" name="Serial_Number" readonly>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Regiment Number:</label>
      <input type="text" class="form-control" id="uname" value="<?php echo $regno?>" placeholder="රෙජිමේන්තු අංකය" name="Regiment_Number">
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    
    
   
    
    
    
    <div class="form-group">
      <label for="uname">soldiers Name:</label>
      <input type="text" class="form-control" id="uname" value="<?php echo $snm?>" placeholder="දුරකථන" name="Soldiers_Name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
    <label for="uname">Document Name:</label>
    <input type="text" class="form-control" id="uname" value="<?php echo $dnm?>" placeholder="පරිශීලක නාමය" name="Document_Name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  
  <div class="form-group">
    <label for="uname">Document:</label>
    <input type="file" class="form-control" id="uname"  placeholder="පරිශීලක නාමය" name="image" value="<?php echo $doc ?>">
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
    
    
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox"  name="remember" required> I agree.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="up">Update</button>
   
    
    
  </form>




</body>

</html>


