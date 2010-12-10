<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>If/Else : Conditionals</title>
	
</head>

<body>

	<h1>If/Else : Conditionals</h1>
	
	<?php
	
	/**
	 * If statements and chains of if/else statements are the simplest control for the logical flow of an application.
	 * Frequently, we may want to take one action if a condition is met and a different action if the condition is not met.
	 * For instance, if a customer order meets a minimum for free shipping, we will want to forego adding shipping costs, and,
	 * if another customer doesn't meet the minimum we will want to add shipping costs.
	 *
	 * PHP provides a mechanism for accomplishing this with if/else and if/elseif/else control statements. This is what they look
	 * like: 
	 *	if (CONDITION HERE) {
	 *
	 *		DO SOME ACTION HERE...
	 *
	 *	} elseif (SECOND CONDITION HERE) {
	 *
	 *		DO A DIFFERENT ACTION HERE...
	 *
	 *	} else {
	 *
	 *		DO A THIRD ACTION HERE...
	 *
	 *	}
	 *
	 * Let's use create an if/else statement that will handle the free shipping minimum scenario above.
	 */
	
		$order_total = 100;
		$free_shipping_minimum = 50;
		
		if ($order_total < $free_shipping_minimum && $order_total >= 0) {
		
			echo 'You will have to pay shipping';
			
		} elseif ($order_total >= $free_shipping_minimum) {
			
			echo 'Yippeee! Shipping is free for you';
			
		} else {
			
			echo 'We seem to owe you money on this order. I think we should go into a different business.';
			
		}
	?>

</body>
</html>
