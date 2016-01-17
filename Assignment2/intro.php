<?php

	/* Some work with strings & numbers & dates.  */

	$first_name = "Abdullah"; // insert your first name here
	$last_name = "Alshubaili"; // insert your last name here.
	$age = 23; // insert your age here.
	$num_classes = 4; // insert your number of classes here
	
	$full_name =  "$first_name  $last_name";// finish this line.
	
	echo $full_name ."<br/>";
	
	/* how many letters are there in your first name, last name and full name? find out programmatically */
	
	$letters_first = strlen($first_name);;	// finish this line
	
	echo "There are  $letters_first  in my first name<br/>";
	
	 	// finish this line
		$letters_last = strlen($last_name);
	echo "There are  $letters_last in my last name<br/>";
	
	 	// finish this line
		$letters_first = $letters_first + $letters_last;  
	echo "There are  $letters_first in my full name<br/>";
	
	
	
	/* now we want to talk about your age. */
	
	echo "I am  $age  years old.<br/>";



	/* now we want to talk about classes */
	
	echo "I am taking  $num_classes  classes this semester.<br/>";
	
	$num_other_classes = 2; // fill this in.
	echo "I am taking  $num_other_classes   classes this semester other than this one.<br/>";





?>