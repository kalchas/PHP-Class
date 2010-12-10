<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Associative Arrays</title>
</head>
<body>
	
	<?php
	
		/**
		 * Php arrays are generally put into one of two categories. They can be indexed (what we've been looking at already)
		 * or they can be associative (what we're about to look at). There isn't much difference, except that with an indexed
		 * array, we don't care what the keys are, and with an associative array, we do.
		 */
		
		$assoc_array = array(
			
			"Charlie"			=>	"good son",
			"Mephistopheles"	=>	"bad son",
			"Greta"				=>	"good daughter"
			
		);
		
		echo '<pre>';
		
		print_r($assoc_array);
		
		echo '</pre><hr />';
		
		/**
		 * In the above example, the value of each element in the array stores some data about the key. This is one good use
		 * of an associative array. Another good use for associative arrays is handling input from html. The example below
		 * illustrates this.
		 */
		
		if (isset($_GET['shipping_method'])) { //See if a shipping_method is specified (this is a janky way of )
			
			echo '<pre>';
			
			print_r($_GET);
			
			echo '</pre></hr />';
			
			//Now, let's do something with the shipping method and weight information if it's available.
			
			$shipping_prices_per_lb = array( //Store shipping prices as an associative array.
			
				'DHL' 			=> 25.00,
				'UPS' 			=> 35.00,
				'FedEx' 		=> 60.00,
				'USPS Air' 		=> 30.00,
				'USPS Ground' 	=> 18.50
				
			);
			
			$cost = $_GET['weight'] * $shipping_prices_per_lb[$_GET['shipping_method']];
			
			echo "<p>The cost of shipping is : $cost </p>";
			
		}
		
		?>
			
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="get">
				<label>Weight (in lbs): 
					<input name="weight" type="text" value="Enter Weight Here." />
				</label>
				<br />
				<select name="shipping_method">
					<option>DHL</option>
					<option>UPS</option>
					<option>FedEx</option>
					<option>USPS Air</option>
					<option>USPS Ground</option>
				</select>
				<br />
				<input type="submit" value="Get My Shipping Cost" />
			</form>
			
		<?php
	
	?>

</body>
</html>
