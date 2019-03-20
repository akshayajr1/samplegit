<?php

require 'dbInfo.php';

$query = "SELECT Order_no, product_name, price, qty FROM products ORDER BY Order_no";
$resultObj = $connection->query($query);
 
if($result->num_rows >0)
{
    
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
th{
   width:250px; 
}

</style>
</head>
<body>
<h1> SNAP DEAL</h1>
<table>
<tr>
<td>
<img src="allensolly.jpg" width=200px height=200px>
<p id="p1"> ALLENSOLLY</p>
		<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
		</div></td>
	
<td>	
<img src="shirt2.jpg" width=200px height=200px>
<p id="p1"> DENIM</p>
		<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
		</div></td>

        <td>	
<img src="shirt3.jpg" width=200px height=200px>
<p id="p1">PETER ENGLAND</p>
		<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
		</div></td>

        <td>	
<img src="shirt4.jpg" width=200px height=200px>
<p id="p1">PARKAVENUE</p>
		<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
		</div></td>

        <td>	
<img src="shirt5.jpg" width=200px height=200px>
<p id="p1">SHARP</p>
		<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
		</div></td>
</tr>
</table>
<br>
<br>
<br>
<?php
if(!empty($_POST["quantity"])) {
		$productByCode = $connection->Query("SELECT * FROM products");
		$itemArray = array($productByCode[0]=>array('name'=>$productByCode[0]["name"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
		
		if(!empty($_SESSION["cart_item"])) {
			if(in_array($productByCode[0],array_keys($_SESSION["cart_item"]))) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByCode[0] == $k) {
							if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								$_SESSION["cart_item"][$k]["quantity"] = 0;
							}
							$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
						}
				}
			} else {
				$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
			}
		} else {
			$_SESSION["cart_item"] = $itemArray;
		}
	}


?>

<?php
if(isset($_SESSION["cart_item"])){

?>	
<table>
<tr>
<th>Product_name</th>
<th>Quantity</th>
<th>order no</th>
<th>Price</th>

</tr>

<?php		
		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>

</body>
</html>

