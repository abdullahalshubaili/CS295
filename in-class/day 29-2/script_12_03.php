<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create the Database</title>
</head>
<body>
<?php // Script 12.3 - create_db.php

if ($dbc = @mysql_connect('localhost', 'abdul', 'abdul')) {
	
	print '<p>Successfully connected to MySQL!</p>';
	
	// Try to create the database:
	if (mysql_query('CREATE DATABASE myblog', $dbc)) {
		print '<p>The database has been created!</p>';
	} else { // Could not create it.
		print '<p style="color: red;">Could not create the database because:<br />' . mysql_error($dbc) . '.</p>';
	}
	
	// Try to select the database: remove @s
	if (mysql_select_db('myblog', $dbc)) {
		print '<p>The database has been selected!</p>';
	} else {
		print '<p style="color: red;">Could not select the database because:<br />' . mysql_error($dbc) . '.</p>';
	}
	
	mysql_close($dbc); 

} else {

	print '<p style="color: red;">Could not connect to MySQL:<br />' . mysql_error() . '.</p>';

}

?>
</body>
</html>