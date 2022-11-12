<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
</head>
<body>


<?php

header('location:seller_dash.php'); 
	include('config_con.php');

	$email = $_POST["email"];
	$password = $_POST["password"];


	$sql="SELECT * FROM seller WHERE email='$email' AND password='$password' ";
	$result = $conn->query($sql);
		if($result->num_rows>0){
			header('location:seller_dash.php'); 
			while ($row = $result->fetch_assoc()) {
				
				$id=$row['seller_id'];
			}
 
		}else{
			echo 'Username or password incorrect please <a href="login.php">try again!</a> ';
		}




 
$_SESSION['seller_id'] = $id;

?>


</body>
</html>