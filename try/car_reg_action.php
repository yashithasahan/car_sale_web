<?php

session_start();

$servername="localhost";
$username="root";
$password="123456";
$database="19_it_493";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn->connect_error){
    die("Error: Could not connect:" . $conn->connect_error);

}

 
if(isset($_POST["submit"])){ 
    $fileName = basename($_FILES["image_up"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    $image = $_FILES[image_up][tmp_name']; 
    $imgContent = addslashes(file_get_contents($image)); 
        
    
}

$sql = "INSERT INTO cars (Title,Brand,Model,Car_conditon,Price,Year,Description,Image_main,Contact) VALUES('$_POST[title]','$_POST[brand]','$_POST[model]','$_POST[condtn]','$_POST[price]','$_POST[year]','$_POST[descrptn]',('$imgContent'),'$_POST[contct]')";


?>

$_POST[title]
$_POST[brand]
$_POST[model]
$_POST[condtn]
$_POST[price]
$_POST[year]
$_POST[descrptn]

$_POST[contct]