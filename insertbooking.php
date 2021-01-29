<!DOCTYPE html>
<html>
<head>
	<title>insert booking</title>
</head>
<body>

	<center><h1> Update bookings</h1></center>
	<center>
	 <form action="bookingupdate.php" method="post" onsubmit="return validation()"> 
	 	<input type="text" name="b_id" placeholder="Enter Booking ID"/><br>
        <br>
        <input type="text" name="Name" placeholder="Customer Name" /><br><br>
	    <input type="text" name="Email" placeholder="Enter Email" /><br><br>
	     <input type="date" name="Date" placeholder="Enter Date" /><br><br>
	     	     <input type="date" name="servcename" placeholder="Enter service" /><br><br>

	     <input type="date" name="staff" placeholder="Enter staff" /><br><br>
	     <input type="date" name="time" placeholder="Enter time" /><br><br>


        <input type="submit" value="update" name="update bookings"/>

	</form>
</center>



</body>
</html>