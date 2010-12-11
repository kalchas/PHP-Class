<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Updating Records</title>
	
</head>

<body>

	<h1>Updating Records</h1>
	
	<?php

		require_once(realpath(dirname(__FILE__) . '/connection.php')); //This will provide a connection to the database.
		
		if (isset($_POST['edit']) && !isset($_POST['confirm'])) {
			
			$sql = "SELECT `fname`, `lname`, `street_address_1`, `street_address_2`, `city`, `state` FROM `addresses` WHERE `id`={$_POST['edit']} LIMIT 1";
			
			$result = mysql_query($sql, $connection);
			
			if (false == $result) {
				
				echo '<p>We had trouble retrieving that record: ' . mysql_error() . '</p>';
				
			} else {
				
				while ($row = mysql_fetch_assoc($result)) {
					
					?>
						<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
							<input name="edit" type="hidden" value="<?php echo $_POST['edit']; ?>" />
							<input name="confirm" type="hidden" value="yes" />
							<fieldset>
								<legend>Personal Information</legend>
								<label>First Name <input name="fname" type="text" value="<?php echo $row['fname']; ?>" /></label>
								<br />
								<label>Last Name <input name="lname" type="text"  value="<?php echo $row['lname']; ?>" /></label>
							</fieldset>
							<fieldset>
								<legend>Address</legend>
								<label>Street Address 1<input name="saddress1" type="text" value="<?php echo $row['street_address_1']; ?>" /></label>
								<br />
								<label>Street Address 2<input name="saddress2" type="text" value="<?php echo $row['street_address_2']; ?>" /></label>
								<br />
								<label>City<input name="city" type="text" value="<?php echo $row['city']; ?>" /></label>
								<br />
								<label>State<input name="state" type="text" value="<?php echo $row['state']; ?>" /></label>
							</fieldset>
							<input type="submit" value="Update This Address" />
							<br />
							<a href="<?php echo $_SERVER['REQUEST_URI']; ?>">Cancel and Return to List</a>
						</form>
					<?php
					
				}
				
			}
			
		} elseif (isset($_POST['edit']) && 'yes' == $_POST['confirm']) {
			
			$sql = "UPDATE `addresses` SET
				
				`fname`='{$_POST['fname']}',
				`lname`='{$_POST['lname']}',
				`street_address_1`='{$_POST['saddress1']}',
				`street_address_2`='{$_POST['saddress2']}',
				`city`='{$_POST['city']}',
				`state`='{$_POST['state']}'
				
			WHERE `id`={$_POST['edit']} LIMIT 1";
			
			$query = mysql_query($sql, $connection);
			
			if (true == $query) {

				echo '<p>We successfully updated the record.</p>';

			} else {

				echo '<p>Oops, we had a problem: ' . mysql_error() . '</p>';

			}
			
		} elseif (isset($_POST['delete']) && !isset($_POST['confirm'])) {

			$sql = "SELECT `fname`, `lname` FROM `addresses` WHERE `id`={$_POST['delete']} LIMIT 1";

			$result = mysql_query($sql, $connection);

			if (false == $result) {

				echo '<p>There was a problem: ' . mysql_error() . '</p>';

			} else {

				while ($row = mysql_fetch_assoc($result)) {

					echo "<p>Are you sure you want to delete {$row['fname']} {$row['lname']} from the records?</p>";

				}

				?>
					<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
						<input name="delete" type="hidden" value="<?php echo $_POST['delete']; ?>" />
						<label><input checked="checked" name="confirm" type="radio" value="no" /> No, I DON'T want to delete this.</label><br />
						<label><input name="confirm" type="radio" value="yes" /> Yes, I DO want to delete this.</label><br />
						<input name="submit" type="submit" value="Submit" />
					</form>
				<?php

			}

		} elseif (isset($_POST['delete']) && 'yes' == $_POST['confirm']) {

			$sql = "DELETE FROM `addresses` WHERE id={$_POST['delete']} LIMIT 1;";

			$query = mysql_query($sql, $connection);

			if (true == $query) {

				echo '<p>We successfully deleted the record.</p>';

			} else {

				echo '<p>Oops, we had a problem: ' . mysql_error() . '</p>';

			}

		} else {

			$sql = 'SELECT 

				`id`,
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
						<th>&nbsp;</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>';

				while ($row = mysql_fetch_assoc($result)) {

					echo '<tr><td>' . $row['lname'] . '</td>';
					echo '<td>' . $row['fname'] . '</td>';
					echo '<td>' . $row['street_address_1'] . '</td>';
					echo '<td>' . $row['street_address_2'] . '</td>';
					echo '<td>' . $row['city'] . '</td>';
					echo '<td>' . $row['state'] . '</td>';
					echo '<td>
					<form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
						<input name="delete" type="hidden" value="' . $row['id'] . '" />
						<input type="submit" value="Delete" />
					</form>
					</td>';
					echo '<td>
					<form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
						<input name="edit" type="hidden" value="' . $row['id'] . '" />
						<input type="submit" value="Edit" />
					</form>
					</td>
					</tr>';

				}

				echo '</tbody></table>';

			}

		}

	?>

</body>
</html>
