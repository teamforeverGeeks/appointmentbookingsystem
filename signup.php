<!DOCTYPE html>
<html>
<style>
 {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
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
  
}
.lbtn{
  padding: 14px 20px;
  background-color:  #b3ffd9;
  width: 20%;
  margin-left: 15px;

}


/* Float cancel and signup buttons and add an equal width */
.cbtn, .sbtn {
  float: center;
  width: 20%;
  margin-left: 15px;

  
}

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
  .cbtn, .sbtn {
     width: 100%;
  }
}
</style>



<body style="background-color:;">
  <?php include "responsiv.php";
?>

  <a href="loginstaff.php"><p style="margin-left: 1200px; font-family: Garmond; font-size: 20px;">Staff Log In</p></a>
<form action="sign_up.php" method="POST" style="border:1px solid #ccc">
  <div class="hoad">
    <h1>Sign-Up Form</h1>
    <p>Fill this form to create your account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name"name="name" required>

    <label for="mail"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="mail" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

     <label for="password-repeat"><b>Repeat Password</b></label>
      <input type="password"  placeholder="Enter password again " name="password-repeat" required>
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter your address with postal code" name="address" required>
      <label for="phone"><b>Phone Number</label>
        <input type="text" placeholder="Enter your phone number with +61"name="phone" required>
   
    <div class="sett">
      <button type="reset" class="cbtn"><b>Reset</b></button>
      <button type="submit" class="sbtn"><b>Sign Up</b></button>
       
    </div>

  </div>


</form>

</body>
</html>