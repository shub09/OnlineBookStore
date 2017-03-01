<?php
	include('shopping_cart.class.php');
	session_start();
	$Cart = new Shopping_Cart('shopping_cart');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Shopping Cart</title>
		<link href="css/custom.css" rel="stylesheet">
		<script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
		<script src="js/jquery.color.js" type="text/javascript"></script>
		<script src="js/cart.js" type="text/javascript"></script>
		<link href="css/cart.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">

	</head>
	<body>
		<div id="container">
			<h4>Bill</h4>
			<?php include 'session.php'; if($session!="Guest") : ?>
			<?php 
			$con=mysqli_connect("localhost","root","","bookdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
  $result = mysqli_query($con,"SELECT * FROM user WHERE fname = '".$session."'");

while($row = mysqli_fetch_array($result))
  {
    $fname=$row['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $address=$row['address'];
}
}
  
mysqli_close($con);
?>

			<h6>Name: <?php echo $fname.' '.$lname; ?></h6>
			<h6>Shipping Address: <?php echo $address; ?></h6>
			<h6>Payment: Cash on Delivery </h6>
			<h6>Shipping charges: Rs. 300 </h6>
			<?php if ( $Cart->hasItems() ) : ?>
			<form action="cart_action.php" method="get">
				<table id="cart">
					<tr>
						<th>Quantity</th>
						<th>Item</th>
						<th>Order Code</th>
						<th>Unit Price</th>
						<th>Total</th>
					</tr>
					<?php
						$total_price = $i = 0;
						foreach ( $Cart->getItems() as $order_code=>$quantity ) :
							$total_price += $quantity*$Cart->getItemPrice($order_code);
					?>
						<?php echo $i++%2==0 ? "<tr>" : "<tr class='odd'>"; ?>
							<td class="quantity center"><?php echo $quantity; ?></td>
							<td class="item_name"><?php echo $Cart->getItemName($order_code); ?></td>
							<td class="order_code"><?php echo $order_code; ?></td>
							<td class="unit_price">Rs.<?php echo $Cart->getItemPrice($order_code); ?></td>
							<td class="extended_price">Rs.<?php echo (($Cart->getItemPrice($order_code))*$quantity); ?></td>
						</tr>
					<?php endforeach; ?>
					<tr><td colspan="4"></td><td id="total_price">Rs.<?php echo $total_price; ?></td></tr>
				</table>
				<input class="btn btn-primary" type="button" value="Print" onclick="window.print()"/>
			</form>
			<?php else: ?>
				<p class="center">You have no items in your cart.</p>
			<?php endif; ?>
			<?php else: ?>
			<h6>Please sign in to place an order</h6>
			<?php endif; ?>
		</div>
	</body>
</html>