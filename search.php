<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Search</title>
		<link rel="stylesheet" href = "search.css">
	</head>


	<body>
		
		<?php include('menu_top.php');?>
		
		
		
		
		
		<div class="image_home">
		<h1>The Vehicle Marketplace</h1>
		<h6>Search, Sell, Buy and more</h6>
		</div><br>
		
<!--------------------------------search section ----------------------------------------->
		
		<div class ="search_Section">
			
			<form method="post">
				
				<input id="s_bar" type="text" name="search" placeholder="Type Brand,Model,Year..." >
				<input id="s_but" type="submit" name="submit_main" value="Search" >
				<input id="s_but" type="submit" name="submit_all" value="All" >
				
			</form>
		<h2> Use Filters </h2>
		
		
		</div>
		
		<div class="search_section_sort">
			
<!--------------------------------------filters ----------------------------------------------->
		<form method="post">
			<select id ="dr_list_2" name="filter_1">
    			<option disabled selected>Brand</option>
					<?php
						include "config_con.php"; 
						$records = mysqli_query($conn, "SELECT DISTINCT Brand From cars");

						while($data = mysqli_fetch_array($records))
					{
						echo "<option value='". $data['Brand'] ."'>" .$data['Brand'] ."</option>";
					}	
					?>  
				</select>
			<select id ="dr_list_1">
				<option disabled selected>Model</option>
					<?php
						include "config_con.php"; 
						$records = mysqli_query($conn, "SELECT DISTINCT Model From cars");

						while($data = mysqli_fetch_array($records))
					{
						echo "<option value='". $data['Model'] ."'>" .$data['Model'] ."</option>"; 
					}	
					?>  
			</select>
			<select id ="dr_list_1">
				<option disabled selected>Year</option>
					<?php
						include "config_con.php"; 
						$records = mysqli_query($conn, "SELECT DISTINCT Year From cars");

						while($data = mysqli_fetch_array($records))
					{
						echo "<option value='". $data['Year'] ."'>" .$data['Year'] ."</option>"; 
					}	
					?>  
			</select>
			<input id="f_but" type="submit" name="filter" value="Filter">
			
			</form>	
		</div>		
		


<!------------------------------------------------------  search  results -------------------------------------------------->
<div class="search_result">




<?php


if (isset($_POST['submit_main'])) {
	if($_POST['search']==false){
		echo "<br>";
		echo "Please Search somthing..!" ;
	}else{

	$searchValue = $_POST['search'];
    $con = mysqli_connect("localhost", "root", "123456", "19_it_493");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM cars WHERE Brand LIKE '%$searchValue%' or Year LIKE '%$searchValue%' or Model LIKE '%$searchValue%' ";
        

        $result = $con->query($sql);
        $count = mysqli_num_rows($result);
        if($count==0){
        	echo "<br>";
        	echo "OOOOps! No any matching results.Please try another keyword.";
        }else{
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
	$_SESSION['user_id'] = $row['ID'];
	
?>
			
			
<?php 
}
}
}
}
}
?>
    
<?php


if (isset($_POST['submit_all'])) {
	

	$searchValue = $_POST['search'];
    $con = mysqli_connect("localhost", "root", "123456", "19_it_493");
    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    } else {
        $sql = "SELECT * FROM cars WHERE Brand LIKE '%$searchValue%' or Year LIKE '%$searchValue%' or Model LIKE '%$searchValue%' ";
        

        $result = $con->query($sql);
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
				<a  href="adverties.php?add=<?php echo $row['ID']; ?>" target="_blank">Want to Buy?</a>
				</div>
			</div>



			<h4 class="src_des" ><?php echo $row['Description'];?></h4>
			

			
<?php
	$_SESSION['user_id'] = $row['ID'];
	
?>
			
			
<?php 
}

}

}
?>
		
		

</div>


<!------------------------------------------------------ end of serch  -------------------------------------------------->


<?php include('menu_bot.php');?>


<br><br><br>
</body>
</html>
