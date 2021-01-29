<?php



  $con=mysql_connect("localhost","shrushti","Codder@2001","ict342");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sname = $_POST['sname'];
    $staff = $_POST['staff'];
    $time = $_POST['time'];

    # email = srutipanchal...


 $sql= "select count(s_count) from signup where email='$email' ";

$result = mysqli_query($con,$sql); 

$result =my      // this condition used for compare the database and database value if the connection and insert query is correct then data entered in database , else message is come please try again
    if(mysqli_num_rows($result)==4){
        $sql="update signup set s_count=0 where email = $email,
              insert into bookings(name, email, date, b_service, b_staff, b_time, apet_free)
                         values ('$name','$email','$date','$b_service','$b_staff','$b_time', 'True')";
        }
    else{
       $sql = "update signup set s_count = s_count +1 where email = $email,
               insert into bookings(name, email, date, b_service, b_staff, b_time, apet_free)
                       values ('$name','$email','$date','$b_service','$b_staff','$b_time', 'False')";   
          if(mysqli_query($con,$sql)){
          echo "success";;
        }
           else{
          echo "please try again";
            }
       }
}

    
    //$order_count = $mysqli->prepare("select s_count from signuop where email= (?)");
    //$order_count.bind_param($email)
    //$order_count.execute()

    # x will contain result from previous query
    //$x=4
    //if ($x == 4){
        //update signup set s_count=0 where email = $email
        //insert into bookings(name, email, date, b_service, b_staff, b_time, apet_free)
      //                      (., .,.,.,.,., True)
    //}else{
        //update signup set s_count = s_count +1 where email = $email
       // insert into bookings(name, email, date, b_service, b_staff, b_time, apet_free)
     //                       (., .,.,.,.,., False)
   // }

    # forget this bottom logic
    //$mysqli = new mysqli('localhost', 'shrushti', 'Codder@2001', 'ict342');
    //$stmt = $mysqli->prepare("INSERT INTO bookings (name, email, date,b_service,b_staff,b_time) VALUES (?,?,?,?,?,?)");
    //$stmt->bind_param('sss', $name, $email, $date, $sname, $staff ,$time);
    //$stmt->execute();


    //$msg = "<div class='alert alert-success'>Booking Successfull</div>";
    //$payment = "<div class='alert alert-success'>Pay Now</div>";
    //$stmt->close();
    //$mysqli->close();
//}

?>

