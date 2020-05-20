 <?php
          $con = mysqli_connect('localhost','root','','rft_gw') or die('Unable To connect');


if(isset($_POST["btnSearch"]))
{
	
	$con=mysqli_connect("localhost","root","","rft_gw");
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
			$sql = "SELECT * FROM photos where Regiment_Number ='$_POST[txtregno]'";
 
$result = mysqli_query($con,$sql) or die($sql."<br/><br/>".mysqli_error());
 

while ($documents = mysqli_fetch_array($result)) {
	
	
	
	
	$imagedisplay =$documents['Image']; 
	
	

	
	
}

  
  }
  
?>     