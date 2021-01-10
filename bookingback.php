<?php


$con = mysqli_connect("localhost","root","","ict342");  ////this is for eshtablist connetcion between the phpform and database 

$fn = $_POST['fn'];  /// $fn is used for get the value from the htmlpage and $_POST is post the value 
$code = $_POST['code'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$service = $_POST['service'];
$gender = $_POST['gender'];
$staff = $_POST['staff'];
$time = $_POST['time'];


	$sql = "insert into booking(f_name,c_code,telephone_n,B_email,B_service,B_gender,B_staff,B_time) values('$fn','$code','$telephone','$email','$service','$gender','$staff','$time')";   
	if(mysqli_query($con,$sql)){
		header("location:login.php");
	}
	else{
		echo "please try again";
	}


?>