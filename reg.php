<?php 
session_start();
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
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

input[type=text]:hover {
  
  border: 1px solid #258bdb;
}
input[type=password]:hover {
  
  border: 1px solid #258bdb;
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

.user_frorm {
  border-radius: 5px;
  background-color: ;
  padding: 50px;
  padding-left: 550px;
}
</style>
	<body>
		<?php include('menu_top.php');?>
		<form method="post" action="reg_action.php" >
			<div class="user_frorm"  >
				<input type="text" name="firs_n" required placeholder="First Name"><br/><br/>
				<input type="text" name="last_n"required placeholder="Last Name"><br/><br/>
				<input type="text" name="nic" required placeholder="NIC"><br/><br/>
				<input type="text" name="city" required placeholder="Hometown"><br/><br/>
				<input type="text" name="email" required placeholder="e-mail"><br/><br/>
				<input type="password" name="pass" required placeholder="Password"><br/><br/>
			
				<input type="submit" value="Register"> 
			
			

		</form>
    <form method="post" action="">
  <input type="submit" name="log_out" value ="Log Out">
</form>
</div>


<?php


if(isset($_SESSION['IS_LOGIN'])== 'yes')
  {
    echo 'You are Logged in as  ';
    echo $_SESSION['name'];
    echo 'Go to ,';
    echo '<a href="seller_dash.php">Seller dash board</a>';
    echo "<br>";
    echo 'or Log out befrore create new account.';
    
    die();
  }else{
    echo 'Please Log in or register for new account.';
  }




if(isset($_POST['log_out'])){
  session_destroy();
  header("home_final.php");
  die();
  
  } 




?>




		<?php include('menu_bot.php');?> 
	</body>
</html>



