
<!DOCTYPE html>
<html>
<head>
	<title>mainpage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style>
    img {
        vertical-align: middle;
      }
		
		ul{
			list-style-type: none;
			
		}
		li{
			
			display: inline-block;
			font-size: 2vw;
			color: black;
			font-family: Garamond;
      padding: 20px 300px;
		}
		
		#B{
			margin-top: 800px;
		}
		#C{
			margin-top: -520px;
			margin-left: 530px;
			font-size: 5vw;
			color: white;
			font-family:Brushstroke;
		}
		#D{
			margin-left: -290px;
		}
		
		* {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 33.33%;
  padding: 20px;
  margin-top: -300px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
  margin-top: 400px;
}
#F {
  
  padding: 10px;
  width:900px;
  height: 400px;
  text-align: justify;
}
#G{
	margin-bottom: 40px;
}

@media only screen and (max-width: 100px) {
 .b,.box {font-size: 11px}
}

	</style>

</head>
<body>
	


<picture>
	<img src="images/back7.jpg" style="width: 100%; height: 700px;">
</picture>
    
  <div id="C"> 
	
	<p>Welcome!!</p>
<div id="D">
	<p><b>The World Famous Barber Shop</b></p>
    </div>
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
    
    
   
 <?php
include "responsiv.php";
?>  
    
  
    
  
	
  <?php

if(isset($_SESSION['f_name'])){
      echo "welcome to Barber Shop";

  echo "<p style='font-size:25px;color:black;'>";
    echo $_SESSION['f_name'];
  echo $_SESSION['l_name'];
  echo "</p>";
  echo "<a href='logout.php'><p style='color: black; height: 30px;width: 130px; font-size:10px; border-radius: 05px;text-align:center;padding: 8px 40px 8px 40px;
            box-shadow: 1px 1px 2px 1px gray;'>LOG OUT</p></a>";
}





?>



	


	
<div id="G">

	<form action="searchservice.php" method="post">
		<input type="text" placeholder="search here" name="search" style="width: 86%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 20px 8px 20px;
            box-shadow: 1px 1px 2px 1px gray;">
		<input type="submit" value="submit" style="width: 10%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 20px 8px 20px;
            box-shadow: 1px 1px 2px 1px gray;" >
	</form>
</div>




<br>
<br>
<br>
<?php
include "slidebar.php";
?>
	
<br>
<br>
<br>
<br>


<br>
<div>
<ul>
	<a href="men.php"><li><b>MEN</b></li></a>
	<a href="kids.php"><li><b>KIDS</b></li></a>
	<a href="women.php"><li><b>WOMEN</b></li></a>
</ul>

<hr>


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


<div class="clearfix">
  
    <div class="box" style="background-color:white">
  <a href="men.php">
  <picture><img src="images/10.jpg" style=" width: 400px;"></picture>
   </a>
</div>

 <a href="kids.php">
  <div class="box" style="background-color:white;">
  <picture><img src="images/11.jpg" style="height:517px;width: 400px;"></picture>
  </div>

</a>

<a href="women.php">
  <div class="box" style="background-color:white">
  <picture><img src="images/3.png" style=" height:517px;width: 400px;"></picture>
</div>
  
</a>
</div>





</body>
</html>
