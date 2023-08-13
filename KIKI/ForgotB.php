

<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'KIKI';

$conn = mysqli_connect( $server,$user,$pass, $database);

?>
<?php


$id = isset ($_POST['id']) ? $_POST['id'] :'';
$email = $_POST['email'];



$queryR = "INSERT into `KIKI`.`Forgotpassword`(`id`,`email`)values ('$id','$email')" ;



        if (mysqli_query($conn,$queryR)) 
        {
            echo "<script>alert( 'Check Your Email For Your password  ')</script>";
            echo "<script>window.location.href = 'home.php';</script>";
        
        }
        else 
        {
            echo "<script>alert( 'Try Again')</script>";
            
        }

        






?>
