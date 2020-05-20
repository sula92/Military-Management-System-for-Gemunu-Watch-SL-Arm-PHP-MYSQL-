<?php

include('session.php');


    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="rft_gw";

if(isset($_POST['btnNew'])){
		//Create connection
		$conn =mysqli_connect($servername, $username, $password,$dbname);
		//Check connection
		if(!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}
		//Create the Query(Insert Record)
		mysqli_set_charset($conn,"utf8");
		$sql = "INSERT INTO login VALUES('$_POST[reg]','$_POST[ran]','$_POST[nm]','$_POST[uni]','$_POST[con]','$_POST[unm]','$_POST[pswd]')";
		//Read the Command
		if(mysqli_query($conn,$sql)){
			//Display Message
    		echo '<script language="javascript">';
            echo 'alert("NEW USER ADDED SUCCESSFULLY!")';
            echo '</script>';
		}
		else{
			//Display Error Message
    		echo "Error: " . $sql . "<br><br><br>" . mysqli_error($conn);
		}
		//Close the Connection
		mysqli_close($conn);
	}
	
	//Check the Button
	if(isset($_POST['btnSave'])){
		//Create connection
		$conn =mysqli_connect($servername, $username, $password,$dbname);
		//Check connection
		if(!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}
		//Create the Query(Insert Record)
		$sql = "UPDATE login SET `login` SET `Regiment_No`='$_POST[reg]',`Rank`='$_POST[ran]',`Name`='$_POST[nm]',`Unit`='$_POST[uni]',`Contact`='$_POST[con]',`User_Name`='$_POST[unm]',`Password`='$_POST[pswd]''";
		//Read the Command
		if(mysqli_query($conn,$sql)){
			//Display Message
    		echo '<script language="javascript">';
            echo 'alert("USER UPDATED SUCCESSFULLY!")';
            echo '</script>';
		}
		else{
			//Display Error Message
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		//Close the Connection
		mysqli_close($conn);
	}
	
	//Check the Button
	if(isset($_POST['btnDelete'])){
		//Create connection
		$conn =mysqli_connect($servername, $username, $password,$dbname);
		//Check connection
		if(!$conn){
			die("Connection failed: " . mysqli_connect_error());
		}
		//Create the Query(Insert Record)
		$sql = "DELETE FROM login WHERE Regiment_No='$_POST[txtregno]'";
		//Read the Command
		if(mysqli_query($conn,$sql)){
			//Display Message
    		echo '<script language="javascript">';
            echo 'alert("RECORD DELETED SUCCESSFULLY!")';
            echo '</script>';
		}
		else{
			//Display Error Message
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		//Close the Connection
		mysqli_close($conn);
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>RFT-GW</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min4.css">
  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" href="w3.css">
  
<style>

th, td {
 
  border-right: 1px solid #ddd;
  border: 1px solid #ddd;
}


</style>
  
  
</head>
<body>

<!-- Navbar -->
<div class="w3-top w3-border-bottom w3-border-white">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="office.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">OFFICE</a>
    <a href="goos.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">DASHBOARD</a>
       
   
    <a href="create.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REFRESH PAGE</a>
    
     <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right">LOGOUT</a>
   
  </div>
 
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="index.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="office.php class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">OFFICE</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">DASHBOARD</a>
  <a href="create.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">REFRESH PAGE</a>
  
  <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small " onclick="myFunction()">LOGOUT</a>
 
</div>
<div style="height:46px"></div>



<div class="container">
  <h2>CREATE/UPDATE AND DELETE USER ACCOUNT</h2>
  
  <form action="#" class="needs-validation" method="post">
    
    <div class="form-group">
      <label for="uname">Regiment Number:</label>
      <input type="text" class="form-control" id="uname" placeholder="රෙජිමේන්තු අංකය" name="reg" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Rank:</label>
     <select class="form-control" id="sel1" name="ran">
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
    
    <div class="form-group">
      <label for="uname">Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="හමුදා ආකෘතියේ නම" name="nm" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    
    <div class="form-group">
      <label for="uname">Unit:</label>
     <select class="form-control" id="sel1" name="uni">
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
    
    
    
    <div class="form-group">
      <label for="uname">Contact:</label>
      <input type="text" class="form-control" id="uname" placeholder="දුරකථන" name="con" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="පරිශීලක නාමය" name="unm" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="රහස් පදය" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="btnNew">Submit User</button>
    <button type="submit" class="btn btn-primary" name="btnSave">Update User</button>
    <button type="submit" class="btn btn-primary" name="btnDelete">Delete User</button>
    
    
  </form>

 <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Show All Users</button>

 <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:900px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        
        <h1>AUTHORISED USERS</h1>
        
        <img src="user1.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="rft_gw";

$counter=1;



// Create connection

$conn = new mysqli($servername, $username, $password,$dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM `login`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div><table class=\"table table-dark table-striped table-hover\"><thead class=\"w3-red\"><tr><th>Serial Number</th><th>Regiment No</th><th>Rank</th><th>Name</th><th>Unit</th><th>Contact</th></tr></thead></div>";
    // output data of each row
	
    while($row = $result->fetch_assoc()) {
		
		
		
        echo "<tr><td>".$counter."</td><td>".$row["Regiment_No"]."</a></td><td>".$row["Rank"]."</td><td> ".$row["Name"]."</td><td>".$row["Unit"]."</td><td>".$row["Contact"]."</td></tr>";
		
		
		$counter=$counter+1;
		
	}
    echo "</table>";
}
 else {
    echo "0 results";
}

?>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button  onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Exit</button>
        
      </div>

    </div>
  </div>
</div>


<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>

