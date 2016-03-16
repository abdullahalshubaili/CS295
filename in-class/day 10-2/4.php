<html xmins="http://wwww3.org/1999/xhtml; xml;lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Array checking</title>
</head>
<body>

<?php_egg_logo_guid
print "<p> yo9u want to add an event called <b>{$_POST['name']}</br> which takes place on:<br /> </p>"

//print each weekday:
if (isset($_POST['days'])AND is_array($_POST['days'])) {

	foreach ($_POST['days'] as $day) {
	print "$day<br />\n";
	}
}else {
	print 'please select at least one weekday for this event';
}
	
//complete the paragraph 
print '</p>';
?>
</body>
</html>