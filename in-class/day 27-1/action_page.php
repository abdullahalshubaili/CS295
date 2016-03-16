<html>
<head> 
<title> Calculation</title>
</head>
<body> 
<?php 

$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']); //trim = remove spaces at the end
$posting = trim($_POST['posting']); //itrim = remove spaces at the start

$name = $first_name . ' ' .$last_name;

$words = str_word_count($posting);

$posting = str_ireplace('badword', 'XXXXX', $posting);
$posting = str_ireplace('damn', 'XXXXXX', $posting);

print "<div> thank u. $name, for you posting:
<p>$posting</p>
<p>($words words)</p></div>";

?>
</body>
</html>