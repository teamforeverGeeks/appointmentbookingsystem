<?php


$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");  ////this is for eshtablist connetcion between the phpform and database 

$Services = $_POST['Services'];
$Description = $_POST['Description'];
$Price = $_POST['Price'];  /// $fn is used for get the value from the htmlpage and $_POST is post the value 



	$sql = "insert into services(services_n,s_description,s_price) values('$Services','$Description','$Price')";   
	if(mysqli_query($con,$sql)){
		echo "Your service entered successfuly";
	}
	else{
		echo "please try again";
	}


?>