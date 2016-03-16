<html xmins="http://wwww3.org/1999/xhtml; xml;lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-9"/>
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
'Saturday' => 'Cream of Broccoli'
);


$count1 = count ($soups);
print "<p> The soups array originally had $count1 elements.</p>";


//add elements to arrays
$soups['Thursday'] = 'Chicken Noodle';
$soups['Friday'] = 'Tomato';
$soups['Saturday']= 'Cream of Brocolli';


//count and print the number if elements again
$count2 = count ($soups);
print "<p> After adding 3 more soups, the array now has $count2 elements.</p>";

//print the content of the array 

print_r ($soups);

?>