<?php

include('session.php');

if(isset($_POST['sub'])){


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
  
$con=mysqli_connect("localhost","root","","rft_gw");
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
  
  mysqli_set_charset($conn,"utf8");
$sql="INSERT INTO documents (Serial_Number,Regiment_Number,Soldiers_Name,Document,Document_Name)
VALUES
('','$_POST[regno]','$_POST[snm]','$imagename','$_POST[dnm]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: '.mysqli_connect_error());
  }
else
  {echo '<script language="javascript">';
            echo 'alert("DOCUMENT ADDED SUCCESSFULLY!")';
            echo '</script>';
	}
mysqli_close($con);

}

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<link rel="stylesheet" href="w3.css" />
<link rel="stylesheet" href="bootstrap.min4.css" />


<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://localhost/gw/index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    
     <a href="http://localhost/gw/office.php" class="w3-bar-item w3-button w3-padding-large">OFFICE</a>
    
   <a href="http://localhost/gw/goos.php" class="w3-bar-item w3-button w3-padding-large">DASHBOARD</a>
   
    <a href="http://localhost/gw/create.php" class="w3-bar-item w3-button w3-padding-large">USER MANAGEMENT</a>
    
    
     <div class="w3-dropdown-hover w3-mobile">
    <button class="w3-button">IMPORTANT DOCUMENTS <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-dark-grey">
      <a href="#" class="w3-bar-item w3-button w3-mobile">ADD DOCUMENTS</a>
      <a href="http://localhost/gw/doc/Viewandupdate.php" class="w3-bar-item w3-button w3-mobile">VIEW & UPDATE DOCUMENTS</a>
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
  <a href="#about" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="#map" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">DASHBOARD</a>
  
  
  
</div>  



<div style="height:100px"></div>



<div class="container">
  <h2>ADD DOCUMENTS</h2>
  
  <form class="needs-validation" method="post" action="#" enctype="multipart/form-data">
    
    <div class="form-group">
      <label for="uname">Regiment Number:</label>
      <input type="text" class="form-control" id="uname" name="regno" placeholder="රෙජිමේන්තු අංකය"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    
    <div class="form-group">
      <label for="uname">Soldier's Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="හමුදා ආකෘතියේ නම" name="snm" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    
    
    
    <div class="form-group">
      <label for="uname">Document Name:</label>
      <input type="text" class="form-control" id="uname" name="dnm" placeholder="ලේඛන නම"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
    <label for="uname">Document:</label>
    <input type="file" class="form-control" name="image" id="uname" placeholder="ලේඛනය"  required>
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
    <button type="submit" class="btn btn-primary" name="sub">Add Document</button>
   
    
    
  </form>


</div>

</body>
</html>