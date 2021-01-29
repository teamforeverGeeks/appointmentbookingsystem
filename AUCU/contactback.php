<?php


$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");  ////this is for eshtablist connetcion between the phpform and database 

$c_fname = $_POST['c_fname'];
$c_lname = $_POST['c_lname'];  /// $fn is used for get the value from the htmlpage and $_POST is post the value 
$c_email = $_POST['c_email'];
$c_subject = $_POST['c_subject'];
$c_message = $_POST['c_message'];


$sql = "insert into customer(C_Name,C_Lname,C_Email,C_Subject,C_Message) values('$c_fname','$c_lname','$c_email','$c_subject','$c_message')"; 
     // this condition used for compare the database and database value if the connection and insert query is correct then data entered in database , else message is come please try again
	if(mysqli_query($con,$sql)){
		echo"<script>alert ('Record inserted')</script>";
	;
    }
	else{
		echo "please try again";
	}



	

?>