<?php


$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");  ////this is for eshtablist connetcion between the phpform and database 
$b_id = $_POST['b_id'];
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Date = $_POST;'Date'];
  /// $fn is used for get the value from the htmlpage and $_POST is post the value 



	$sql = "update bookings set name='$Name', email='$Email', date='$Date' where b_id='$b_id '";   
	if(mysqli_query($con,$sql)){
		echo "Your booking entered successfuly";
	}
	else{
		echo "please try again";
	}


?>