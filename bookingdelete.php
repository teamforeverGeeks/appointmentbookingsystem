<?php

$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");  ////this is for eshtablist connetcion between the phpform and database 
$b_id = $_POST['b_id'];
  /// $fn is used for get the value from the htmlpage and $_POST is post the value 



	$sql = "delete from bookings where b_id='$b_id '";   
	if(mysqli_query($con,$sql)){
		echo "Your bookings deleted successfuly";
	}
	else{
		echo "please try again";
	}


?>