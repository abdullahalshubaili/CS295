<html>
<head> 
<title> Calculation</title>
</head>
<body> 
<?php 

$principle = $_POST['principle'];
$rate = $_POST['rate'];
$time = $_POST['time'];

$rate1 = $rate/100;
$total = $principle * (1 + $rate1 * $time);
$simple_interest = $total - $principle;
/*
$rate1 = $rate/100; 
$principle1 = $principle / ( 1 + ($rate1 * $time));
$principle2 = round($principle1);
*/

print "<p>the total is: <br />
$<span class=\"number\">$principle</span> principle.
and the rate interest is %<span class=\"number\">$rate1</span>
per <span class=\"number\">$time</span> year(s).  <br />
after <span class=\"number\">$time</span> the total amount is
$<span class=\"number\">$total</span></br>
Simple interest is $<span class=\"number\">$simple_interest</span> 
after
<span class=\"number\">$time</span> year(s). <br />";

?>
</body>
</html>