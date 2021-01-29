<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style>
		a{
			color: currentColor;
			text-decoration: none;
		}
		b{
			
			color: green;
			font-size: 40px;
			font-family: Courier New;
		}

	</style>
</head>
<body>
	<?php
	include "header.php";
	?>
	
<br>
<br>
<b>Buy Now</b>
<br>




<br>
<br>

<br>
	<!---<form action="buy1.php" method="post">--->
		<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
        type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $("#txtdate").datepicker({
                minDate: 0
            });
        });
    </script>

    <b> Date :</b>
    <input id="txtdate" type="text" name="krn" style="width: 200px; height: 25px;">
<br>
	<input type="text" placeholder="First name" name="fname" style="width: 400px; height: 25px;" pattern="[A-Za-z]+" title="please enter your name in alphabate" required><br><br>
	<input type="email" placeholder="Email" name="ename" style="width: 400px; height: 25px;" required><br><br>
	<input type="number" placeholder="Phone number" name="phname" style="width: 400px; height: 25px;" pattern="[6-9]{1}[0-9]{9}" title="for example= your number like this [6/7/8/9]{1}[0-9]{9}"  required><br><br>
	
	<input type="number" placeholder="Price= $" name="prname" style="width: 400px; height: 25px;" required><br><br>
	<select name="mname">
		<option></option>
		<option value="Alpha">Alpha</option>
		<option value="Venom">Venom</option>
		<option value="Avengers: Infinity war">Avengers: Infinity war</option>
		<option value="Fantastic Beasts: The Crimes of Grindelwald">Fantastic Beasts: The Crimes of Grindelwald</option>
		<option value="Creed">Creed</option>
		<option value="First man">First man</option>
		<option value="The Grinch">The Grinch</option>
		<option value="Green Book">Green Book</option>
		<option value="Incredibles 2">Incredibles 2</option>
		<option value="Johnny English Strikes Again">Johnny English Strikes Again</option>
		<option value=" Mission Impossible"> Mission Impossible  </option>
		<option value="The Nutcracker and the Four Realms"> The Nutcracker and the Four Realms</option>
		<option value="Skyscraper">Skyscraper</option>
		<option value="Smallfoot">Smallfoot</option>
		<option value="The Nun">The Nun</option>
		<option value="Widows">Widows</option>
	</select>
	<br>
	<br>
	Quantity :
	<select name="number">
		<option></option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	</select>

	</select>
	Cash on delivery


<br>
<input style="color: white; background-color: gray; height: 40px;width: 150px; font-size:20px;" type="Submit" value="Submit">
</form>




</body>
</html>