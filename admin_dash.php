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

.admin_panel {
  border-radius: 5px;
  background-color: ;
  padding: 50px;
  padding-left: 550px;
}



</style>

<body>
<?php include('menu_top.php');?>

<?php


if(isset($_SESSION['ROLE'])==1){
	
	
	
if(isset($_POST['log_out_admin'])){
	session_destroy();
	echo "Your are loged out. have a nice day!";
	header("home_final.php");
	die();
	
	}

?>
	<div class="admin_panel">
	<form method="post">
		<input type="submit" name="seller_btt" value="Sellers">
		<input type="submit" name="car_btt" value="Cars">
		<input type="submit" name="log_out_admin"
		value="Log out">
	</form><br>
	</div>
<?php


	


include('config_con.php');

	if (isset($_POST['car_btt'])) {
		$sql = "SELECT * FROM cars ";
		$result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
			?>
			
		
				<br>
			<div class="src_dat">
			<h3><?php echo $row['Title'];?>-<?php echo $row['City'];?></h3>


			</div><br>
			
			
			<div class="src_img">
			<img style="width:250px; height:100px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Image_main']);?>"/>
			</div>	
				
			
			<div class='src_container_right' >
				
				Model : <?php echo $row['Model'];?><br>
				Price:<?php echo $row['Price'];?> LKR (lax)<br><br>
				<div class="src_btn">
				<a  href="adverties.php?add=<?php echo $row['ID']; ?>" target="_blank">Advertisement Page</a>
				</div>
			</div>



			<h4 class="src_des" ><?php echo $row['Description'];?></h4>
			
	<?php 
		}
	} 
	?>
<?php
	if (isset($_POST['seller_btt'])) {
		$sql = "SELECT * FROM User ";
		$result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
			?>
			
			
				<table border="1" id="search_table">
					<tr>
						<th>Seller ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>NIC</th>
						<th>City</th>
						<th>E-mail</th>
					</tr>
					<tr>
						<td><?php echo $row['user_id'];?></td>
            			<td><?php echo $row['firstname'];?></td>
						<td><?php echo $row['lastname'];?></td>
						<td><?php echo $row['nic'];?></td>
						<td><?php echo $row['city'];?></td>
						<td><?php echo $row['email'];?></td>
						
					</tr>
					</table>
					
			
	<?php 
	

		}
	} 

	
}else{echo "you are not authorized to see cotent, Please Log-in with admin Credentials.";




	
}


?>







<br><br><br><br>
<?php include('menu_bot.php');?>
</body>
</html>