<!DOCTYPE html>
<html>
<head>
<title>Image retrieve</title>
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><input type="text" name="id" ></td>
<td><input type="submit" name="submit" value="upload"></td>
<td><input type="submit" name="submit2" value="display"></td>


</tr>
</table>
</form>
<?php

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="rft_gw";
        
        //Create connection and select DB
        $db = new mysqli($servername, $username, $password,$dbname);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
		$id=$_POST['id'];
        
        //Insert image content into database
        $insert = $db->query("INSERT into photos (id,image, created) VALUES ('$id','$imgContent', '$dataTime')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}





$con = mysqli_connect('localhost','root','','rft_gw') or die('Unable To connect');


if(isset($_POST["submit2"]))
{   
   $res=mysqli_query($con,"select image from photos WHERE id = {$_POST['id']}");
  
   
   while($row=mysqli_fetch_array($res))
   {
    
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200"/>';
   echo "<br>";
   
   } 
  
  }
  
?>
</body>
</html>