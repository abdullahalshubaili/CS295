<?php
session_start();


print '<h2>Welcome</h2>';
print '<p>Hello, ' . $_SESSION['username'] . '</p>';
print '<p>Your password is ' . $_SESSION['password'] . '</p>';

print '<p>You have been logged in since: ' . date('g:i a', $_SESSION['login']) . '</p>';
//print '<p><a href="logout.php">Click here to logout.</a></p>';



?>
<p><a href="login.php">Click here to login again.</a></p>

<?PHP
$_SESSION = array();
session_destroy();
?>