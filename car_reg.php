<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Car Sell</title>
</head>
<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=file], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=text]:hover {
  
  border: 1px solid #258bdb;
}
input[type=submit] {
  width: 50%;
  background-color: #2196F3;
  color: white;
  padding: 12px 20px;
  margin: 8px 0px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #258bdb;
}

.loging {
  border-radius: 5px;
  background-color: ;
  padding: ;
  padding-left: 550px;
}
</style>

<body>
	<?php include('menu_top.php');?>


	<div class="loging">
	<form action="car_reg_action.php" method="post" enctype="multipart/form-data">
		
		

			<input type="text" name="title" required placeholder="Title"><br/><br/>
			<input type="text" name="brand" required placeholder="Brand"><br/><br/>
			<input type="text" name="model" required placeholder="Model"><br/><br/>
			<input type="text" name="ccty" required placeholder="City"><br/><br/>
			<input type="text" name="condtn" required placeholder="Condition"><br/><br/>
			<input type="text" name="price" required placeholder="Price"><br/><br/>
			<input type="text" name="year" required placeholder="Year"><br/><br/>
			<input type="text" name="descrptn" required placeholder="Description"><br/><br/>
			<input type="text" name="contct" required placeholder="Contact"><br/><br/>
			<input type="file" name="image_up"  required placeholder="Image" >
			<input type="submit" name="submit" value="Publish"><br><br><br><br><br><br><br>

	</form>
</div>
<?php include('menu_bot.php');?>
</body>
</html>