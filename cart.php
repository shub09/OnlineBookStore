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
			<h4>Shopping Cart</h4>
			<?php if ( $Cart->hasItems() ) : ?>
			<form action="cart_action.php" method="get">
				<table id="cart">
					<tr>
						<th>Quantity</th>
						<th>Item</th>
						<th>Order Code</th>
						<th>Unit Price</th>
						<th>Total</th>
						<th>Remove</th>
					</tr>
					<?php
						$total_price = $i = 0;
						foreach ( $Cart->getItems() as $order_code=>$quantity ) :
							$total_price += $quantity*$Cart->getItemPrice($order_code);
					?>
						<?php echo $i++%2==0 ? "<tr>" : "<tr class='odd'>"; ?>
							<td class="quantity center"><input type="text" name="quantity[<?php echo $order_code; ?>]" size="3" value="<?php echo $quantity; ?>" tabindex="<?php echo $i; ?>" /></td>
							<td class="item_name"><?php echo $Cart->getItemName($order_code); ?></td>
							<td class="order_code"><?php echo $order_code; ?></td>
							<td class="unit_price">Rs.<?php echo $Cart->getItemPrice($order_code); ?></td>
							<td class="extended_price">Rs.<?php echo (($Cart->getItemPrice($order_code))*$quantity); ?></td>
							<td class="remove center"><input type="checkbox" name="remove[]" value="<?php echo $order_code; ?>" /></td>
						</tr>
					<?php endforeach; ?>
					<tr><td colspan="4"></td><td id="total_price">Rs.<?php echo $total_price; ?></td></tr>
				</table>
				<a class="btn btn-primary" href="bill.php">Place order</a>
			</form>
			<?php else: ?>
				<p class="center">You have no items in your cart.</p>
			<?php endif; ?>
		</div>
	</body>
</html>