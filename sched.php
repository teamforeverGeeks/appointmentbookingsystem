<?php

	$connect=mysqli_connect("localhost","shrushti","Codder@2001","ict342");

	$name=$_POST['name'];
	$services=$_POST['sname'];
	$service2=$_POST['sname2'];
	$service3=$_POST['sname3'];
	$stime=$_POST['time'];
	$etime=$_POST['etime'];
	$extra=$_POST['extra'];

	$query="insert into schedule(name,service,service2, service3, start_time, end_time,extra_service) values ('$name', '$services', '$service2', '$service3','$stime','$etime', '$extra')";
	if (mysqli_query($connect, $query)) {
		echo "Your schedule is ready";
	}
	else{
		echo "record entered unsuccessfully<a href='schedule.php'>Back to Schedule Page</a>";
	}
?>

