<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create a Table</title>
</head>
<body>
<?php 
if ($dbc = @mysql_connect('localhost', 'alshubaia', 'alshubaia')) {
	
	// Handle the error if the database couldn't be selected:
	if (!@mysql_select_db('test', $dbc)) {
		print '<p style="color: red;">Could not select the database because:<br />' . mysql_error($dbc) . '.</p>';
		mysql_close($dbc);
		$dbc = FALSE;
	}

} else { // Connection failure.
	print '<p style="color: red;">Could not connect to MySQL:<br />' . mysql_error() . '.</p>';
}

if ($dbc) {

	// Define the query:
	$query = 'DROP TABLE users_alshubaia1';
/*	(
entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(100) NOT NULL,
entry TEXT NOT NULL,
date_entered DATETIME NOT NULL
)';*/
	
	// Execute the query:
	if (@mysql_query($query, $dbc)) {
		print '<p>The table has been created!</p>';
	} else {
		print '<p style="color: red;">Could not create the table because:<br />' . mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
	}
		
	mysql_close($dbc); // Close the connection.

}
?>
</body>
</html>