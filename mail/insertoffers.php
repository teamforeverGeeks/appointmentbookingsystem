<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");  ////this is for eshtablist connetcion between the phpform and database 

//$message = $_POST['offers'];
//$to = 
//$from = "shonapanchal67@gmail.com";
//$header = "From:$from";

 /// $fn is used for get the value from the htmlpage and $_POST is post the value 



//	$sql = "select email from signup";   
//	if(mysqli_query($con,$sql)){
//		mail(email,'',$message,$header);
//	}
//	else{
//		echo "please try again";
//	}





$mail=new phpmailer;
$mail->isSMTP();
$mail ->Host        = 'smtp.gmail.com';
$mail ->SMTPAuth    = true;
$mail ->Username    = 'shonapanchal67@gmail.com';
$mail ->Password    = 'PHPMAIL';
$mail ->SMTPSecure  = 'tls';
$mail ->Port        = 587;

$mail ->setForm("shonapanchal67@gmail.com");
$sql="select * from signup where send_email=1";
$res=mysqli_query($con,$sql);
if(musqli_num_rows($res)>0)
{


   $mail ->addReplyTo("shonapanchal67@gmail.com");

   while($x=mysqli_fetch_assoc($res))
   {

   	$mail ->addAddress($x['email']);
   }



   $mail ->isHTML(true);
   $mail ->Subject   = 'This is Demo email';
   $mail ->Body      = '<h1>welcome</h1>';
   $mail ->AltBody   = 'This is for non-html content';
   if($mail ->send())
  {
	echo "Done";
   }
   else
	echo "Try again";
}
else
{
	echo "No data found";
}

?>
