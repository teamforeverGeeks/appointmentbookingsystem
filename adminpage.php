<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<style>
		
        input,select{
            width: 40%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 20px 8px 20px;
            box-shadow: 1px 1px 2px 1px gray;


        }
        h1{
            background-color: gray;
            color: white;
            font-family: Garmond;
            height: 40px;
            padding: 10px 5px 5px 5px;
            font-size: 30px;
        }
        h1{box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);}

    
	</style>
</head>
<body>


	<?php
	include "responsiv.php";
	?>

	<?php

if(!isset($_SESSION['f_name'])){
    header("location:signup1.php");
}
else{
echo "<a href='logout.php'><p style='margin-left:1200px;margin-top:-100px;color:black;font-size:25px;font-family:Garmond;text-decoration: none;'>Logout</p></a>";

}
?>


    <center><h1>Admin Page Services</h1></center>


	<?php
	include "serviceadmin.php";
	?>



 <br>
 <br>

 
 <br>
<hr>
	<center><h1>Staff Time-Table</h1></center>
	<hr>
	<?php
	include "stafftableout.php";
	?>
	<br>
	<hr>
<br>
<hr>


	<center><h1>All Bookings</h1></center>

	<?php
	include "bookingadmin.php";
	?>
	<hr>
	<br>
	<br>
	<hr>
<br>
<br>
<hr>

<center><h1>Customer Queries</h1></center>

	 <?php
	 include "customerback.php";
	 ?>



	
</body>
</html>
