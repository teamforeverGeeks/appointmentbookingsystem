<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		ul{
                list-style-type: none;

        }
        li{
            padding: 20px 15px;
            display: inline-block;
            font-size: 30px;
            color: black;
            font-family: Garamond;
            text-decoration: none;

        }

	</style>
</head>
<body>

	<ul>
        
        <a href='updatebooking.php'><li>Update Bookings</li></a>
        <a href='deletebooking.php'><li>Delete Bookings</li></a>
    </ul>


<?php

$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");



echo "<hr>";

$sql = "select * from bookings";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){

	while($record = mysqli_fetch_assoc($result)){
		
    echo "<table style='background-color:#f2f4f7;width:100%;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);'>";
 echo "<tr>";

 echo  "<td style='width:300px;font-family:Garmond;font-size:20px;'>";
    echo $record['b_id'];

 echo  "<td style='width:300px;font-family:Garmond;font-size:20px;'>";
    echo $record['name'];

	

echo  "<td style='width:300px;font-family:Garmond;font-size:20px;'>";
echo $record['email'];
echo "</td>";


echo "<td style='width:300px;font-family:Garmond;font-size:20px;'>";
    echo $record['date'];
    echo "<br>";
echo "</td>";

echo "<td style='width:300px;font-family:Garmond;font-size:20px;'>";
    echo $record['b_service'];
    echo "<br>";
echo "</td>";

echo "<td style='width:300px;font-family:Garmond;font-size:20px;'>";
    echo $record['b_staff'];
    echo "<br>";
echo "</td>";

echo "<td style='width:300px;font-family:Garmond;font-size:20px;'>";
    echo $record['b_time'];
    echo "<br>";
echo "</td>";
echo "</tr>";




	
echo "</table>";


	}
}
else{
	echo "please try again";
}

?>


</body>
</html>