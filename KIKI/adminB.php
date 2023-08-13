<?php

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'KIKI';

    $query = mysqli_connect( $server,$user,$pass, $database);

?>
<?php

   if (isset($_POST['submit'])) 
   {
 

    $Aid = $_POST['Aid'];
    $password = $_POST['password'];


    $select_data = " SELECT * From `admin` where Aid ='$Aid' AND password='$password'" ;
    $select_query = mysqli_query($query,$select_data);
    $Aid_count = mysqli_num_rows($select_query);
    
   if ($Aid_count) 
   {
        echo "<script>alert( 'login success')</script>";
        echo "<script>window.location.href = 'adminpanel.php';</script>";
    }
    else 
    {
        echo "<script>alert( 'Aid or password incorrect')</script>";
    }
}
   
    


?>