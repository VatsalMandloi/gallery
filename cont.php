<?php
    require 'connection.php';
    session_start();
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $message=mysqli_real_escape_string($con,$_POST['message']);
    $date = date('Y-m-d H:i:s');
        $message="insert into message(date,name,email,message) values ('$date','$name','$email','$message')";      
        $user_registration_result=mysqli_query($con,$message) or die(mysqli_error($con));
        echo '<script>alert("message sent successfully!!")</script>';
       ?>
<meta http-equiv="refresh" content="0.1;url=index.php" />
