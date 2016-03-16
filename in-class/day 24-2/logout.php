<?php 
// Need the session:
session_start();
// Reset the session array:
$_SESSION = array();
// Destroy the session data on the server:
session_destroy();
// Define a page title and include the header:
define('TITLE', 'Logout');
include('templates/header.html');
?>
<h2>Welcome to the session logging in</h2>
<p>You are now logged out.</p>
<p>Thank you for using this site. We hope that you liked it.<br />
Blah, blah, blah...
Blah, blah, blah...</p>

<?php include('templates/footer.html'); ?>