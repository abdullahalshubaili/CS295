<?php

echo "<h1>script1</h1>";

$host = 'localhost'; 
$username = 'alshubaia'; 
$password = 'alshubaia';
$database = 'test';

$connection = mysql_connect($host,$username,$password); 
echo " mysql_connect() returns a resource: ".$connection."<br/>\n";

$db_select_result = mysql_select_db($database,$connection);
echo " mysql_select_db() returns a boolean value: ". $db_select_result." <br/>\n";


echo "<h2>Query 1</h2>";
$query1 = "SELECT * FROM users_alshubaia";


/* I had to comment out this sql command because i already created the table.
if i dont comment it out, the scrip wont run

"CREATE TABLE users_alshubaia (
username VARCHAR(50) NOT NULL PRIMARY KEY,
password VARCHAR(50) NOT NULL,
first_name VARCHAR(50) NOT NULL,
last_name VARCHAR(50) NOT NULL,
date_of_birth DATE NOT NULL,
email VARCHAR(100) NOT NULL)"; 
*/

$result1 = mysql_query($query1);
$data1 = array();
if ($result1!==false) {
	while($row = mysql_fetch_assoc($result1)) {
		$data1[] = $row;
	}
}
else {
	die(mysql_error());
}

echo "<code>$query1</code>";

echo "<pre>";
print_r($data1);
echo "</pre>";



echo "<h2>Query 2</h2>";
$query2 = "SELECT * FROM users_alshubaia ORDER BY date_of_birth DESC"; // FILL in this variable with the right query to get all the rows the users table in order of their date of birth from oldest to youngest
$result2 = mysql_query($query2);
$data2 = array();
if ($result2!==false) {
	while($row = mysql_fetch_assoc($result2)) {
		$data2[] = $row;
	}
}
else {
	die(mysql_error());
}

echo "<code>$query2</code>";

echo "<pre>";
print_r($data2);
echo "</pre>";



echo "<h2>Query 3</h2>";
$query3 = "select * from users_alshubaia where last_name = 'Jones' ORDER BY last_name, first_name ASC "; 

$result3 = mysql_query($query3);
$data3 = array();
if ($result3!==false) {
	while($row = mysql_fetch_assoc($result3)) {
		$data3[] = $row;
	}
}
else {
	die(mysql_error());
}
echo "<code>$query3</code>";

echo "<pre>";
print_r($data3);
echo "</pre>";

?>