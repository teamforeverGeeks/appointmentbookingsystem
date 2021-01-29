<?php

$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");  ////this is for eshtablist connetcion between the phpform and database 
$sc_id = $_POST['sc_id'];
  /// $fn is used for get the value from the htmlpage and $_POST is post the value 



	$sql = "delete from schedual where sc_id='$sc_id '";   
	if(mysqli_query($con,$sql)){
		echo "Your schedual deleted successfuly";
	}
	else{
		echo "please try again";
	}


?>