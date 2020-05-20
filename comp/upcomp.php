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
		$sql = "SELECT * FROM compensations WHERE Document='$ran'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				//Assigning the Record
				$sn=$row['Serial_Number'];
				$regno=$row['Regiment_Number'];
				$rank=$row['Rank'];
				$snm=$row['Soldiers_Name'];
				$unit=$row['Unit'];
				$rnm=$row['Recievers_Name'];
				$rnic=$row['Recievers_NIC'];
				$rel=$row['Relationship_to_the_Soldier'];
				$cont=$row['Contact_Number'];
				$add=$row['Address'];
				$amou=$row['Amount'];
				$dor=$row['Date_of_Recieved'];
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
		$sql = "UPDATE compensations SET `Regiment_Number`='$_POST[regno]',`Rank`='$_POST[rank]',`Soldiers_Name`='$_POST[snm]', `Document`='$imagename'  WHERE Serial_Number='$_POST[sn]'";
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

  


  
  //Check in the Button
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
      <a href="addcomp.php" class="w3-bar-item w3-button w3-mobile">ADD NEW</a>
      <a href="comp.php" class="w3-bar-item w3-button w3-mobile">VIEW & UPDATE COMPENSATIONS</a>
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
<center><div class="w3-container"><a href="comp.php">
<button class="w3-button w3-round-xxxlarge w3-red w3-left">BACK</button></a>
</div></center>

<div style="height:80px"></div>

<div class="container">
  <h2>UPDATE COMPENSATION</h2>
  
  <form class="needs-validation" method="post" action="#" enctype="multipart/form-data">
  
  
  <div class="form-group">
      <label for="uname">Serial Number:</label>
      <input type="text" class="form-control" id="uname" name="sn" placeholder="රෙජිමේන්තු අංකය" readonly value="<?php echo $sn ?>"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Regiment Number:</label>
      <input type="text" class="form-control" id="uname" name="regno" placeholder="රෙජිමේන්තු අංකය" value="<?php echo $regno ?>"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    
    
    <div class="form-group">
      <label for="uname">Rank:</label>
     <select class="form-control" id="sel1" name="rank">
     <option value="<?php echo $rank ?>"/><?php echo $rank ?></option>
                      <option value="PTE(සාමාන්‍යය සෙබල)">PTE(සාමාන්‍යය සෙබල)</option>
      <option value="LCP(ලාන්ස් කෝප්‍රරල්)">LCP(ලාන්ස් කෝප්‍රරල්) </option>
      <option value="CPL(කෝප්‍රරල්)">CPL(කෝප්‍රරල්)</option>
      <option value="SGT(සැරයන්">SGT(සැරයන්)</option>
      <option value="STAFF SERGENT(මාණ්ඩලික සැරයන්)">STAFF SERGENT(මාණ්ඩලික සැරයන්)</option>
      <option value="WO2(වරලත් නිලධාරී 2 වන පන්තිය)">WO2(වරලත් නිලධාරී 2 වන පන්තිය)</option>
      <option value="WO1(වරලත් නිලධාරී 1 වන පන්තිය)">WO1(වරලත් නිලධාරී 1 වන පන්තිය)</option>
      <option value="SECOND LEFTINENT(දෙවන ලුතිනන්)">SECOND LEFTINENT(දෙවන ලුතිනන්)</option>
      <option value="LEFTINENT(ලුතිනන්)">LEFTINENT(ලුතිනන්)</option>
      <option value="CAPTAIN(කැප්ටන්">CAPTAIN(කැප්ටන්)</option>
      <option value="MAJOR(මේජර්)">MAJOR(මේජර්)</option>
      <option value="LT COLONAL(ලුතිනන් කර්නල්)">LT COLONAL(ලුතිනන් කර්නල්)</option>
      <option value="COLONAL(කර්නල්)">COLONAL(කර්නල්)</option>
      <option value="BRIGEDIER(බ්රිගේඩියර්	">BRIGEDIER(බ්රිගේඩියර්	)</option>
      <option value="MAJOR GENERAL(මේජර් ජෙනරල්)">MAJOR GENERAL(මේජර් ජෙනරල්)</option>
      <option value="LT GENERAL(ලුතිනන් ජෙනරල්)">LT GENERAL(ලුතිනන් ජෙනරල්)</option>
      <option value="GENERAL(ජෙනරල්">GENERAL(ජෙනරල්)</option>
      <option value="FIELD MARSHAL(ෆීල්ඩ් මාර්ෂල්)">FIELD MARSHAL(ෆීල්ඩ් මාර්ෂල්)</option>
                  
  </select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    
    <div class="form-group">
      <label for="uname">Soldier's Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="හමුදා ආකෘතියේ නම" name="snm" value="<?php echo $snm ?>" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    
    <div class="form-group">
      <label for="uname">Unit:</label>
     <select class="form-control" id="sel1" name="unit">
                     <option value="<?php echo $unit ?>"><?php echo $unit ?></option>
                     <option value="1GW">1GW</option>
                     <option value="2GW">2GW</option>
                     <option value="3GW">3GW</option>
                     <option value="4GW">4GW</option>
                     <option value="5GW">5GW</option>
                     <option value="6GW">6GW</option>
                     <option value="7GW">7GW</option>
                     <option value="8GW">8GW</option>
                     <option value="9GW">9GW</option>
                     <option value="10GW">10GW</option>
                     <option value="11GW">11GW</option>
                     <option value="12GW">12GW</option>
                     <option value="13GW">13GW</option>
                     <option value="14GW">14GW</option>
                     <option value="15GW">15GW</option>
                     <option value="16GW">16GW</option>
                     <option value="17GW">17GW</option>
                     <option value="18GW">18GW</option>
                     <option value="19GW">19GW</option>
                     <option value="20GW">20GW</option>
                     <option value="21GW">21GW</option>
                     <option value="22GW">22GW</option>
                     <option value="23GW">23GW</option>
                     <option value="24GW">24GW</option>
                     <option value="25GW">25GW</option>
                     <option value="26GW">26GW</option>
                   
  </select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    
    <div class="form-group">
      <label for="uname">Recievers_Name:</label>
      <input type="text" class="form-control" id="uname" name="rnm" placeholder="ලේඛන නම" value="<?php echo $rnm ?>"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
     <div class="form-group">
      <label for="uname">Recievers_NIC:</label>
      <input type="text" class="form-control" id="uname" name="rnic" placeholder="ලේඛන නම" value="<?php echo $rnic ?>"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Relationship to the Soldier:</label>
      <input type="text" class="form-control" id="uname" name="rel" placeholder="ලේඛන නම" value="<?php echo $rel ?>"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Contact Number:</label>
      <input type="text" class="form-control" id="uname" name="cont" placeholder="ලේඛන නම" value="<?php echo $cont ?>"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Address:</label>
      <input type="text" class="form-control" id="uname" name="add" placeholder="ලේඛන නම" value="<?php echo $add ?>"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Amount:</label>
      <input type="text" class="form-control" id="uname" name="amou" placeholder="ලේඛන නම" value="<?php echo $amou ?>"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Date of Recieved:</label>
      <input type="date" class="form-control" id="uname" name="dor" placeholder="ලේඛන නම" value="<?php echo $dor ?>"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
    <label for="uname">Document:</label>
    <input type="file" class="form-control" name="image" id="uname" placeholder="ලේඛනය" value="<?php echo $doc ?>"  required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
    
    
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> Confirm.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="up">Update Record</button>
   
    
    
  </form>





</body>

</html>


