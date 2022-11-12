<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autoz.lk</title>

</head>
<body>
<?php include('menu_top.php');?>




<div class="search_result">




<?php

if (isset($_GET['add'])) {

	$id = $_GET['add'];
	$con = new mysqli("localhost", "root", "123456", "19_it_493");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM cars WHERE ID =$id";
        

        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()) {
			?>
			<br><br><br>
			<div class="add_dat">
			<h3><?php echo $row['Title'];?></h3>

			</div>
			<div class='add_container' >
				Brand : <?php echo $row['Brand'];?><br>
				Year : <?php echo $row['Year'];?><br>
				Model : <?php echo $row['Model'];?><br>
				Condition :" <?php echo $row['Car_conditon'];?>"<br>
				City :<?php echo $row['City'];?><br>
				Price:<?php echo $row['Price'];?> LKR (lax)<br><br>
				<div style="color:red; font-weight: 600;">Contact :<?php echo $row['Contact'];?><br></div>


			
			</div>
				
			<img style="width:auto; height: 300px; " src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Image_main']);?>"/>
				
			
			


			<h4 style="font-family: helvetica; color:gray; padding-left: 15px;padding-right: 300px"><?php echo $row['Description'];?></h4>

			
			
<?php 
}

}
}
?>
    
<?php
if(isset($_SESSION['id'])){

	
?>
	<div class="add_back_seller"  >
        <a href="seller_dash.php">Go back to Dash board</a>
    </div>

<?php
}

?>

	
		
		

</div>









<?php include('menu_bot.php');?>

</body>
</html>


