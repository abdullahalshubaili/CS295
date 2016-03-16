<html xmins="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head> 
<meta http-equiv="Content-type" contect="text/html; charset=utf-8">
<title> Feedback </title> 
</head>
<body>
<?php
ini_set('display_errors', 1); //for debugging issues
error_reporting (E_ALL | E_STRICT); // show all possible problems!

$title = $_POST['title'];
$name = $_POST['name'];
$response = $_POST['response'];
$comments = $_POST['comments'];

print "<p> thank you. $title $name, for your comment.</p>
<p> you stated that you found this example to be '$response' and added:<br /> $comments</p>";

?>
</body>
</html>