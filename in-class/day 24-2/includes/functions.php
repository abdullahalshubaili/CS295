<?php 
function is_administrator($name = 'abdul', $value = 'abdul') 
{	
	if (isset($_COOKIE[$name]) && ($_COOKIE[$name] == $value)) 
	{
	return true;
	} else {
	return false;
	}
}

?>