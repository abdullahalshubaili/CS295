<?php

session_start();

$_SESSION = array();

session_destroy();

define('TITLE', 'Logout');
include('templates/header.html');
?>

<h3>welcome to the club</h3>
<p> you are now logged out</p>
<?PHP
include('templates/footer.html');
?>
