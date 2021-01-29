<!DOCTYPE html>
<html>
<head>
	<title>searchservices</title>
	<style>
		
		td {
			height:80px ;
			font-family: Verdana;
			color: black;
				}
		
			
		
		
	</style>
</head>
<body>
	
<?php
include "responsiv.php";
?>

<center><p style="font-size:50px; font-family:Verdana;background-color:black;color: white;">Services</p></center>

<?php

$search = $_POST['search'];

$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");



$sql = "select services_n,s_description,s_price from services where services_n like '%$search%'";



$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
	while($record = mysqli_fetch_assoc($result)){

 echo "<table>";
 echo "<tr>";
 echo   "<td>";
    echo $record['services_n'];
	
echo "<br>";
    echo $record['s_description'];

echo"<br>";
    echo $record['s_price'];

echo "<br>";
echo "<br>";
echo "<a href='index.php'><input type='button' name='Book' value='Book'></a>";   
    
	
echo "</td>";
echo"</tr>";

	
echo "</table>";


	}
}

else{
	echo "sorry something went wrong! Or this service is not available.";
}













?>

	</body>
	</html>
