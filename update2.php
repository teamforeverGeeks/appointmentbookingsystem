<?php


$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");  ////this is for eshtablist connetcion between the phpform and database 
$s_id = $_POST['s_id'];
$servicename = $_POST['servicename'];
$description = $_POST['description'];
$price = $_POST['price'];  /// $fn is used for get the value from the htmlpage and $_POST is post the value 



	$sql = "update services set services_n='$servicename', s_description='$description', s_price='$price' where s_id='$s_id '";   
	if(mysqli_query($con,$sql)){
		echo "Your service entered successfuly";
	}
	else{
		echo "please try again";
	}


?>