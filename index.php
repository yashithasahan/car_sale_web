<?php


session_start();


        
        



if(isset($_COOKIE['welcome'])){

        $welcome=$_COOKIE['welcome'];
}else{
        setcookie('welcome','welcome Back !', time()+3600);

}



?>



<!DOCTYPE html>
<html>
<title>Welcome</title>

<head>


<link rel="stylesheet" type="text/css" href="index.css">

</head>

</head>

<body background="data/bg.jpg">

<?php include('menu_top.php');?>

<div class="container">
        <img class="main_img" src="data/homekey2.png" alt="Key">


        <div class="logo_name">Search Sell Buy And More</div>
        
         <div class="buy" style="color: red;">
                <a href="search.php">SHOP</a></div>
        
        <div class="sell">
                <a href="reg.php">SELL</a></div>
       

</div>


        

      



<div class="cookies" style="font-size: 30pt; padding-top:10px; font-weight: bold; color: gray;">
<?php
if(isset($_SESSION['name'])){
        echo "Hi !";
        echo  $_SESSION['name'];
        echo ",";
}

if(isset($_COOKIE['welcome'])){

        echo $welcome; 
}
?>
</div>

<?php include('menu_bot.php');?>


</body>
</html>
