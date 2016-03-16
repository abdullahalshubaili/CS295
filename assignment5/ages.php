<?php

	// Some Basic work with arrays.
	

	// initialize an array to store your friends and family and their ages.
	$ages = array('Abdul'=>24,'Sami'=>21,'Majid'=>23,'Hadi'=>22,'Fadi'=>25,'Khalid'=>32,'Ali'=>42,'Mo'=>33);

	// add some people's ages to the array (at least 8)
	//$age['bob swenson'] = 73;
	//...	// sort the array and print out your friends in alphabetical order,
	//(you want to sort by key of the array c)
	$age = ksort($ages);
	echo "Here's my friends and their ages sorted alphabetical:<br/>";
		// print out...
		foreach($ages as $a => $age){
		echo "$a : $age </br>";
		}

	// now sort the array by age increasing, and display it.
	$age = asort($ages);
	echo "<br>Here's my friends and their ages sorted by increasing ages:<br/>";
	// now print out the array.
	foreach($ages as $a => $age){
	echo "$a : $age </br>";
	}
	

	$oldest_friend = max($ages);   // finish this statement with the right function.
	echo "<br>My oldest friend is $oldest_friend years old <br/>"; 
	
	$youngest_friend = min($ages); // finish this statement with the right function.
	echo "<br>My youngest friend is $youngest_friend years old <br/>"; 




?>