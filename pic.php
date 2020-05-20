
<?php

 
    $dir  = "images"; // your folder name ex: image
    $imgs = glob($dir ."/*.jpg"); // get your image files with .jpg 

    foreach ($imgs AS $i) {
		
		if($imgs==007){
		
      echo "<img src='$i'>";} // 
	  
		
    }
?>	
