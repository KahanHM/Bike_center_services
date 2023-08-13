
<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'KIKI';

$conn = mysqli_connect( $server,$user,$pass, $database);

?>
<?php



$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$city = $_POST['city'];
$contact_no = $_POST['contact_no'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


$queryR = "INSERT into `KIKI`.`userd`(`first_name`,`last_name`,`email`,`DOB`,`city`,`contact_no`,`password`,`confirm_password`)values ('$first_name','$last_name','$email','$DOB','$city','$contact_no','$password','$confirm_password')" ;



        if (mysqli_query($conn,$queryR)) 
        {
            echo "<script>alert( 'register  success')</script>";
       echo "<script>window.location.href = 'home.php';</script>";
        }
        else 
        {
            echo "<script>alert( 'Email  or password is wrong Try again ')</script>";
        }

        






?>
