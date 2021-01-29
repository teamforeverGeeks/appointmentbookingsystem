<!DOCTYPE html>
<html>
<head>
	<title>Kids services</title>
	<style>
		
		td {
			height:80px ;
			font-family: Garmond;
			color: black;
			font-size: 20px;
				}
		
			
		
		#TB{
			margin-left: 650px;
			margin-top: -500px;
		}

		input {
  background-color: gray; 
  /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;

}
input:hover{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}



	</style>

</head>
<body>
<?php
include "responsiv.php";
?>
<center><p style="font-size:50px; font-family:Garmond;background-color:black;color: white;background-color:grey;color: white;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">Kids Services</p></center>

<table style="width: 100%;">
	<tr>
<td>
	HAIR CUT
	<br>

	Hair Wash and Hair cut
	<br>
	$15
	<br>
	<a href='index.php'><input type='button' name='Book' value='Book'></a>
</td>
</tr>

<tr>
	<td>
	MARK CUT
	<br>
    Set the hair
	<br>
	$5
	<br>
	<a href='index.php'><input type='button' name='Book' value='Book'></a>
</tr>
<tr>
	<td>
	TRIM
	<br>
	Trim the hair
	<br>
	$8
	<br>
	<a href='index.php'><input type='button' name='Book' value='Book'></a>
</tr>
<tr>
	<td>
	HAIR CUT & SHAVE
	<br>
	HAir wash & shave
	<br>
	$20
	<br>
	<a href='index.php'><input type='button' name='Book' value='Book'></a>
</tr>
</table>

<div id="TB">
	<table>
		<tr>
			<td>
			<picture>	<img src="images/back4.jpg" style="max-width: 100%;	box-shadow: 0 10px 20px 0 rgba(0,0,0,0.2), 0 10px 20px 0 rgba(0,0,0,0.19);
"></picture>
			</td>
		</tr>
		
	</table>
</div>











	</body>
	</html>
