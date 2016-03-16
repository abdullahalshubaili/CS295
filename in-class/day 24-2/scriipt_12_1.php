<html>
<head>
<title> connect to mysql<title>
</head>
<body>
<?php

if($dbc = mysql_connect('localhost', 'username','password')){

print '<p> Successfully connected to mysql</p>';
mysql_close($dbc);
}else{
print '<p style="color: red;"> could not connect to mysql.</p>';
}
?>
</body>
</html>