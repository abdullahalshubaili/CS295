<html xmins="http://wwww3.org/1999/xhtml; xml;lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Grades</title>
</head>
<body>
<?php 

$words_array = explode(' ', $_POST['words']);

//sort the array:\
sort($words_array);

// turn the array back into a string:
$string_words = implode('<br />',$words_array);

//print the results:
print "<p>An alphabetical version of your list is: <br />$string_words</p>";

?>
</head>
</body>