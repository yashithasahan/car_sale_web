<?php
	session_start();

?>






<!DOCTYPE html>
<html lang="en-US">
	<head>
	  <meta charset="utf-8">
		<title>Login</title>
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
input[type=password], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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

input[type=text]:hover {
  
  border: 1px solid #258bdb;
}
input[type=password]:hover {
  
  border: 1px solid #258bdb;
}

.loging {
  border-radius: 5px;
  background-color: ;
  padding: 200px;
  padding-left: 550px;
}
</style>	

<body bgcolor="#f7fffe">

<?php




?>




<?php

require_once "config_con.php";
	
$error = ''; 
if(isset($_POST['login']))
{
	$email = $_POST["email"];
	$password = $_POST["password"];


	$sql="SELECT * FROM User WHERE email='$email' AND password='$password' ";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);

	
	if($count>0)
			{
				$row = mysqli_fetch_assoc($result);
				
				$_SESSION['IS_LOGIN'] = 'yes';
				$_SESSION['id'] = $row['user_id'];
				
				$_SESSION['name'] = $row['firstname'];
				
				
				if($row['role']==1)
				{	
					$_SESSION['ROLE'] = $row['role'];
					header('location:admin_dash.php');
					die();
				}
				
				else if($row['role']==2)
				{
					
					header('location:seller_dash.php');
					die();
				}
			}
	else
			{
					$error = 'Please Enter Correct Login Credentials !'; 
			}
}



?>





	<?php include('menu_top.php');?>
		<div class="loging" id="login">
		  <form name='form-login' action='' method='post'>
			<span ></span>
			  <input type="text" id="user" name="email" placeholder="Username" required >
		   
			<span ></span>
			  <input type="password" id="pass" name="password" placeholder="Password" required >
			 <div> 
			<a class="small" style="color:red;"><?php  echo $error?></a></div>
			<input type="submit" value="Login" id="login" name="login">
		</form>
	</div><hr style="color:green;">
	<?php include('menu_bot.php');?>
	


<?php


if(isset($_SESSION['IS_LOGIN'])== 'yes')
	{
		echo 'You are Logged in  as, ';
		echo $_SESSION['name'];

		echo '.';
		echo '<a href="seller_dash.php">go to Seller dash board</a>';
		echo "<br>";
		echo 'or Log in to another account';
		header("chk.php");
		die();
	}else{
		echo 'Please Log in,';
	}







?>



	</body>
	
</html>