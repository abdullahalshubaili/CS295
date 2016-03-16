<?php
		$cookie_name = "username";
		$cookie_value = $_POST['username'];
		setcookie($cookie_name, $cookie_value, time() + (3600), "/"); 
		$cookie_pass = "password";
		$cookie_passvalue = $_POST['password'];
		setcookie($cookie_pass, $cookie_passvalue, time() + (3600), "/"); 
?>
<html>
	<head>
		<title>Login Screen</title>
	</head>
	<body>
		<?php
		if(isset($_COOKIE["username"])){
			echo "User Name: " . $_COOKIE[$cookie_name] = $cookie_value . "</br>";
		}else{
			echo "no UserName </br>";
		}
		if(isset($_COOKIE["password"])){
			echo "password: " . $_COOKIE[$cookie_pass] = $cookie_passvalue. "</br>";
		}else{
			echo "no password";
		}	
		?>	
	</body>
</html>