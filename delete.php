<?php

$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");  ////this is for eshtablist connetcion between the phpform and database 
$s_id = $_POST['s_id'];
  /// $fn is used for get the value from the htmlpage and $_POST is post the value 



	$sql = "delete from services where s_id='$s_id '";   
	if(mysqli_query($con,$sql)){
		echo "Your service deleted successfuly";
	}
	else{
		echo "please try again";
	}


?>