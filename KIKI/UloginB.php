<?php

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'KIKI';

    $conn = mysqli_connect( $server,$user,$pass, $database);

  
?>
<?php

   if (isset($_POST['sbt'])) 
   {
     

    $email = $_POST['email'];
    $password = $_POST['password'];


    $select_data = " SELECT * From `userD` where email ='$email' and password='$password' " ;
    $select_query = mysqli_query($conn,$select_data);
    $email_count = mysqli_num_rows($select_query);
   
    
   if ($email_count) 
   {
        echo "<script>alert( ' user login success')</script>";
       echo "<script>window.location.href = 'dashboardF.php';</script>";
    }
    else 
    {
        echo "<script>alert( 'Email or password incorrect')</script>";
        echo "<script>window.location.href = 'UloginF.php';</script>";
    }
}
   
    


?>