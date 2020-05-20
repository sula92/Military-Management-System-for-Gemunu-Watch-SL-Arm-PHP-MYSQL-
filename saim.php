
<?php

if(isset($_POST['btnNew'])){


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
   

    if (file_exists("photos/" . $_FILES["image"]["name"]))
      {
      echo $_FILES["image"]["name"] . " already exists. ";
      }
    else
      {
		$imagename = $_FILES["image"]["name"];   
      move_uploaded_file($_FILES["image"]["tmp_name"],
     "photos/" . $_FILES["image"]["name"]);
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
$sql="INSERT INTO photos (Regiment_Number,Image)
VALUES
('$_POST[txtregnum]','$imagename')";
if (!mysqli_query($con,$sql))
  {
  die('Error: '.mysqli_connect_error());
  }
else
  {echo '<script language="javascript">';
            echo 'alert("IMAGE ADDED SUCCESSFULLY!")';
            echo '</script>';
	}
mysqli_close($con);

}


if(isset($_POST["btnSearch"]))
{
	
	$con=mysqli_connect("localhost","root","","rft_gw");
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
			$sql = "SELECT * FROM photos where Regiment_Number ='$_POST[txtregno]'";
 
$result = mysqli_query($con,$sql);

 if ($result->num_rows > 0) {

while ($documents = mysqli_fetch_array($result)) {
	
	
	
	
	$imagedisplay =$documents['Image']; 
	
	
	}
	
	
	
  }
  
  else{$imagedisplay="";}

  
}

?>
