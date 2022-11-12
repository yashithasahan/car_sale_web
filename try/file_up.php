<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<form action="upload.php" method="post" enctype="multipart/form-data">
		
		

			<label>Title</label> <input type="text" name="title"><br/><br/>
			<label>Brand</label> <input type="text" name="brand"><br/><br/>
			<label>Model</label> <input type="text" name="model"><br/><br/>
			<label>Condition</label> <input type="text" name="condtn"><br/><br/>
			<label>Price</label> <input type="text" name="price"><br/><br/>
			<label>Year</label> <input type="text" name="year"><br/><br/>
			<label>Description</label> <input type="text" name="descrptn"><br/><br/>
			
			<label>Contact Number</label> <input type="text" name="contct"><br/><br/>
			<input type="file" name="image_up">
			<input type="submit" name="submit" value="upload">

	</form>

</body>
</html>