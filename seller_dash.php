<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href = "search.css">


</head>

<style>

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

.sd_sub {
  border-radius: 5px;
  background-color: ;
  padding: 50px;
  padding-left: 550px;
}

.tes_new_add {
  border-radius: 5px;
  background-color: ;
  padding: 50px;
  padding-left: 550px;
}
</style>

<body>
<?php include('menu_top.php');

?>
<div class="sd_wc">

<?php
if(isset($_SESSION['id'])){
	echo "Hello ";
	echo  $_SESSION['name'];
	$id =$_SESSION['id'];
	echo " welcome !";
	
?>
</div>
<?php


require_once "config_con.php";



$sql = "SELECT * FROM User WHERE user_id =$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
	
	
?>
<div class="sd_sub">
<form method="post" action="seller_dash.php">
		<input type="submit" name="my_ads" value="My Adds">

	<input type="submit" name="log_out" value ="Log Out">
</form>
</div>
</form><br>

<div class="tes_new_add"  >
	<form method="post" action="car_reg.php">
<input type='submit' name='new' value='new'></input>
</form>

</div>

<form method="post" action="">

<?php

if($_SESSION['IS_LOGIN']== 'yes')
	{
		

	}
if(isset($_POST['log_out'])){
	echo "Your are loged out. have a nice day!";
	session_destroy();
	header("home_final.php");
	die();
	
	}	
?>




<?php



	if (isset($_POST['my_ads'])) {
		$sql = "SELECT * FROM cars WHERE user_id=$id";
		$result = $conn->query($sql);
		$count = mysqli_num_rows($result);
		if($count==0){
			echo "Sorry You Don`t Have any adds yet";
		}
        while ($row = $result->fetch_assoc()) {
			?>
			
		
				<br>
			<div class="src_dat">
			<h3><?php echo $row['Title'];?>-<?php echo $row['City'];?></h3>


			</div><br>
			
			
			<div class="src_img">
			<img style="width:200px; height:100px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Image_main']);?>"/>
			</div>	
				
			
			<div class='src_container_right' >
				
				Model : <?php echo $row['Model'];?><br>
				Price:<?php echo $row['Price'];?> LKR (lax)<br><br>
				<div class="src_btn">
				<a  href="adverties.php?add=<?php echo $row['ID']; ?>" target="_blank">Want to Buy?</a>
				</div>
			</div>



			<h4 class="src_des" ><?php echo $row['Description'];?></h4>
			
	<?php 
		}
	}


	}else{
		echo "please Login.";
	} 
	?>

<?php include('menu_bot.php');?>




</body>
</html>