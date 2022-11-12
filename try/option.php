<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form  method="post">
<p>How would you like to pay?</p><br>
<select name="Pay_options">

	<option value="No Payment Options Selected">[Choose Option Below]</option>
	<option value="Credit Card">Credit Card</option>
	<option value="Debit">Debit</option>
	<option value="Check">Check</option>
</select><br>
<input type="submit" name="button" value="Submit"/></form>


<?php
if(isset($_POST['button'])){
	$Pay_options=$_POST['Pay_options'];

	echo '<b>The pay method that you have chose to use is:</b>' .'<br>' . $Pay_options;
}
?>


</body>
</html>


