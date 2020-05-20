<?php
if ((($_FILES["product_image"]["type"] == "image/gif")
|| ($_FILES["product_image"]["type"] == "image/jpeg")
|| ($_FILES["product_image"]["type"] == "image/png")
|| ($_FILES["product_image"]["type"] == "image/pjpeg"))
&& ($_FILES["product_image"]["size"] < 200000000))
  {
  if ($_FILES["product_image"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
   

    if (file_exists("products/" . $_FILES["product_image"]["name"]))
      {
      echo $_FILES["product_image"]["name"] . " already exists. ";
      }
    else
      {
		$imagename = $_FILES["product_image"]["name"];   
      move_uploaded_file($_FILES["product_image"]["tmp_name"],
     "products/" . $_FILES["product_image"]["name"]);
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
$sql="INSERT INTO products (product_code,product_name,product_image,sales_price_piece)
VALUES
('$_POST[code]','$_POST[name]','$imagename','$_POST[price]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: '.mysqli_connect_error());
  }
echo "1 record added";
mysqli_close($con);
?>
