<?php

session_start();


include('config_con.php');



$sql = "INSERT INTO User (firstname,lastname,nic,city,email,password,role) VALUES('$_POST[firs_n]','$_POST[last_n]','$_POST[nic]','$_POST[city]','$_POST[email]','$_POST[pass]',2)";

if ($conn->query($sql)===TRUE){
	  
	 echo "you've successfully registered with autoz";
	 echo "<br>";
	 echo 'Please <a href="login.php">click here!</a>to login  ';

}else{
	echo "Error";

}$conn->close()
?>