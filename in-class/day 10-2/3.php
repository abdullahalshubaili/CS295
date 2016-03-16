<html xmins="http://wwww3.org/1999/xhtml; xml;lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Grades</title>
</head>
<body>
<?php
//create the array:
$grades = array(
'Richard' => 94,
'Sherwood' => 82,
'Toni' => 75,
'Parker' => 89,
'Melisa' => 73,
'Roddy' => 85
);

//print the original array:
print '<p>Originally the array looks like this <br />';
foreach ($grades as $student => $grade) {
	print "$student: $grade<br />\n";
}
print '</p>';


//sort by value in reverse order, then print again:
arsort ($grades);
print '<p>After sorting the array by value using arsort(), the array looks like this:<br />';
foreach ($grades as $student => $grade) {
	print "$student: $grade <br />\n ";
}
print '</p>';

//sort by key, then print again:
ksort ($grades);
print '<p> after sorting the array by key using ksort(), the array looks like this : <br />';
foreach ($grades as $student => $grade) {
	print "$student: $grade <br />\n ";
}
print '</p>';	
?>
</body>
</html>
