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
        <a href='insertservice.php'><li>Insert Services</li></a>
        <a href='updateservice.php'><li>Update Services</li></a>
        <a href='deleteservices.php'><li>Delete Services</li></a>
    </ul>

 


<?php

$con = mysqli_connect("localhost","shrushti","Codder@2001","ict342");



echo "<hr>";

$sql = "select * from services";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){

	while($record = mysqli_fetch_assoc($result)){
		
    echo "<table style='background-color:#f2f4f7;width:100%;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);'>";
   
    


 echo "<tr>";
 echo "<td>";
    echo $record['s_id'];
    echo "</td>";
 echo   "<td style='width:400px;font-family:Garmond;font-size:20px;'>";
    echo $record['services_n'];
	echo "</td>";
	//echo "<br>";

    echo "<td style='width:550px;font-family:Garmond;font-size:20px;'>";
    echo $record['s_description'];
    echo "</td>";

    echo "<td style='width:200px;font-family:Garmond;font-size:20px;'>";

   
    echo $record['s_price'];
    echo "</td>";

    echo"</tr>";

	
echo "</table>";




	}
}
else{
	echo "please try again";
}

?>






</body>
</html>