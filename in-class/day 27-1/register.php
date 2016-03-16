<html>
<head> 
<title> Registration form</title>
<style type="text/css" media="screen">
	.error {color:red;}
	</style>
</head>
<body> 
<h1> Registration result</h1>
<?php 
/* this script receives seven values from register.html:
email, password, confirm, tear, terms, color, submit */

//address error managment, if u want.
//flag variable to track success:
//empty() //nothing user enters
//isset() //user enter somehting
$okay = TRUE;
//variables the email address:
if (empty($_POST['email'])) {
print '<p class="error">Please enter your email address. </p>';
$okay = FALSE;
}
if (empty($_POST['password'])) {
print '<p class="error">Please enter your password. </p>';
$okay = FALSE;
}
if ($_POST['confirm_password'] !==($_POST['password'])) { 
print '<p class="error">Please enter your password right. </p>'; 
$okay = FALSE;}

//validate DOB
if (is_numeric($_POST['year'])) {
$age = 2016 - $_POST['year']; }
 else {
print '<p class="error"> please ennter the year you were born as 4 digit</p>';
$okay = FALSE;}

//IF there were no errors, print message:
if ($okay) {
	print '<p> u have been successfuly registered (but not really). </p>';
	print '<p> u will turn $age this year. </p>';
}

?>
</body>
</html>