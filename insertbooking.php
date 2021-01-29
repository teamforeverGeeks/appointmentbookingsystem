<?php



 $con=mysqli_connect("localhost","shrushti","Codder@2001","ict342");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $sname = $_POST['sname'];
    $staff = $_POST['staff'];
    $time = $_POST['time'];


  	$sql = "insert into bookings(name,email,b_service,b_staff,b_time) values('$name','$email','$sname,'$staff','$time')";

  	if(mysqli_query($con,$sql)){
		header("mailto:$email");
	}
	else{
		echo "please try again";
	}


?>   
