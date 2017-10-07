<?php 
require "init.php";
$fcm_token= $POST["fcm_token"];
$sql="insert into fcm_info(fcm_token) values('".$fcm_token."');";
mysqli_query($con,$sql);
mysqli_close($con);

?>