<!DOCTYPE html>
<html>
<style>
 {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password], select[name=sname], select[name=sname2], select[name=sname3] ,input[type=time], input[type=textarea] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #ffddcc;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;

}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cbtn {
  padding: 14px 20px;
  background-color: #ff8566;
  float: center;
  width: 20%;
  margin-left: 15px;
  
}
.lbtn{
  padding: 14px 20px;
  background-color:  #b3ffd9;
  width: 20%;
  margin-left: 15px;

}


/* Float cancel and signup buttons and add an equal width */


/* Add padding to hoad elements */
.hoad {
  padding: 16px;
}

/* Clear floats */
.sett::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cbtn {
     width: 100%;
  }
}
</style>

<body>
  <?php include "responsiv.php"
?>


<form action="sched.php" method="POST" style="border:1px solid #ccc">
  <div class="hoad">
    <h1>My Schedule</h1>
    <p><b>You can update your schedule timings and select your best three services that you can provide </b></p>
    <hr>

   

    <label for="name"><b>Stylish Name</b></label>
    <input type="text" placeholder="Enter name please" name="name" required>

    <label for="services"><b>Your best services</b></label>
   <select name="sname" class="form-control" multiple size="1">
     <option></option>
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

    <label for="service2"><b>Your best services</b></label>
   <select name="sname2" class="form-control" multiple size="1">
     <option></option>
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

    <label for="service3"><b>Your best services</b></label>
   <select name="sname3" class="form-control" multiple size="1">
     <option></option>
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

 <label for="time"><b>Start Time</b></label>
                   <input type="time" name="time">
  <label for= "etime" class="Time"><b>End Time</b></label>
                   <input type="time" name="etime" class="Time">

   <label for="text"><b>Enter your extra services</b> </label>                
   <input type="textarea" name="extra" placeholder="Enter your extra services here">
    <div class="sett">
      <button type="reset" class="cbtn"><b>Reset</b></button>
      
       <a href=""><button type="login" class="lbtn"><b>Save</b></button></a>
    </div>
  </div>

</form>


</body>
</html>