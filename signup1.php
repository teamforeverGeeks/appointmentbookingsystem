
<!DOCTYPE html>
<html>
<head>
<title>Signup page</title>
<link rel="stylesheet" type="text/css" href="css/sttt2.css">

</head>
<body>
    <?php
    include "responsiv.php";
    ?>

        	   <form action="signupback.php" method="post" onsubmit="return validation()">



<center>
        <br>
        <div>
        <table><!--tabel is used to arrenged in table-->
        	<tr>
        		<td id="fn1">
        			<sup>*</sup>First name:<!--b is used to make font bold--></td>
        		<td> <input type="text" id="fn" name="fn" pattern="[A-Za-z]+" title="please enter your name in alphabate" placeholder="First Name"></td>
        	</tr>
            <tr>
                <td id="sn1">
                    <sup>*</sup>Last Name:</td>
                <td><input type="text" id="sn" name="sn" pattern="[A-Za-z]+" title="please enter your name in alphabate" placeholder="Last Name"></td>
            </tr>
        	
        	
        	
        	<tr>
        	 	<td id="telephone1">
        			<sup>*</sup>Telephone:</td>
        		<td><select id="code" name="code">
              <option></option>
              <option value="+61">+61</option>      
                </select> 
                <input type="number" id="telephone" name="telephone" pattern="[6-9]{1}[0-9]{9}" title="for example= your number like this [6/7/8/9]{1}[0-9]{9}" placeholder="Telephone Number"> </td>
        	</tr>
        	
       			<tr>
				<td id="email1">
					<sup>*</sup>Email:</td>
				<td> <input type="email" id="email" name="email" placeholder="Email"></td>
			</tr>
            <tr>
                <td id="address1">      
                    <sup>*</sup>Address:</td>
                    <td><textarea cols="42" rows="3" id="textarea" name="address" placeholder="Address"></textarea></td>
            </tr>
            <tr>
                <td id="fn1">
                    <sup>*</sup>Password:</td>
                    <td><input type="password" id="upass" name="upass" required placeholder="Password"></td>
                </tr>
                <tr>
                    <td id="fn1">
            <sup>*</sup>Confirm Password:</td>
                    <td><input type="password" id="cpass" name="cpass" title="please enter password same as above password" required placeholder="Conform Password"></td>
                </tr>

			
			
            	</table>

	


					<input type="submit"  style="color: white; background-color: black; height: 40px;width: 150px; font-size:20px; border-radius: 10px 10px 10px 10px;" value="submit"id="a">
				</div>


          <p>YOU HAVE ALREADY ACCOUNT? GO TO <a href="login.php"> LOGIN</a></p>        

</center>
</body>
</html>
    
