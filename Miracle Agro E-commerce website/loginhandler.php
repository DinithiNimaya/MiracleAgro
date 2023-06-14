<?php session_start();
 if(isset($_POST["btnSubmit"]))
 {
	 $username = $_POST["txtName"];
	 $password = $_POST["txtPass"];
	 
	 $con = mysqli_connect("localhost","root","","project_db","3308");
	 
	 if(!$con) 
	 {
		die("Sorry !!! we are facing technical issue"); 
	 }
	 
	 $sql = "SELECT * FROM `registered_customer` WHERE `email` = '".$username."' and `password` = '".$password."'";
	 
	 $result = mysqli_query($con,$sql);	 
	 
	 if(mysqli_num_rows($result)>0)
	 {
		 //Create session 
		 $_SESSION["userName"] = $username;
		 header('Location:myaccount.php');
	 }
	 else
	 {
		  header('Location:login.php');
	 } 
 }
?>
