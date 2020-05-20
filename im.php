<?php


if(isset($_POST['sub'])){
	
	$all_files = glob("images/*.*");
  for ($i=0; $i<count($all_files); $i++)
    {
      $image_name = $all_files[$i];
      $supported_format = array('gif','jpg','jpeg','png');
      $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
      if (in_array($ext, $supported_format))
          { 
		    if($image_name==$_POST['nm']){
		    echo  $image_name;
            echo '<img src="'.$image_name .'" alt="'.$image_name.'" />'."<br /><br />";  }
          } else {
              continue;
          }
    }
	
	
	
 $handle = opendir(dirname(realpath(__FILE__)).'/images/');
while($file = readdir($handle)){
  if($file !== ""){
	      echo  $file; 
	      echo '<img src="images/'.$file.'" border="0" width="150px" height="170px" />';
  }
}

}




?>

<html>
<head>

</head>


<body>
<form action="im.php" method="post" enctype="multipart/form-data">

<input name="nm" type="text"  />

<input name="sub" type="submit" value="sub" />


</form>


</body>




</html>