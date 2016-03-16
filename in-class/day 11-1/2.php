<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<title>Hello, world!</title>
</head> 
<body>
<!-- define varibales 
-->

<?php
$year = 2016 ;//the current year
$june_avg = 88 ; //the avg temp for this month 
$page_title = 'weather report'; 
$num = 1999.9;
$formattedNum = number_format($num)."<br>";
echo $formattedNum;
$formattedNum = number_format($num, 3);
echo $formattedNum;
echo "<br>hi $year </br>";
print "<p> the year $year</p>";
print "<p> the june remp $june_avg </p>";
print "<p> the page title $page_title</p>";
?>
</body>
</html>