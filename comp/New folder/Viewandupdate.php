<?php
			$con=mysqli_connect("localhost","root","","rft_gw");
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
			$sql = "SELECT * FROM products ORDER BY product_code";
 
$result = mysqli_query($con,$sql) or die($sql."<br/><br/>".mysqli_error());
 
$i = 0;
 
echo '<table  border="1" bordercolor="#336600" cellpadding="10" cellspacing="0" bgcolor="#CCFF99">';
echo '<tr>';
echo '<td bgcolor="#CCFF66"><b>Product Code</b></td>';
echo '<td bgcolor="#CCFF66"><b>Name</b></td>';

echo '<td bgcolor="#CCFF66"><b>Price</b></td>';
echo '<td bgcolor="#CCFF66"><b>Image</b></td>';

echo '</tr>';
 
echo "<form name='form_update' method='post' action='products_update_confirm.php'>\n";
while ($products = mysqli_fetch_array($result)) {
	
	echo '<tr>';
	
		echo "<td><p><input type='text' size='6' readonly='true' name='product_code[$i]' value='{$products['product_code']}' /></p></td>";
		
		
		echo "<td><p><input type='text' size='8'  name='product_name[$i]' value='{$products['product_name']}' /></p></td>";
	
	echo "<td><input type='text' size='5' style='text-align:right;' name='sales_price_piece[$i]' value='{$products['sales_price_piece']}' /></td>";
	$imagedisplay =$products['product_image']; 
	
	echo "<td><p><img src = 'products/$imagedisplay' height = 70 width = 100></p></td>";

	
	echo '</tr>';
	++$i;
}
echo '<tr>';
echo "<td><input type='submit' value='submit' /></td>";
echo '</tr>';
echo "</form>";
echo '</table>';
		
  ?> 

