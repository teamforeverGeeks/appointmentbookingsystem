<?php
session_start();
$mail= $_POST['mail'];
$password=$_POST['password'];

$con = mysqli_connect("localhost","shrushti", "Codder@2001", "ict342");

$query = "select * from staff_signup where email='$mail' and password='$password'";

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result)>0) {
	while($record=mysqli_fetch_assoc($result))
	{
		$_SESSION['Name']= $record['Name'];
		$_SESSION['email']=$record['email'];
	}
	header("refresh:1;url=schedule.php");
}
else{
	echo "record entered unsuccessfully<br><a href='log.php'>Back to log-in page</a>";
}
?>