<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'KIKI';

$conn = mysqli_connect( $server,$user,$pass, $database);


?>
<?php


$id = $_POST['id'];
$name = $_POST['name'];
$feedback = isset ($_POST['feedback']) ? $_POST['feedback'] :'';
 




$queryR = "INSERT into `KIKI`.`feedback`(`name`,`feedback`,`id`)values ('$name','$feedback','$id')" ;



        if (mysqli_query($conn,$queryR)) 
        {
            echo "<script>alert( 'Thank you for you Feedback come Again')</script>";
         echo "<script>window.location.href = 'feedbackF.php';</script>";
        }
        else 
        {
            echo "<script>alert( 'Try again')</script>";
        }

        






?>
