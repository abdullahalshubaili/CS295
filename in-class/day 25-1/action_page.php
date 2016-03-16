<head> 
<title> Forum Posting</title>
</head>
<body> 
<?php 



$principle = $_POST['principle'];
$rate = $_POST['rate'];
$time = $_POST['time'];

//to be continued

$rate1 = $rate/100; 
$principle1 = $principle / ( 1 + ($rate1 * $time))

 

?>
</body>
</html>




