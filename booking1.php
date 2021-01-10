# appointmentbookingsystem

<!DOCTYPE html>
<html>
<head>
<title>Booking page</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
ul{
            list-style-type: none;
            background-color: black;
            
        }
        li{
            padding: 20px 30px;
            display: inline-block;
            font-size: 30px;
            font-style: bold;
            color: white;
            font-family: Garamond;
        }
      div{
      	margin-left: 800px;
      	margin-top: -600px;

      }
      b{
      	color: white;
      	font-size: 20px;
      }

</style>
</head>
<body>

<ul>
            <li>Contact us</li>
            <li>Services</li>
            <li>About us</li>    
            <li>Home</li>
    
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li>Login</li>
        </ul>
        <img src="images/back2.jpg" style="height: 700px; width: 1330px;">
        	   <form action="bookingback.php" method="post" onsubmit="return validation()">




        <br>
        <div>
        <table><!--tabel is used to arrenged in table-->
        	<tr>
        		<td id="fn1">
        			<sup>*</sup><b>First name:</b><!--b is used to make font bold--></td>
        		<td> <input type="text" id="fn" name="fn" pattern="[A-Za-z]+" title="please enter your name in alphabate"></td>
        	</tr>
        	
        	
        	
        	<tr>
        	 	<td id="telephone1">
        			<sup>*</sup><b>Telephone:</b></td>
        		<td><select id="code">
              <option></option>
              <option value="+61">+61</option>      
                </select> 
                <input type="number" id="telephone" name="telephone" pattern="[6-9]{1}[0-9]{9}" title="for example= your number like this [6/7/8/9]{1}[0-9]{9}" > </td>
        	</tr>
        	
       			<tr>
				<td id="email1">
					<sup>*</sup><b>Email:</b></td>
				<td> <input type="email" id="email" name="email"></td>
			</tr>
			
			<tr>
				<td id="service">
					<sup>*</sup><b>Service Type:</b></td>
				<td> <select id="service" name="service">
        			<option></option>
        			<option value="Hair cut">Hair cut</option>
        			<option value="Trimming">Trimming</option>
        			<option value="Spa">Spa</option>
        			<option value="Line Up">Line Up</option><!--option is used for make dropdown-->
        			</select></td><!--textarea is used for enter the text-->
				
			</tr>
			<tr>
				<td id="gender">
					<sup>*</sup><b>Gender:</b></td>
				<td> <select id="gender" name="gender">
        			<option></option>
        			<option value="Female">Female</option>
        			<option value="Male">Male</option>
        			<option value="Child-Boy">Child-Boy</option>
        			<option value="Child-Girl">Child-Girl</option><!--option is used for make dropdown-->
        			</select></td><!--textarea is used for enter the text-->
				
			</tr>
			<tr>
				<td id="staff">
					<sup>*</sup><b>Staff:</b></td>
				<td> <select id="staff" name="staff">
        			<option></option>
        			<option value="abc">abc</option>
        			<option value="def">def</option>
        			<option value="ghi">ghi</option>
        			<option value="klm">klm</option><!--option is used for make dropdown-->
        			</select></td><!--textarea is used for enter the text-->
				
			</tr>
			<tr>
				<td id="time">
					<sup>*</sup><b>Time:</b></td>
				<td> <input type="Time" id="time" name="time" title="please select your time"></td><!--textarea is used for enter the text-->
				
			</tr>
			

            	</table>

	


					<input type="submit"  style="color: white; background-color: black; height: 40px;width: 150px; font-size:20px; border-radius: 10px 10px 10px 10px;" value="submit"id="a">
				</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



				<?php
				include "C:/wamp64/www/ICT342/appointment-booking-calendar/cpabc_appointments.php";

				?>
                  

<br>

</body>
</html>
    
