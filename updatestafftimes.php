<?php


$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");  ////this is for eshtablist connetcion between the phpform and database 
$sc_id=$_POST['sc_id'];
$name=$_POST['name'];
	$services=$_POST['sname'];
	$service2=$_POST['sname2'];
	$service3=$_POST['sname3'];
	$stime=$_POST['time'];
	$etime=$_POST['etime'];
	$extra=$_POST['extra'];
  /// $fn is used for get the value from the htmlpage and $_POST is post the value 



	$sql = "update schedual set name='$name', service='$services', service2='$service2',service3='$service3',start_time='$stime',end_time='$etime',extra_service='$extra' where sc_id='$sc_id '";   
	if(mysqli_query($con,$sql)){
		echo "Your schedual entered successfuly";
	}
	else{
		echo "please try again";
	}


?>