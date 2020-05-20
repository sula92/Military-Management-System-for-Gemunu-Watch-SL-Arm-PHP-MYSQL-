<?php

include('session.php');

?>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="w3.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
<style>



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






<center><input type="text" id="myInput" name="myInput" onkeyup="myFunction();" placeholder="TYPE THE REGIMENT NUMBER.." title="Type in a name" autocomplete="off"></center>



<div style="margin-top:50px; width:100%; height:auto; visibility:hidden" id="d1"></div>



<script type="text/javascript">
function myFunction(){
xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","select_allper.php?ran="+document.getElementById("myInput").value,false);
xmlhttp.send(null);
document.getElementById("d1").innerHTML=xmlhttp.responseText;
document.getElementById("d1").style.visibility='visible';	
}

</script>







</body>
</html>
