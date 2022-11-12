<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Wikka.lk</title>
	
	</head>


	<body>
				
		
		
		
<!--------------------------------search section ----------------------------------------->
	
		
		<div class="search_section_sort">
		<form method="post">	
<!--------------------------------------filters -------------------------------------------------->
			<select id ="dr_list_2" name="brand_drp">
    			<option disabled selected>Brand</option>
				<option >All</option>
					<?php
						include "config_con.php"; 
						$records = mysqli_query($conn, "SELECT DISTINCT Brand From cars");

						while($data = mysqli_fetch_array($records))
					{
						echo "<option value='". $data['Brand'] ."'>" .$data['Brand'] ."</option>";
					}	
					?>  
				</select>
			<select id ="dr_list_1" name="model_drp">
				<option disabled selected>Model</option>
				<option >All</option>
					<?php
						include "config_con.php"; 
						$records = mysqli_query($conn, "SELECT DISTINCT Model From cars");

						while($data = mysqli_fetch_array($records))
					{
						echo "<option value='". $data['Model'] ."'>" .$data['Model'] ."</option>"; 
					}	
					?>  
			</select>
			<select id ="dr_list_1" name="year_drp"  >
				
				<option disabled selected>Year</option>
				<option >All</option>
					<?php
						include "config_con.php"; 
						$records = mysqli_query($conn, "SELECT DISTINCT Year From cars");

						while($data = mysqli_fetch_array($records))
					{
						echo "<option value='". $data['Year'] ."'>" .$data['Year'] ."</option>"; 
					}	
					?>  
			</select>
			<input type="submit" name="submit" value="Use filters">

		<?php
		if (isset($_POST['submit'])){
			echo $_POST['year_drp'];
			echo $_POST['model_drp'];
			echo $_POST['brand_drp'];
		} 


		
		?>
			
			
		</div>		
		</form>


<!------------------------------------------------------  search  results -------------------------------------------------->
 
	
		
		

</div>


<!------------------------------------------------------ end of serch  -------------------------------------------------->





</body>
</html>
