<?php 
$servername="localhost";
$username="root";
$password="123456";
$database="19_it_493";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn->connect_error){
	die("Error: Could not connect:" . $conn->connect_error);

}

 ?>

