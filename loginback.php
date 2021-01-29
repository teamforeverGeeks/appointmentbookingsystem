<?php

session_start();


$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");

$email = $_POST['email'];
$upass = $_POST['upass'];

$sql = "select f_name,l_name,email,Pass from signup where email='$email' and Pass='$upass' ";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){

while($record=mysqli_fetch_assoc($result)){
$_SESSION['f_name'] = $record['f_name'];
$_SESSION['l_name'] = $record['l_name'];

	header("location:homepage.php");
}

}
else{
	echo "try again";
}

?>