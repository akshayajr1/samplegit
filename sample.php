<?php

$dbPassword = "shoppingcart";
$dbUserName = "cart";
$dbServer = "localhost";
$dbName = "product";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

?>
<?php
$Item1 = array('order_no'=>test1, 'product_name'=>ProductTest1, 'Price'=>10.00);

?>

<html>
<head>

</head>
<body>
<div id="container">
<div id="main">
<table>
<tr>
<th>order_no</th>
<th>Name</th>
<th>Price</th>
<th>Action</th>
</tr>
<tr>
<td><?php echo $product_name[product_name]; ?></td>
<td><?php echo $Item1[name]; ?></td>
<td><?php echo '£'. number_format($Item1[Price],2); ?></td>
<td><a href=#>Add To Cart</a></td>
</tr>
<tr>
<td><?php echo $Item2[SKU]; ?></td>
<td><?php echo $Item2[name]; ?></td>
<td><?php echo '£'. number_format($Item2[Price],2); ?></td>
<td><a href=#>Add To Cart</a></td>
</tr>
<tr>
<td><?php echo $Item3[SKU]; ?></td>
<td><?php echo $Item3[name]; ?></td>
<td><?php echo '£'. number_format($Item3[Price],2); ?></td>
<td><a href=#>Add To Cart</a></td>
</tr>
</table>
<input id="Proceed" type="Submit" value="Proceed">
</div>
</div>
</body>
</html>