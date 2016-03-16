<html xmins="http://wwww3.org/1999/xhtml; xml;lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>No Soup For You!</title>
</head>
<body>
<h1> Mmm..soups</h1>
<?php 
$soups= array (
'Monday' => 'Clam Chowder',
'Tuesday' => 'Tomato',
'Wednesday' => 'Vegetarian',
'Thursday' => 'Chicken Noodle',
'Friday' => 'Tomato',
'Saturday' => 'Cream of Brocolli'
);

//print each key and value
foreach ($soups as $day => $soup) {
	print "<p>$day: $soup</p>\n";
	}

?>