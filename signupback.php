<?php


$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");  ////this is for eshtablist connetcion between the phpform and database 

$fn = $_POST['fn'];
$sn = $_POST['sn'];  /// $fn is used for get the value from the htmlpage and $_POST is post the value 
$code = $_POST['code'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$address = $_POST['address'];
$upass=$_POST['upass'];
$cpass=$_POST['cpass'];


$spl= "select * from signup where email='$email' ";

$result = mysqli_query($con,$spl);       // this condition used for compare the database and database value if the connection and insert query is correct then data entered in database , else message is come please try again
	if(mysqli_num_rows($result)>0){
		echo"<script>alert ('The email has been used by someone else')</script>";
	header("refresh:1;url=signup1.php");
}
else{
	$sql = "insert into signup(f_name,l_name,c_code,telephone_n,email,address,Pass,Cpass) values('$fn','$sn','$code','$telephone','$email','$address','$upass','$cpass')";   
	if(mysqli_query($con,$sql)){
		header("location:login.php");
	}
	else{
		echo "please try again";
	}
}


	

?>