<html>
<head> 
<title> Calculation</title>
</head>
<body> 
<?php 

$num = $_POST['num'];

function checkforprimary($num) 
{
	  $two = 2;
        while ($two < $num) {
            if ($num % $two){
                 $two++;
                continue;
            }
            return false;
        }
        return true;	
    }
	
	if(is_numeric($num)){
		if(checkforprimary($num))
			print "<p>it's a prime number <br />
					<span class=\"number\">$num</span> .<br />" ;
		else 
			print "<p>it's not a prime number <br />
					<span class=\"number\">$num</span> .<br />" ;
		}
		else	
			print "<p>this is not a number:
					<span class=\"number\">$num.</br>
					please enter an integer.</span><br />" ;

	
?>
</body>
</html>