	<html>
<head> 
<title> Calculation</title>
</head>
<body> 
<?php 

$p = $_POST['p'];
$r = $_POST['r'];
$t = $_POST['t'];
$n= $_POST['n'];
$r = $r/100;
$a1 = (1+ $r/$t);
$a2 = pow($a1, $n*$t);
$a = $p * $a2;
$a4 = round($a);
print "the total is $ $a4";


?>
</body>
</html>