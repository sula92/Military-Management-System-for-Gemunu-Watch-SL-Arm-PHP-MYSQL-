<?php

include('session.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<style>

body{
	background: url('sl.gif') no-repeat;
	background-size:cover;
	font-family:Arial;
	color:black;
        background-attachment: fixed;
    }

* {
  box-sizing: border-box;
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


#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  margin-top: 100px;
  border:1px solid;
  border-color:black
}

input[type=text],input[type=date] select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:white;
}

.container1 {
  position: absolute;
  top:-1.5%;
  margin: 20px;
  width: auto;
}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: black;
  padding: 20px;
  width: 50%;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  left:0%;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

/* The navbar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Navbar links */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

table {
  float: left;
  width: 100%;
  height:auto;
  margin-top: 30px;
  border-collapse: collapse;
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
tr{
	background-color:white;
}


th {
  background-color: #4CAF50;
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  
}
h1{
	color:blue;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>





<h2>COMPENSATION REPORTS(වන්දි ගෙවීම් වාර්තා)</h2>
 <select id="myInput" name="myInput" onChange="myFunction();">
      <option value=""></option>  
      <option value="Yes">Yes(ඔව්)</option>
      <option value="Yes, But ">Yes, But Not in Fully(ඔව්, නමුත් සම්පූර්ණ වශයෙන්ම නොවේ)</option>
      <option value="Not at All">Not at All(කොහෙත්ම නැහැ)</option>
      <option value="Unknown">Unknown(නොදන්නා)</option>
     
    </select>


<div style="margin-top:50px; width:100%; height:auto; visibility:hidden" id="d1"></div>

<div style="width:100%; height:50px"></div>

<script type="text/javascript">
function myFunction(){
xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","select_comp_notcomp.php?yr="+document.getElementById("myInput").value,false);
xmlhttp.send(null);
document.getElementById("d1").innerHTML=xmlhttp.responseText;
document.getElementById("d1").style.visibility='visible';	
}

</script>


</body>
</html>
