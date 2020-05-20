<?php
	 include('session.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>OFFICE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="w3.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
 
  
<style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

 body{
	background: url('war3.gif') no-repeat;
	background-size:cover;
	font-family:Arial;
	color:white;
    background-attachment: fixed;
     }
	 
	  footer {
      background-color: #555;
      color: white;
      padding: 15px;
	  width:100%;
    }
	
	h1 {
  color: white;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}

h3{color:white;}

</style>
  
</head>
<body>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    
   <a href="goos.php" class="w3-bar-item w3-button w3-padding-large">DASHBOARD</a>
   
    <a href="create.php" class="w3-bar-item w3-button w3-padding-large">USER MANAGEMENT</a>
    
    
     <div class="w3-dropdown-hover w3-mobile">
    <button class="w3-button">IMPORTANT DOCUMENTS <i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-dark-grey">
      <a href="doc/Addproduct.php" class="w3-bar-item w3-button w3-mobile">ADD DOCUMENTS</a>
      <a href="doc/Viewandupdate.php" class="w3-bar-item w3-button w3-mobile">VIEW & UPDATE DOCUMENTS</a>
    </div>
  </div>
  
  
  <div class="w3-dropdown-hover w3-mobile">
    <button class="w3-button">COMPENSATIONS<i class="fa fa-caret-down"></i></button>
    <div class="w3-dropdown-content w3-bar-block w3-dark-grey">
      <a href="comp/addcomp.php" class="w3-bar-item w3-button w3-mobile">ADD NEW</a>
      <a href="comp/comp.php" class="w3-bar-item w3-button w3-mobile">VIEW & UPDATE COMPENSATIONS</a>
    </div>
  </div>
     
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-right">LOGOUT</a>
   
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#about" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="#map" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">DASHBOARD</a>
  
  
  
</div>  

<div class="w3-container ">
  <div style="height:50px; width:100%"></div>
</div>
 

<div class="container">
  <center><h1>DEATH INFORMATION</h1></center>
  
  <div class="w3-container ">
  <div style="height:20px; width:100%"></div>
</div>
 
  <div class="row">
    <div class="col-md-3">
      <div class="" onMouseOver="this.style.opacity='0.6'" onMouseOut="this.style.opacity='1'">
        <a href="kia.php">
          <img src="kia1.jpg" class="w3-border w3-border-blue w3-round-large" alt="Lights" style="width:100%; height:200px">
          
          <div class="caption">
           <center><h3>KILLED IN ACTION</h3></center>
          </div>
        </a>
        
      </div>
    </div>
    <div class="col-md-3">
    
      <div class="" onMouseOver="this.style.opacity='0.6'" onMouseOut="this.style.opacity='1'">
        <a href="mia.php">
          <img src="mia.jpg" class="w3-border w3-border-blue w3-round-large" alt="Nature" style="width:100%; height:200px">
          
           
          <div class="caption">
           <center><h3>MISSING IN ACTION</h3></center>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="w3-border-blue" onMouseOver="this.style.opacity='0.6'" onMouseOut="this.style.opacity='1'">
        <a href="other_death.php">
          <img src="oth2.jpg" class="w3-border w3-border-blue w3-round-large" alt="Fjords" style="width:100%; height:200px">
          <div class="caption">
           <center><h3>OTHER DEATH</h3></center>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="" onMouseOver="this.style.opacity='0.6'" onMouseOut="this.style.opacity='1'">
        <a href="dambo.html">
          <img src="fu.jpg" class="w3-border w3-border-blue w3-round-large" alt="Nature" style="width:100%; height:200px">
          <div class="caption">
            <center><h3>DEATH AFTER MEDICAL BOARD OUT</h3></center>
          </div>
        </a>
      </div>
    </div>
    <div class="container">
    
    <div class="w3-container ">
  <div style="height:20px; width:100%"></div>
</div>
    
    
  <center><h1>INJURED/SICK INFORMATION</h1></center>
  
  <div class="w3-container ">
  <div style="height:15px; width:100%"></div>
</div>
  
  <div class="row">
    <div class="col-md-3">
      <div class="" onMouseOver="this.style.opacity='0.6'" onMouseOut="this.style.opacity='1'">
        <a href="wia.php">
          <img src="wia.jpg" class="w3-border w3-border-blue w3-round-large" alt="Lights" style="width:100%; height:200px">
          <div class="caption">
           <center><h3>WOUNDED IN ACTION</h3></center>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="" onMouseOver="this.style.opacity='0.6'" onMouseOut="this.style.opacity='1'">
        <a href="other_injured_sick.php">
          <img src="oth4.jpg" class="w3-border w3-border-blue w3-round-large" alt="Nature" style="width:100%; height:200px">
          <div class="caption">
            <center><h3>OTHER INJURED/SICK</h3></center>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="" onMouseOver="this.style.opacity='0.6'" onMouseOut="this.style.opacity='1'">
        <a href="absent.php">
          <img src="ab.jpg" class="w3-border w3-border-blue w3-round-large" alt="Fjords" style="width:100%; height:200px">
          <div class="caption">
            <center><h3>ABSENT</h3></center>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="" onMouseOver="this.style.opacity='0.6'" onMouseOut="this.style.opacity='1'">
        <a href="mbo.HTML">
          <img src="mbo3.jpg" class="w3-border w3-border-blue w3-round-large" alt="Nature" style="width:100%; height:200px">
          <div class="caption">
            <center><h3>MEDICAL BOARD OUT</h3></center>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="w3-container ">
  <div style="height:100px; width:100%"></div>
</div>


<div class="w3-container ">
  <div style="height:100px; width:100%"></div>
</div>

</body>
</html>


