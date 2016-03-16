<?php

echo "<h1>script2</h1>";

$host = 'localhost'; 
$username = 'alshubaia';
$password = 'alshubaia'; 
$database = 'test'; 

$connection = mysql_connect($host,$username,$password); 
echo " mysql_connect() returns a resource: ".$connection."<br/>\n";

$db_select_result = mysql_select_db($database,$connection);
echo " mysql_select_db() returns a boolean value: ". $db_select_result." <br/>\n";


echo "<h2>Query 2</h2>";

$new_data = array(
		'username'=> 'abdu',
		'password'=> 'hobla',
		'first_name'=> 'Abdul',
		'last_name'=> 'Alshubaili',
		'date_of_birth'=> '1992-4-4',
		'email'=> 'a@a.com');

$insert_query = "INSERT INTO users_alshubaia (username, password, first_name, last_name, date_of_birth, email)
 VALUES ('abdul', 'hobla', 'Abdul', 'Alshubaili', '1992-4-4', 'a@a.com')";
 /*
 ('tom', 'pass123', 'Thomas', 'Train', '1987-08-07', 'tom@asdf.com'),
('jim', 'f98d', 'Jim', 'Jones', '1987-08-07', 'tom@asdf.com'),
('rachael', 'yellow321', 'Rachael', 'Smith', '1982-01-15', 'rachael@comcast.com'),
('bob', 'green324', 'Robert', 'Johnson', '1945-02-04', 'bobby@hotmail.com'),
('anthony', 'redtulip', 'Anthony', 'Jones', '1973-05-21', 'aj@jones.com')";
*/

$insert_result = mysql_query($insert_query);

if ($insert_result && mysql_affected_rows() > 0) {
	echo "successfully added. new row id: ". mysql_insert_id() ;
}
else if (!$insert_result) {
	echo "there is a problem: ".mysql_error();
}


echo "<h2>Query All Rows</h2>";

$query1 = "SELECT * FROM users_alshubaia"; 

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