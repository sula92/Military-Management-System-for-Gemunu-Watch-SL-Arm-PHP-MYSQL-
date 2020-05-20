<?php

	
	//Check the Button
	if(isset($_POST['btnSave'])){
		
		$reg=$_POST["nm"];
         echo  $reg;
		
		//Create connection
		$handle = opendir(dirname(realpath(__FILE__)).'/images/');
while($file = readdir($handle)){
  if($file !=="" ){
	      echo '<a href="kia.php"><img src="images/'.$file.'/$reg.jpg" border="20" width="150px" height="170px" /></a>>';
  }
}
	}
	
	
	
?>
<html>
	<head>
    	<title>Student Details</title>
        <style type="text/css">
			.row{
				width:280px;
				height:30px;
				padding:5px;
				font-weight:bold;
			}
			.ld{
				float:left;
				width:120px;
				height:100%;
			}
			.rd{
				float:right;
				width:110px;
				height:100%;
			}
			.fd{
				width:360px;
				border:#FF0000 ridge thick;
				border-radius:15px 0px 15px 0px;
				height:340px;
				position:relative;
				background-color:#99FF99;
			}
		</style>
       
    </head>
    <body>
    	<h1>Student Details</h1>
        <hr />
        <form class="fd" action="#" name="frmStud" method="post">
        	<div class="row">
            	<div class="ld">Student No</div>
                <div class="rd"><input type="text" name="nm" maxlength="6" placeholder="Student No" value="" /></div>
            </div>
           
            <div class="row">
            	
                <div class="ld"><input type="submit" name="btnSave" value="Update Record" /></div>
               
            </div>
        </form>
    </body>
</html>