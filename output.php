<?php

require 'dbInfo.php';

$query = "SELECT * FROM products ORDER BY Order_no";
$resultObj = $connection->query($query);

if($resultObj->num_rows>0)
{
echo"<form  method='POST' action='code.php'>";
echo"<table>";
echo"<tr>";
echo"<th>Product_name</th>";
echo"<th>price</th>";
echo"<th>Pictures</th>";
echo"</tr>";
while($rowQuery = $resultObj->fetch_array())
{
	echo "<tr>";
echo "<td>".$rowQuery['product_name']."</td>";
echo "<td>".$rowQuery['price']."</td>";
echo "<td><img src='".$rowQuery['pictues']."'></td>";
echo "<td><button onclick='' name='submit' value=".$rowQuery['product_name'].">add to cart</button></td>"; 
echo"</tr>";
echo"</form>";
}



}
?>




<!DOCTYPE html>
<html>
<head>
<style>
h1
{
    text-align:center;
}
th,td{
   width:250px;
   height:100px; 
}
td{
	text-align:center;
}
img{
	width:100px;
	height:100px;
}
</style>
</head>
<body>
<h1> SNAP DEAL</h1>
</body>
</html>

