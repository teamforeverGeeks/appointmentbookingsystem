<!DOCTYPE html>
<html>
<head>
	<title>update staff</title>
    <style>
         h1{
            background-color: gray;
            color: white;
            font-family: Garmond;
            height: 40px;
            padding: 10px 5px 5px 5px;
            font-size: 30px;
        }
        h1{box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);}

         input,select{
            width: 40%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 20px 8px 20px;
            box-shadow: 1px 1px 2px 1px gray;


        }

    
    </style>
</head>
<body>
    <?php
    include "responsiv.php";
    ?>


	
	<center><h1> Update Staff Schedule</h1></center>
	<center>
	 <form action="updatestafftimes.php" method="post" onsubmit="return validation()"> 
	 	<input type="text" name="sc_id" placeholder="Update Service ID"/><br>
        <br>
    <select name="sname" placeholder="Update your services here">
     <option>Update service1</option>
        <option value="HAIR CUT (MEN)">HAIR CUT (MEN)</option>
        <option value="SCISSORS CUT">SCISSORS CUT</option>
        <option value="SKIN FADE">SKIN FADE</option>
        <option value="ONE GRADE ALL OVER">ONE GRADE ALL OVER</option>
        <option value="FULL HEAD SHAVE & HOT TOWEL">FULL HEAD SHAVE & HOT TOWEL</option>
        <option value="BEARD TRIM & STYLE">BEARD TRIM & STYLE</option>
        <option value="TURKISH SHAVE">TURKISH SHAVE</option>
        <option value="BEARD TRIM (BY MACHINES)">BEARD TRIM (BY MACHINES)</option>
        <option value="EARS, NOSE WAXING">EARS, NOSE WAXING</option>
        <option value="FULL FACE WAXING">FULL FACE WAXING</option>
        <option value=" FULL SERVICE"> FULL SERVICE </option>
        <option value="HAIR CUT (WOMEN)"> HAIR CUT (WOMEN)</option>
        <option value="EYEBROW">EYEBROW</option>
        <option value="WAXING">WAXING</option>
        <option value="FULL BODY WAXING ">FULL BODY WAXING </option>
        <option value="HAIR CUT (KIDS)">HAIR CUT (KIDS)</option>
                <option value="MARK CUT">MARK CUT</option>
        <option value="TRIM">TRIM</option>
        <option value="HAIR CUT & SHAVE">HAIR CUT & SHAVE</option>

    </select>
    <br><br>
    

    <select name="sname2" placeholder="Update your services here">
     <option>Update service2</option>
        <option value="HAIR CUT (MEN)">HAIR CUT (MEN)</option>
        <option value="SCISSORS CUT">SCISSORS CUT</option>
        <option value="SKIN FADE">SKIN FADE</option>
        <option value="ONE GRADE ALL OVER">ONE GRADE ALL OVER</option>
        <option value="FULL HEAD SHAVE & HOT TOWEL">FULL HEAD SHAVE & HOT TOWEL</option>
        <option value="BEARD TRIM & STYLE">BEARD TRIM & STYLE</option>
        <option value="TURKISH SHAVE">TURKISH SHAVE</option>
        <option value="BEARD TRIM (BY MACHINES)">BEARD TRIM (BY MACHINES)</option>
        <option value="EARS, NOSE WAXING">EARS, NOSE WAXING</option>
        <option value="FULL FACE WAXING">FULL FACE WAXING</option>
        <option value=" FULL SERVICE"> FULL SERVICE </option>
        <option value="HAIR CUT (WOMEN)"> HAIR CUT (WOMEN)</option>
        <option value="EYEBROW">EYEBROW</option>
        <option value="WAXING">WAXING</option>
        <option value="FULL BODY WAXING ">FULL BODY WAXING </option>
        <option value="HAIR CUT (KIDS)">HAIR CUT (KIDS)</option>
                <option value="MARK CUT">MARK CUT</option>
        <option value="TRIM">TRIM</option>
        <option value="HAIR CUT & SHAVE">HAIR CUT & SHAVE</option>

    </select>
    <br><br>

    <select name="sname3"  placeholder="Update your services here">
     <option>Update service3</option>
        <option value="HAIR CUT (MEN)">HAIR CUT (MEN)</option>
        <option value="SCISSORS CUT">SCISSORS CUT</option>
        <option value="SKIN FADE">SKIN FADE</option>
        <option value="ONE GRADE ALL OVER">ONE GRADE ALL OVER</option>
        <option value="FULL HEAD SHAVE & HOT TOWEL">FULL HEAD SHAVE & HOT TOWEL</option>
        <option value="BEARD TRIM & STYLE">BEARD TRIM & STYLE</option>
        <option value="TURKISH SHAVE">TURKISH SHAVE</option>
        <option value="BEARD TRIM (BY MACHINES)">BEARD TRIM (BY MACHINES)</option>
        <option value="EARS, NOSE WAXING">EARS, NOSE WAXING</option>
        <option value="FULL FACE WAXING">FULL FACE WAXING</option>
        <option value=" FULL SERVICE"> FULL SERVICE </option>
        <option value="HAIR CUT (WOMEN)"> HAIR CUT (WOMEN)</option>
        <option value="EYEBROW">EYEBROW</option>
        <option value="WAXING">WAXING</option>
        <option value="FULL BODY WAXING ">FULL BODY WAXING </option>
        <option value="HAIR CUT (KIDS)">HAIR CUT (KIDS)</option>
                <option value="MARK CUT">MARK CUT</option>
        <option value="TRIM">TRIM</option>
        <option value="HAIR CUT & SHAVE">HAIR CUT & SHAVE</option>

    </select>
    <br><br>

                       <input type="time" name="time" placeholder="update Your start time">
                       <br><br>
                                          <input type="time" name="etime" class="Time" placeholder="update Your end time">
                                          <br><br>
   <input type="textarea" name="extra" placeholder="Update your extra services here">
   <br><br>


      
        <input type="submit" value="update" name="update bookings"/>

	</form>
</center>
<hr>
<br>


</body>
</html>