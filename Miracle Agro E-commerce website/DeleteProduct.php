<?php session_start();
$con= mysqli_connect ("localhost","root","","project_db","3308");
if(!$con)
{
die("Cannot connect to DB server");
}
$sql= "DELETE FROM `product` WHERE `product`.`pid` = ".$_GET["pid"];

if(mysqli_query($con,$sql))
{
	header('Location:ViewMyProduct.php');
}
?>