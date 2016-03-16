 <?php
 
 if(isset($_POST['font_size'], $_POST['font_color'])){
	//create and send cookie 
	setcookie('font_size', $_POST['font_size'], time()+10000000, '/alshubaia');
	setcookie('font_color', $_POST['font_color'],time()+10000000, '/alshubaia');
	
	//message to be printed later:
	$msg = '<P>Your settings have been entered click <a href="cookie.html">here</a> to </p>';
	}
	//end of sumbitted IF
?>
<!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-Type" content ="text/html; charset=utf-8"/>
	<title> Customize your setting</title>
</head>
<body>
<?php //if cookie were sent, print a message.
if(isset ($msg)){
	print $msg;
	}
	?>
	
<p>Use this form to set your preference:</p>
<form action="new.php" method="post">
	<select name="font_size">
		<option value="">font size</option>
		<option value="xx-small">xx-small</option>
		<option value="x-small">x-small</option>
		<option value="small">small</option>
		<option value="medium">medium</option>
		<option value="large">large</option>
		<option value="x-large">x-large</option>
		<option value="xx-large">xx-large</option>
		</select>
		<select name="font_color">
		<option value="">Font Color</option>
		<option value="999">Gray</option>
		<option value="0c0">Green</option>
		<option value="00f">Blue</option>
		<option value="c00">Red</option>
		<option value="000">Black</option>
		</select>
		<input type="submit" name="submit" value="set my preference" />
	</form>
	</body>
	</html>