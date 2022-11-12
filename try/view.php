<?php 
  
require_once 'config_con.php'; 
 

$result = $conn->query("SELECT image FROM images ORDER BY uploaded DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img style="width: auto; height: 200px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php 
    }
}
 ?> 
    </div> 
