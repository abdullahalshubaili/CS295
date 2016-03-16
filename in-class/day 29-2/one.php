<?php 
session_start();

define('TITLE', 'welcome to the club');
include('templates/header.html');

print '<h3> Welcome to the club</h3>';
print  '<p> Hello, ' . $_SESSION['email'] . '!</p>';

data_default_timezone_set('America/New_York');
print '<p> you have been logged in since: ' .data('g: i a', $_SESSION['loggedin']) . 
'</p>';

print '<p><a href=templates/footer.html';
?>