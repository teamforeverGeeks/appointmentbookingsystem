<!DOCTYPE html>
<html>
<head>
	<title>customer</title>
	<style>
		
		td {
			height:20px ;
			font-family: Verdana;
			color: black;
				}
		
			
		
		
	</style>
</head>
<body>
	

<?php


$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");



$sql = "select * from customer";



$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
	while($record = mysqli_fetch_assoc($result)){

 echo "<table style='background-color:#f2f4f7;width:100%;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);'>";
 echo "<tr>";
 echo   "<td>";
    echo $record['c_id'];
    echo   "<br>";
  
 echo   "<td>";
    echo $record['C_Name'];
	
echo "<br>";
    echo $record['C_Lname'];

echo"<br>";
    echo $record['C_Email'];

echo"<br>";
    echo $record['C_Subject'];

echo"<br>";
    echo $record['C_Message'];


echo "<br>";
echo "<hr>";
    
	
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
