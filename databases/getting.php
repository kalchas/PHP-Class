<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Getting Data from a Database</title>
	
</head>

<body>
	
	<h1>Getting Data from a Database</h1>

<?php

	require_once(realpath(dirname(__FILE__) . '/connection.php')); //This will provide a connection to the database.

	$sql = 'SELECT 
	
		`fname`, 
		`lname`, 
		`street_address_1`, 
		`street_address_2`, 
		`city`, 
		`state` 
	
	FROM `addresses` 
	
	ORDER BY `lname` DESC';
	
	$result = mysql_query($sql, $connection);
	
	if (false == $result) {
		
		echo '<p>We had trouble retrieving the records: ' . mysql_error() . '</p>';
		
	} else {
		
		echo '<table>
		<thead>
			<tr>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Street Address 1</th>
				<th>Street Address 2</th>
				<th>City</th>
				<th>State</th>
			</tr>
		</thead>
		<tbody>';
		
		while ($row = mysql_fetch_assoc($result)) {
			
			echo '<tr><td>' . $row['lname'] . '</td>';
			echo '<td>' . $row['fname'] . '</td>';
			echo '<td>' . $row['street_address_1'] . '</td>';
			echo '<td>' . $row['street_address_2'] . '</td>';
			echo '<td>' . $row['city'] . '</td>';
			echo '<td>' . $row['state'] . '</td></tr>';
			
		}
		
		echo '</tbody></table>';
		
	}

?>

</body>
</html>
