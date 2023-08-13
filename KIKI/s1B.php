
<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'KIKI';

$conn = mysqli_connect( $server,$user,$pass, $database);

   
?>
<?php


$id = isset ($_POST['id']) ? $_POST['id'] :'';
$name = $_POST['name'];
$Pnum = $_POST['Pnum'];
$Address = $_POST['Address'];
$Bmodel = $_POST['Bmodel'];
$details = $_POST['details'];



$queryR = "INSERT into `KIKI`.`s1F`(`id`,`name`,`Pnum`,`Address`,`Bmodel`,`details`)values ('$id','$name','$Pnum','$Address','$Bmodel','$details')" ;



        if (mysqli_query($conn,$queryR)) 
        {
            echo "<script>alert( 'Booking successfully please wait we will call you')</script>";
            echo "<script>window.location.href = 'dashboardF.php';</script>";
        }
        else 
        {
            echo "<script>alert( 'Try again')</script>";
        }

        






?>
