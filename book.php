<?php
if(isset($_GET['date'])){
    $date = $_GET['date'];
}

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sname = $_POST['sname'];
    $staff = $_POST['staff'];
    $time = $_POST['time'];
    $mysqli = new mysqli('localhost', 'shrushti', 'Codder@2001', 'ict342');
    $stmt = $mysqli->prepare("INSERT INTO bookings (name, email,date) VALUES (?,?,?)");
    $stmt->bind_param('sss', $name, $email, $date);
    $stmt->execute();
    $msg = "<div class='alert alert-success'>Booking Successfull</div>";
    $stmt->close();
    $mysqli->close();
}

?>








 <?php
include "responsiv.php";
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body>

   

    <?php

if(!isset($_SESSION['f_name'])){
    header("location:signup1.php");
}
else{

   echo "<a href='logout.php'><p style='margin-left:1200px;margin-top:-100px;color:black;font-size:25px;font-family:Garmond;text-decoration: none;'>Logout</p></a>";

}
?>
   
   <br>
   <br>
   <br>




    <div class="container">
        <h1 class="text-center">Book for Date: <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <?php echo isset($msg)?$msg:'';  ?>



                <form action="insertbooking.php" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">Services</label>
                        <select name="sname" class="form-control">
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

                    </div>
                    <div class="form-group">
                        <label for="">Staff</label>
                    <select name="staff" class="form-control">
        <option></option>
        <option value="Andy">Andy (MEN SPECIALIST)</option>
        <option value="Many">Many (WOMEN SPECIALIST)</option>
        <option value="Rossy">Rossy (KIDS SPECIALIST)</option>
        <option value="Branda">Branda (ALL SERVICES)</option>
    </select>
</div>
                        <div class="form-group">
                        <label for="">Time</label>
                    <select name="time" class="form-control">
        <option></option>
        <option value="10am - 11am">10am - 11am</option>
        <option value="11am - 12am">11am - 12am</option>
        <option value="1pm - 2pm">1pm - 2pm</option>
        <option value="3pm - 4pm">3pm - 4pm</option>
        <option value="4pm - 5pm">4pm - 5pm</option>
        <option value="5pm - 6pm">5pm - 6pm</option>



    </select>
</div>



                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                

                </form>
               
                <br>


              



            </div>
        </div>
    </div>
    <center>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="shonapanchal67@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="AUD">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<table>
<tr><td><input type="hidden" name="on0" value="Service Prices">Service Prices</td></tr><tr><td><select name="os0">
    <option></option>
    <option value="HAIR CUT">HAIR CUT $20.00 AUD</option>
    <option value="SCISSOR CUT">SCISSOR CUT $20.00 AUD</option>
    <option value="SKIN FADE">SKIN FADE $15.00 AUD</option>
    <option value="ONE GRADE ALL OVER">ONE GRADE ALL OVER $15.00 AUD</option>
        <option value="FULL HEAD SHAVE & HOT TOWEL">FULL HEAD SHAVE & HOT TOWEL $13.00 AUD</option>
        <option value="BEARD TRIM & STYLE">BEARD TRIM & STYLE $12.00 AUD</option>
        <option value="TURKISH SHAVE">TURKISH SHAVE $12.00 AUD</option>
        <option value="BEARD TRIM (BY MACHINES)">BEARD TRIM (BY MACHINES) $8.00 AUD</option>
        <option value="EARS, NOSE WAXING">EARS, NOSE WAXING $5.00 AUD</option>
        <option value="FULL FACE WAXING">FULL FACE WAXING $1o.00 AUD</option>
        <option value=" FULL SERVICE"> FULL SERVICE $40.00 AUD</option>
        <option value="HAIR CUT (WOMEN)"> HAIR CUT (WOMEN) $20.00 AUD</option>
        <option value="EYEBROW">EYEBROW $10.00 AUD</option>
        <option value="WAXING">WAXING $25.00 AUD</option>
        <option value="FULL BODY WAXING ">FULL BODY WAXING $40.00 AUD</option>
        <option value="HAIR CUT (KIDS)">HAIR CUT (KIDS) $15.00 AUD</option>
                <option value="MARK CUT">MARK CUT $5.00 AUD</option>
        <option value="TRIM">TRIM $8.00 AUD</option>
        <option value="HAIR CUT & SHAVE">HAIR CUT & SHAVE $20.00 AUD</option>

</select> </td></tr>
</table>
<input type="hidden" name="option_select0" value="HAIR CUT">
<input type="hidden" name="option_amount0" value="20.00">
<input type="hidden" name="option_select1" value="SCISSOR CUT">
<input type="hidden" name="option_amount1" value="20.00">
<input type="hidden" name="option_select2" value="SKIN FADE">
<input type="hidden" name="option_amount2" value="15.00">
<input type="hidden" name="option_select3" value="ONE GRADE ALL OVER">
<input type="hidden" name="option_amount3" value="15.00">
<input type="hidden" name="option_select4" value="FULL HEAD SHAVE & HOT TOWEL">
<input type="hidden" name="option_amount4" value="13.00">
<input type="hidden" name="option_select5" value="BEARD TRIM & STYLE">
<input type="hidden" name="option_amount5" value="12.00">
<input type="hidden" name="option_select6" value="TURKISH SHAVE">
<input type="hidden" name="option_amount6" value="8.00">
<input type="hidden" name="option_select7" value="BEARD TRIM (BY MACHINES)">
<input type="hidden" name="option_amount7" value="5.00">
<input type="hidden" name="option_select8" value="EARS, NOSE WAXING">
<input type="hidden" name="option_amount8" value="10.00">
<input type="hidden" name="option_select9" value="FULL FACE WAXING">
<input type="hidden" name="option_amount9" value="40.00">
<input type="hidden" name="option_select10" value="FULL SERVICE">
<input type="hidden" name="option_amount10" value="20.00">
<input type="hidden" name="option_select11" value="HAIR CUT(WOMEN)">
<input type="hidden" name="option_amount11" value="20.00">
<input type="hidden" name="option_select12" value="EYEBROW">
<input type="hidden" name="option_amount12" value="10.00">
<input type="hidden" name="option_select13" value="WAXING">
<input type="hidden" name="option_amount13" value="25.00">
<input type="hidden" name="option_select14" value="FULL BODY WAXING">
<input type="hidden" name="option_amount14" value="40.00">
<input type="hidden" name="option_select15" value="HAIR CUT (KIDS)">
<input type="hidden" name="option_amount15" value="15.00">
<input type="hidden" name="option_select16" value="MARK CUT">
<input type="hidden" name="option_amount16" value="5.00">
<input type="hidden" name="option_select17" value="TRIM">
<input type="hidden" name="option_amount17" value="8.00">
<input type="hidden" name="option_select18" value="HAIR CUT & SHAVE">
<input type="hidden" name="option_amount18" value="20.00">
<input type="hidden" name="option_index" value="0">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</center>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>

</html>
