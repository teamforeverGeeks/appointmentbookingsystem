<?php
$password=$_POST['password'];
$rpassword=$_POST['password-repeat'];

if ($password=$rpassword) {
	$connect=mysqli_connect("localhost","shrushti","Codder@2001","ict342");

	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$password=$_POST['password'];
	$rpassword=$_POST['password-repeat'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];

	$query="insert into staff_signup(Name,email, password, rpassword, address, Phone) values ('$name', '$mail', '$password', '$rpassword', '$address', '$phone')";
	if (mysqli_query($connect, $query)) {
		echo "Record entered successfully";
		echo "<a href='loginstaff.php'> Go to login page</a>";
	}
	else{
		echo "record entered unsuccessfully<a href='signup.php'>Back to home</a>";
	}
}
else{
	echo"Please enter the same password..<br><a href='signup.php'>Back to home</a>";
}
?>

