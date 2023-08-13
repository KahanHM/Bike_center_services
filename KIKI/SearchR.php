<html>
<head>
    <style>
       
        .content-table
        {
            border-collapse: collapse;
            margin: 10px 0;
            font-size: 0.5cm;
            min-width: 400px;
            
         }
         .content-table thead 
         {
            background-color: blu;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
            

         }
         .content-table th,
         .content-table td
         {
            padding: 5px 5px;
            align-items:center;
           

         }
         .content-table tbody tr
         {
            border-bottom: 3px  solid blue;
         }
         .content-table tbody tr:nth-of-type(even)
         {
            background-color: #E64A19;

         }
         .content-table tbody tr:nth-of-type(odd)
         {
            border-bottom: 4px solid black;
         }
         
        



    </style>
</head>
<body>




<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'KIKI';



$conn = mysqli_connect( $server,$user,$pass, $database);

$email = isset ($_POST['email']) ? $_POST['email'] :'';

$query ="SELECT * from userd where email ='$email'";
$result =mysqli_query($conn,$query);
$email_found = mysqli_num_rows($result);
if ($email_found)
{
   echo "Email Found";
}
else {
   
    echo "<script>alert( 'No Email Found')</script>";
    echo "<script>window.location.href = 'ASF.php';</script>";
    
    
}
?>




<table class="content-table" >
    <tr> 
        <th>Email</th>
        <th>First_name</th>
        <th>Last_name</th>
        <th>DOB</th>
        <th>city</th>
        <th>contact_no</th>
        <th>password</th>
        <th>confirm_password</th>
    </tr>


        <?php
            while ($rows=mysqli_fetch_assoc($result))
            {
        ?>  
           
            <tr>
            <td><?php echo $rows['email'];?></td>  
        <td> <?php echo $rows['first_name'];?></td>        
        <td><?php echo $rows['last_name'];?></td>
              
         <td><?php echo $rows['DOB'];?></td>
         <td><?php echo $rows['city'];?></td>
         <td><?php echo $rows['contact_no'];?></td>       
         <td><?php echo $rows['password'];?></td>
         <td><?php echo $rows['confirm_password'];?></td>  
        
        <?php 
       
            }
        ?>
        </tr>   
      

          </table>  

</body>


</html>