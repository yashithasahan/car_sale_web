<?php
session_start()
?>


<?php 
 
require_once 'config_con.php'; 
 

$img_status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $img_status = 'error'; 
    if(!empty($_FILES["image_up"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image_up"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image_up']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            $title= $_POST['title'];
            $brand= $_POST['brand'];
            $model= $_POST['model'];
            $city =$_POST['ccty'];
            $condtn= $_POST['condtn'];
            $price= $_POST['price'];
            $year= $_POST['year'];
            $descrptn= $_POST['descrptn'];
            $contct=   $_POST['contct'];
            $id =$_SESSION['id'];
                 
             
            $insert = $conn->query("INSERT into cars (Title,Image_main,Brand,Model,Car_conditon,Price,Year,Description,Contact,City,user_id) VALUES ('$title','$imgContent','$brand','$model','$condtn','$price','$year','$descrptn','$contct','$city','$id')"); 
             
            if($insert){ 
                $img_status = 'success'; 
                $statusMsg = "File uploaded successfully.Please Wait you will be redirected to the dash board";
                header( "Refresh:3; url=seller_dash.php");

            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 

echo $statusMsg; 
?>