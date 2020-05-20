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
		$id=base_convert($_POST['id'],16,2);
        
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

if(isset($_POST['sub'])){

if(!empty($_POST['id'])){
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = "";
    $dbName     = 'rft_gw';
	
	 $image = $_FILES['image']['tmp_name'];
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $db->query("SELECT * FROM photos WHERE id = {$_POST['id']}");
    $image = $_FILES['image']['tmp_name'];
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
		
		
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image'];
		
		
    }else{
        echo 'Image not found...';
    }
}

}



?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="text" name="id"/>
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
        <input type="submit" name="sub" value="SHOW"/>
        
       
        
    </form>
 
    
</body>
</html>