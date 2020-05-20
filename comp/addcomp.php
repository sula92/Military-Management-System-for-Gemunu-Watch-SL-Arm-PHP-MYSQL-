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
  
    $imagename = $_FILES["image"]["name"];
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="rft_gw";  
  
$con=mysqli_connect("localhost","root","","rft_gw");
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
  mysqli_set_charset($con,"utf8");
$sql="INSERT INTO compensations VALUES
('','$_POST[regno]','$_POST[rank]','$_POST[snm]','$_POST[unit]','$_POST[rnm]','$_POST[rnic]','$_POST[rel]','$_POST[cont]','$_POST[add]','$_POST[amou]','$_POST[dor]','$imagename')";
if (!mysqli_query($con,$sql))
  {
  die('Error: '.mysqli_connect_error());
  }
else
  {echo '<script language="javascript">';
            echo 'alert("NEW RECORD ADDED SUCCESSFULLY!")';
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
      <a href="http://localhost/gw/doc/Addproduct.php" class="w3-bar-item w3-button w3-mobile">ADD DOCUMENTS</a>
      <a href="http://localhost/gw/doc/Viewandupdate.php" class="w3-bar-item w3-button w3-mobile">VIEW & UPDATE DOCUMENTS</a>
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
  <a href="#about" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="#map" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">DASHBOARD</a>
  
  
  
</div>  



<div style="height:100px"></div>



<div class="container">
  <h2>ADD COMPENSATION</h2>
  
  <form class="needs-validation" method="post" action="#" enctype="multipart/form-data">
    
    <div class="form-group">
      <label for="uname">Regiment Number:</label>
      <input type="text" class="form-control" id="uname" name="regno" placeholder="රෙජිමේන්තු අංකය"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    
    
    <div class="form-group">
      <label for="uname">Rank:</label>
     <select class="form-control" id="sel1" name="rank">
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
      <input type="text" class="form-control" id="uname" placeholder="හමුදා ආකෘතියේ නම" name="snm" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    
    <div class="form-group">
      <label for="uname">Unit:</label>
     <select class="form-control" id="sel1" name="unit">
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
      <input type="text" class="form-control" id="uname" name="rnm" placeholder="ලේඛන නම"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
     <div class="form-group">
      <label for="uname">Recievers_NIC:</label>
      <input type="text" class="form-control" id="uname" name="rnic" placeholder="ලබන්නාගේ ජාතික හැදුනුම් පත් අංකය "  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Relationship to the Soldier:</label>
      <input type="text" class="form-control" id="uname" name="rel" placeholder="සොල්දාදුවා හා සම්බන්ධතාවය"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Contact Number:</label>
      <input type="text" class="form-control" id="uname" name="cont" placeholder="දුරකතන"  >
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Address:</label>
      <input type="text" class="form-control" id="uname" name="add" placeholder="ලබන්නාගේ ලිපිනය"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Amount:</label>
      <input type="text" class="form-control" id="uname" name="amou" placeholder="මුදල"  required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
    <div class="form-group">
      <label for="uname">Date of Recieved:</label>
      <input type="date" class="form-control" id="uname" name="dor" placeholder="ලබාගත් දිනය"  required>
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
    <button type="submit" class="btn btn-primary" name="sub">Add Record</button>
   
    
    
  </form>


</div>

<div class="container" style="height:20px"></div>

</body>
</html>