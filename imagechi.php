<?php




function image($x,$y){
	
	if($_FILES["image"]["name"]!=""){
	
	$imagename = $_FILES["image"]["name"];
	}
	else{$imagename="";}
	
	if($imagename!=""){
	
	include('Config.php');

$sql = "SELECT * FROM $x where NIC_Number ='$_POST[nic]' || NIC_Number='$_POST[txtidno]'";
 
$result = mysqli_query($conn,$sql) or die($sql."<br/><br/>".mysqli_error());
 

while ($documents = mysqli_fetch_array($result)) {
	
	
	
	
	$imagedisplay =$documents['Image']; }
	
	$path="$y/$imagedisplay";
	
	
if(file_exists("$path")) {
	
if (unlink($path)){

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
   

    if (file_exists("$y/" . $_FILES["image"]["name"]))
      {
      echo $_FILES["image"]["name"] . " already exists. ";
      }
    else
      {
		$imagename = $_FILES["image"]["name"];   
      move_uploaded_file($_FILES["image"]["tmp_name"],
     "$y/" . $_FILES["image"]["name"]);
          }
    }
  }
else
  {
  echo "Invalid file";
  }
  
}

else{
	
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
   

    if (file_exists("$y/" . $_FILES["image"]["name"]))
      {
      echo $_FILES["image"]["name"] . " already exists. ";
      }
    else
      {
		$imagename = $_FILES["image"]["name"];   
      move_uploaded_file($_FILES["image"]["tmp_name"],
     "$y/" . $_FILES["image"]["name"]);
          }
    }
  }
else
  {
  echo "Invalid file";
  }
	
	
  }
	
	
}

// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
$sql = "UPDATE $x SET `NIC_Number`='$_POST[nic]',`Image`='$imagename'


WHERE NIC_Number='$_POST[nic]'";


if (!mysqli_query($conn,$sql))
  {
  die('Error: '.mysqli_connect_error());
  }
else
  {echo '<script language="javascript">';
            echo 'alert("IMAGE UPDATED SUCCESSFULLY!")';
            echo '</script>';
	}

  }
}

function delim($x,$y){
	
	include('Config.php');
	
$sql = "SELECT * FROM $x where NIC_Number ='$_POST[nic]' || NIC_Number='$_POST[txtidno]'";
 
$result = mysqli_query($conn,$sql) or die($sql."<br/><br/>".mysqli_error());
 

while ($documents = mysqli_fetch_array($result)) {
	
	
	
	
	$imagedisplay =$documents['Image']; }
	
	$path="$y/$imagedisplay";
	
	if (unlink($path)){
		
		$sql = "DELETE FROM $x WHERE NIC_Number='$_POST[nic]' || Regiment_Number='$_POST[txtidno]'";
		//Read the Command
		if(mysqli_query($conn,$sql)){
			//Display Message
    		echo '<script language="javascript">';
            echo 'alert("IMAGE DELETED SUCCESSFULLY!")';
            echo '</script>';
		}
		else{
			//Display Error Message
    		echo "Error: " . $sql . "<br><br><br>" . mysqli_error($conn);
		}
		
		}	
	
}



?>