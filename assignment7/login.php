<?php 
print '<h2>Login Form</h2>';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ( (!empty($_POST['username'])) && (!empty($_POST['password'])) ) 
	{	
	if ( (strtolower($_POST['username']) == 'abdul') && ($_POST['password'] == 'abdul') ) 
	{ 
	session_start();
	$_SESSION['username'] = $_POST['username'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['login'] = time();		
	ob_end_clean(); 
	header ('Location: logout.php');
	exit();		
	} else {
		print '<p>The submitted username address and password do not match those on file!<br />Go back and try again.</p>';
		}
	} else {
		print '<p>Please make sure you enter both an username address and a password!<br />Go back and try again.</p>';
	}
} else {
	print '<form action="login.php" method="post">
	<p>Username: <input type="text" name="username" size="20" /></p>
	<p>Password: <input type="password" name="password" size="20" /></p>
	<p><input type="submit" name="submit" value="Log In!" /></p>
	</form>';
	echo 'Username: abdul <br> Password: abdul</br>';
}
?>