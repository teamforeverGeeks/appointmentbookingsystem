<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
	<style>
		
        input,select{
            width: 40%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 20px 8px 20px;
            box-shadow: 1px 1px 2px 1px gray;


        }
        h1{
            background-color: gray;
            color: white;
            font-family: Garmond;
            height: 40px;
            padding: 10px 5px 5px 5px;
            font-size: 30px;
        }
        h1{box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);}


    

    
	</style>
</head>
<body>
    <?php
    include "responsiv.php";
    ?>

	<center>
	<h1>Delete Services</h1>

        	 <form action="delete.php" method="POST" onsubmit="return validation()">

        <input type="text" name="s_id" placeholder="Enter Service ID"/><br><br>
         <input type="submit" value="DELETE" name="Delete service"/>

    </form>

</center>


</body>
</html>