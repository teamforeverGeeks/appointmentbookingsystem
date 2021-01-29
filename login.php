

<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="css/sttt2.css">
    

</head>
<body>

<hr>
 <?php
 include "responsiv.php";

 ?>

<center>

<p>Login Form</p>
	<form action="loginback.php" method="post">
		
		<table>
			<tr>
				<td>
	<p>Email:</p> </td><td><input type="email" name="email" id="uemail" placeholder="Enter your email"><br><br>
</td>
</tr>
<tr>

	<td>
    <p>Password:</p></td><td> <input type="password" name="upass" id="upass" placeholder="Enter your password">
   </td>
</tr>
<tr>
	<td>
	<input style="color: white; background-color: black; height: 40px;width: 150px; font-size:20px; " type="submit" value="submit">
</td>
</tr>
</table>

</form>

</center>

</body>
</html>