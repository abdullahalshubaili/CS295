<p> Please complete this form to calculate the total cost: </p> 
<form action="calcform.php"  method="post">
Price: <input type="text" name="price" value="">
<br></br>
Quantity: <input type="text" name="quantity" value="">
<br></br>
Discount: <input type="text" name="discount" value="">
<br></br>
Tax: <input type="text" name="tax" value="">
<br></br>

<p>Shipping method: <select name="shipping">
	<option value  = "Slow and steady $5.00">Slow and steady $5.00</option>
	<option value  = "fast $50.00">fast $50.00</option>
	</p>
		<br /><br />
	
 <br><input type="submit" value="calculate">
 </form>