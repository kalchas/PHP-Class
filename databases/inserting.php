<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Adding Data to A Database</title>
	
</head>

<body>
	
	<h1>Inserting Records</h1>
	
	<?php
	
	if (isset($_POST['fname'])) {
	
		require_once(realpath(dirname(__FILE__) . '/connection.php')); //This will provide a connection to the database.
		
		$sql = "INSERT INTO `addresses` (
			
			`fname`,
			`lname`,
			`street_address_1`,
			`street_address_2`,
			`city`,
			`state`)
		
		VALUES (
			
			'{$_POST['fname']}', 
			'{$_POST['lname']}', 
			'{$_POST['saddress1']}', 
			'{$_POST['saddress2']}', 
			'{$_POST['city']}', 
			'{$_POST['state']}'
		
		)";
		
		$query = mysql_query($sql, $connection);
		
		if (true == $query) {
			
			echo '<p>Thanks for adding your address.</p>';
		
		} elseif (false == $query) {
			
			echo '<p>There was a problem adding your address: ' . mysql_error() . '</p>';
			
		} else {
			
			echo '<p>There was an unknown problem.</p>';
			
		}
		
	} else {
	
	?>
	<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
		<fieldset>
			<legend>Personal Information</legend>
			<label>First Name <input name="fname" type="text" /></label>
			<br />
			<label>Last Name <input name="lname" type="text" /></label>
		</fieldset>
		<fieldset>
			<legend>Address</legend>
			<label>Street Address 1<input name="saddress1" type="text" /></label>
			<br />
			<label>Street Address 2<input name="saddress2" type="text" /></label>
			<br />
			<label>City<input name="city" type="text" /></label>
			<br />
			<label>State<input name="state" type="text" /></label>
		</fieldset>
		<input type="submit" value="Add My Address" />
	</form>
<?php 

	}

?>
</body>
</html>
