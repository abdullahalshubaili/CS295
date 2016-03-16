<body>
<?php 

$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];

//calculate the total:
$total = $price * $quantity;
$total = $total + $shipping;
$total = $total - $discount;

//Determine the tax rate:
$taxrate = $tax/100;
$taxrate = $tax + 1;

//Factor in the tax rate
$total = $total * $taxrate;

//calcuate the monthly payments:
$monthly = $total / $payments;

//print out the results 
print "<p> you have selected to purchase:<br />
<span class=\"number\">$quantity</span> widget(s) at <br/>
$<span class=\"number\">$price</span> price each plus a <br/>
$<span class=\"number\">$shipping</span> shipping cost and a<br/>
<span class=\"number\">$tax</span> percent tax rate <br/>
After your $<span class=\"number\">$discount</span>discoun. the total is <br/>
$<span class=\"number\">$total</span><br/>
Divide over <span class=\"number\">$payment</span> monthly payment<br/>
that would be $<span class=\"number\">$monthly</span> each. <br/></p>"
?>
</body>
